<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Models\User;
use Hash;
use App\Models\Product;
use App\Models\PurchaseDetails;
use Illuminate\Support\Str;
use App\Models\Purchase;
use App\Models\PurchaseUserDetails;
use App\Models\SuppilerDetails;
use App\Models\Brands;
use App\Models\Category;
use App\Models\PurchaseByAdmin;
use PDF;
use App\Models\Branch;
use App\Models\Posproduct;



class AdminController extends Controller
{
    public function adminlogin()
    {
        return view('Admin.login');
    }
    public function Dashboard()
    {
        // if(Auth::user()->role == 1)
        // {
            return view('Admin.profileregister');
        // }
    }
    public function RegisterStaff()
    {
        $Branches = Branch::orderby('id', 'desc')->where('isactive', 1)->get();
        $Users = User::with(['BranchData'])->get();
        return view('Admin.RegisterStaff', compact('Users', 'Branches'));
    }
    public function newregistration(Request $request)
    {
        $validator = \Validator::make($request->all(), [
            'email' => 'unique:users'
        ]);
 
        if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }  
        $Register = new User;
        $Register->name = $request->registername;
        $Register->mobile = $request->number;
        $Register->email = $request->email;
        $Register->address = $request->address;
        $Register->password =  Hash::make($request->password);
        $Register->role = (int)$request->role;
        $Register->branch = (int)$request->branch;
        $Register->isactive = $request->status;
        $Register->save();
        if(! $Register)
        {
        return redirect()->back()->with('message', 'Sorry Something went wrong');
        }
        return redirect()->back()->with('message', 'User Registered Sucessfully');
    }
    public function pos()
    {
         $randomString = \Session::getId();
        $Salesmen = User::where('role', 5)->where('isactive', 1)->select('name', 'id')->get();
        $data = Posproduct::with(['productdetails'])->where('tempid', $randomString)->get();
        $total = $data->map(function ($product, $key) {
            return $product->price * $product->quantity;
        })->sum();
        // dd($total);
        return view('Admin.pos', compact('total', 'Salesmen', 'randomString', 'data'));
    }
    public function purchaseproduct(Request $request)
    {
        $GetProduct = Product::where('barcode', $request->posnumber)->first();
        $CheckExist = Posproduct::where('tempid', \Session::getId())->where('productid', $GetProduct->id);
        if($CheckExist->count() == 0)
        {
            $Product = new Posproduct; 
            $Product->tempid = $request->randomnumber;
            $Product->productid = $GetProduct->id;
            $Product->price = $GetProduct->price;
            $Product->quantity = 1;
            $Product->save();
            if(! $Product)
            {
                return 0;
            }
            return 1;
        }
        elseif($CheckExist->count() == 1)
        {
            $UpdateQuantity = Posproduct::where('tempid', \Session::getId())->where('productid', $GetProduct->id)->increment('quantity', 1);
            if(! $UpdateQuantity)
            {
                return 0;
            }
            return 1;
        }
        
        if($Product == null || $Product == "")
        {
            return 0;
        }
        elseif ($Product != null) {
            return $Product;
        }else{
            return 0;
        }
    }
    public function sales()
    {
        return view('Admin.sales');
    }
   public function purchaseproducts(Request $request)
    {
        $ProductsInfo = Posproduct::where('tempid', \Session::getId())->get();
        foreach($ProductsInfo as $ProductsInfos)
        {
            if($ProductsInfos->price * $ProductsInfos->quantity == 0)
            {
                return 0;
            }
        }
        $total = $ProductsInfo->map(function ($product, $key) {
            return $product->price * $product->quantity;
        })->sum();
        $transactionid = Purchase::whereDate('created_at', \Carbon\Carbon::today())->count();
 
        $purchasedata = new Purchase;
        $purchasedata->transcationid = 'MWS' . date("d") . date("m") . date("y") .'000'.$transactionid + 1;
        $purchasedata->salesman = (int)$request->salesmen;
        $purchasedata->branch = Auth::user()->branch;
        $purchasedata->trns = $request->trns ?? '';
        $purchasedata->pos = Auth::user()->id;
        $purchasedata->totalpurchase = $total;
        $purchasedata->discount = $request->discount;
        $purchasedata->partialpay = $request->partialpay ?? '';
        if(isset($request->partialpay))
        {
            $purchasedata->ispartiallypay = 1;
        }
        $purchasedata->sessionid = \Session::getId();
        $purchasedata->save();
        $ProductsInfo = Posproduct::where('tempid', \Session::getId())->get();
        foreach($ProductsInfo as $Product)
        {
            $Productdetails = new PurchaseDetails;
            $Productdetails->purchaseid = $purchasedata->id;
            $Productdetails->product_id = (int)$Product->productid;
            $Productdetails->purchasedprice = $Product->price;
            $Productdetails->quantity = $Product->quantity;
            $Productdetails->paymentmode = $request->paymentmode;
            $Productdetails->save();
            $DescreaseQuantity = Product::where('id', $Product->productid)->decrement('unit', $Product->quantity);
        }
        // foreach($request->productid as $product)
        // {
        //     $Productprice = \DB::table('products')->where('id', $product)->select('price')->first();
        //     // dd($Productprice);
        //     $Productdetails = new PurchaseDetails;
        //     $Productdetails->purchaseid = $purchasedata->id;
        //     $Productdetails->product_id = (int)$product;
        //     $Productdetails->purchasedprice = $Productprice->price;
        //     $Productdetails->quantity = 1;
        //     $Productdetails->paymentmode = $request->paymentmode;
        //     $Productdetails->save();
        // }
        $Customerdetails = new PurchaseUserDetails;
        $Customerdetails->purchaseid = $purchasedata->id;
        $Customerdetails->name = $request->customername;
        $Customerdetails->branch = Auth::user()->branch;
        $Customerdetails->number = $request->customernumber;
        $Customerdetails->save();
        //  $pdf = PDF::loadView('billing');
        //  return response()->download($pdf);
        // $pdf = PDF::loadView('billing');  
        // return $pdf->download('pdfview.pdf'); 
        // $pdf = PDF::loadView('billing');
        // download PDF file with download method
        // return $pdf->download('pdf_file.pdf');
        return $purchasedata->id;

    }
    public function customerlist()
    {
        if(Auth::user()->role == 1)
        {
            $customerlist = PurchaseUserDetails::get()->unique('number');
        }else if(Auth::user()->role == 2)
        {
            $customerlist = PurchaseUserDetails::where('branch', Auth::user()->branch)->get()->unique('number');
        }
        
        return view('customers.customerslist', compact('customerlist'));
    }
    public function purchasedlisting($number)
    {
        $CustomerPurchases = PurchaseUserDetails::with(['transcationid'])->where('number', $number)->get();
        // dd($CustomerPurchases);
        return view('customers.customerpurchases', compact('CustomerPurchases'));
    }
    public function singletranscitiondetails($transcationid)
    {
        $transcationDetails = Purchase::with(['purchasedetails'])->where('transcationid', $transcationid)->get();
        return view('customers.purchasedproducts', compact('transcationDetails', 'transcationid'));
    }
    public function supplierslist()
    {
        $Suppliers = SuppilerDetails::orderBy('id', 'desc')->get();
        return view('Suppliers.supliers', compact('Suppliers'));
    }
    public function addsuppiler(Request $request)
    {
        $AddSupplierDetails = new SuppilerDetails;
        $AddSupplierDetails->name = $request->name;
        $AddSupplierDetails->number = $request->number;
        $AddSupplierDetails->isactive = 1;
        // $AddSupplierDetails->purchases = $request->purchases;
        $AddSupplierDetails->save();
        if(! $AddSupplierDetails)
        {
            return 0;
        }
        return 1;
    }
    public function Brands()
    {
        $Brands = Brands::where('isactive', 1)->orderby('id', 'desc')->get();
        return view('Admin.Brandslist', compact('Brands'));
    }
       public function customizedproducts()
    {
     $Product = Product::where('isactive', 1)->where('type', 'customized')->orderby('id', 'desc')->get();
        return view('Product.customizedproducts', compact('Products')); 
    }
    public function AddBrands(Request $request)
    {
        $filename = time().'.'.request()->filename->getClientOriginalExtension();
        request()->filename->move(public_path('images/brand/logos'), $filename);
        $CreateBrand = new Brands;
        $CreateBrand->name = $request->brandName;
        $CreateBrand->image = $filename;
        $CreateBrand->isactive = 1; 
        $CreateBrand->save(); 
        return redirect()->back()->with('message', 'New Brand Added Sucessfully'); 
    }

      public function Addcustomizedproducts(Request $request)
    {
      
        $filename = time().'.'.request()->filename->getClientOriginalExtension();
        request()->filename->move(public_path('images/Customizedproducts/logos'), $filename);
        $Customized = Product::orderby('id', 'desc')->where('type', 'customized')->select('customizeid')->first();
        if(isset($Customized->customizeid))
        {
            $id = $Customized->customizeid + 1;
        }else{
            $id = 1;
        }
        
        // dd($id);
        //dd($Customized);
        $CreateProduct = new Product;
        $CreateProduct->name = $request->customizedproductsname;
    
        $CreateProduct->image = $filename;
        $CreateProduct->isactive = 1; 
        $CreateProduct->customizeid = $id;
        //$CreateProduct->unit = 1; 
        $CreateProduct->type = 'customized'; 
        //$CreateProduct->barcode = 1; 
        $CreateProduct->category = 0; 
        $CreateProduct->brand = 0;
        $CreateProduct->productSize = 0;
        $CreateProduct->price = 0;
        $CreateProduct->description = '';
        $CreateProduct->save(); 
        
        return redirect()->back()->with('message', 'New Product Added Sucessfully'); 
    }
    
    public function deleteSupplier(Request $request)
    {
        $deleteSupplier = SuppilerDetails::where('id', $request->id)->update([
            'isactive' => 0,
        ]);
        if(! $deleteSupplier)
        {
            return 0;
        }
        return 1;
    }
    public function deletebrand(Request $request)
    {
        $deletebrand = Brands::where('id', $request->id)->update([
            'isactive' => 0,
        ]);
        if(! $deletebrand)
        {
            return 0;
        }
        return 1;
    }
       public function deletecustomizedproducts(Request $request)
    {
        $customizedproducts = Customizedproducts::where('id', $request->id)->update([
            'isactive' => 0,
        ]);
        if(! $customizedproducts)
        {
            return 0;
        }
        return 1;
    }
    public function Categories()
    {
        $Categories = Category::where('isactive', 1)->orderby('id', 'desc')->get();
        return view('Admin.Categories', compact('Categories'));
    }
    public function AddCategory(Request $request)
    {
        $filename = time().'.'.request()->uploadImage->getClientOriginalExtension();
        request()->uploadImage->move(public_path('images/Category/logos'), $filename);
        $Category = new Category;
        $Category->name = $request->name;
        $Category->image = $filename;
        $Category->isactive = 1;
        $Category->save();
        return redirect()->back()->with('message', 'New Category Added Sucessfully');   
    }
    public function DeleteCategory(Request $request)
    {
        $DeleteCategory = Category::where('id', $request->id)->update([
            'isactive' => 0,
        ]);
        if(! $DeleteCategory)
        {
            return 0;
        }
        return 1;
    }
    public function dailysales($fromdate='', $todate='')
    {
        if(Auth::user()->role == 1)
        {
            if(isset($fromdate) && $fromdate != '' && isset($todate) && $todate != '')
            {
                $Sales = Purchase::with(['customerdetails'])->with(['purchasedetails'])->where('created_at', '>=', $fromdate)
                            ->where('created_at', '<=', $todate)->orderby('id', 'desc')->get();
                // dd('ffffffffffff');
            }else if(isset($fromdate) && $fromdate != '')
            {
                $Sales = Purchase::with(['customerdetails'])->with(['purchasedetails'])->whereDate('created_at', '=', $fromdate)
                           ->orderby('id', 'desc')->get();
            }
            
            else{
                $Sales = Purchase::with(['customerdetails'])->with(['purchasedetails'])->orderby('id', 'desc')->get();
            }
        }else{
            if(isset($fromdate) && $fromdate != '' && isset($todate) && $todate != '')
            {
                $Sales = Purchase::with(['customerdetails'])->with(['purchasedetails'])->where('branch', Auth::user()->branch)->where('created_at', '>=', $fromdate)
                            ->where('created_at', '<=', $todate)->orderby('id', 'desc')->get();
                // dd('ffffffffffff');
            }else if(isset($fromdate) && $fromdate != '')
            {
                $Sales = Purchase::with(['customerdetails'])->with(['purchasedetails'])->where('branch', Auth::user()->branch)->whereDate('created_at', '=', $fromdate)
                           ->orderby('id', 'desc')->get();
            }
            
            else{
                $Sales = Purchase::with(['customerdetails'])->with(['purchasedetails'])->where('branch', Auth::user()->branch)->orderby('id', 'desc')->get();
            }
        }
        
    
        // dd($Sales);
        return view('sales.sales', compact('Sales'));
    }
    public function Purchases()
    {
        $invoicecode = rand(1111111111,9999999999);
        $Suppliers = SuppilerDetails::orderby('id', 'desc')->where('isactive', 1)->select('name', 'id')->get();
        $Purchasesdata = PurchaseByAdmin::with(['supilerdata', 'productdetails'])->get();
        return view('sales.purchases', compact('Suppliers', 'Purchasesdata', 'invoicecode'));
    }
    public function addpurchase(Request $request)
    {
        $Purchase = new PurchaseByAdmin;
        $Purchase->date = $request->date;
        $Purchase->supiler = (int)$request->supilername;
        $Purchase->price = $request->price;
        $Purchase->item = $request->ItemInput;
         $Purchase->invoiceNumber = $request->invoiceNumber;
          $Purchase->quantity = $request->quantity;
              $Purchase->units = $request->units;
          
        $Purchase->save();
        if(! $Purchase)
        {
            return 0;
        }
        return 1;
    }
    public function invoice($transactionid){
        $Branchdetails = \DB::table('branches')->where('id', \Auth::user()->branch)->first();
        $Branchdetail = \DB::table('branches')->where('isactive', 1)->get();
         $data = Purchase::with(['purchasedetails'])->where('transcationid', $transactionid)->first();
          return view('sales.invoice', compact('data', 'Branchdetails', 'Branchdetail'));
    }
  public function printpdf()
    {
        $Branchdetails = \DB::table('branches')->where('id', \Auth::user()->branch)->first();
        $Branchdetail = \DB::table('branches')->where('isactive', 1)->get();
        $data = Purchase::with(['purchasedetails', 'purchasedetails', 'salesmandata', 'branchdata'])->with(['customerdetails'])->where('sessionid', \Session::getId())->orderby('id', 'desc')->first();
        // dd($data);
        Posproduct::where('tempid', \Session::getId())->delete();
        return view('billing', compact('data', 'Branchdetails', 'Branchdetail'));
        // $pdf = PDF::loadView('billing',compact('data'));  
        // return $pdf->stream('pdfview.pdf'); 
    }
    public function warehouse()
    {
        $Branches = Branch::orderby('id', 'desc')->get();
        return view('Admin.warehouse',compact('Branches'));
    }
    public function AddnewBranch(Request $request)
    {
        // $filename = time().'.'.request()->image->getClientOriginalExtension();
        // request()->image->move(public_path('images/branch/logos'), $filename);
        $NewBranch = new Branch;
        $NewBranch->name = $request->branchname;
        // $NewBranch->email = $request->branchemail;
        $NewBranch->mobile = $request->branchmobile;
        $NewBranch->address = $request->address;
        // $NewBranch->image = $filename;
        $NewBranch->isactive = 1;
        $NewBranch->save();
        return redirect()->back()->with('message', 'New Branch Added Sucessfully');
    }
    public function dashboardview()
    {
        if(Auth::user()->role == 1){
            $Sales = Purchase::with(['customerdetails'])->with(['purchasedetails'])->orderby('id', 'desc')->get();
            $product = \DB::table('products')->where('isactive', 1)->count();
            $SalesToday = Purchase::whereDate('created_at', \Carbon\Carbon::today())->sum('totalpurchase');
            $DiscountToday = Purchase::whereDate('created_at', \Carbon\Carbon::today())->sum('discount');
            $DailyAmount = $SalesToday - $DiscountToday;
            $SalesMonth = Purchase::whereMonth('created_at', \Carbon\Carbon::now()->month)->sum('totalpurchase');
            // dd($SalesMonth);
            $DiscountMonth = Purchase::whereMonth('created_at', \Carbon\Carbon::now()->month)->sum('discount');
            $MonthAmount = $SalesMonth - $DiscountMonth;
            $partialamount = Purchase::whereDate('updated_at', \Carbon\Carbon::today())->sum('payment2');
            $RecivedAmount = Purchase::whereDate('created_at', \Carbon\Carbon::today())->sum('partialpay') + Purchase::where('partialpay', 0)->orwhere('partialpay', null)->whereDate('created_at', \Carbon\Carbon::today())->sum('totalpurchase'); 
            $customerlist = PurchaseUserDetails::get()->unique('number')->count();   
        }elseif(Auth::user()->role == 2)
        {
            $Sales = Purchase::with(['customerdetails'])->with(['purchasedetails'])->where('branch', Auth::user()->branch)->orderby('id', 'desc')->get();
            $product = \DB::table('products')->where('branch', Auth::user()->branch)->where('isactive', 1)->count();
            $SalesToday = Purchase::whereDate('created_at', \Carbon\Carbon::today())->where('branch', Auth::user()->branch)->sum('totalpurchase');
            $DiscountToday = Purchase::whereDate('created_at', \Carbon\Carbon::today())->where('branch', Auth::user()->branch)->sum('discount');
            $DailyAmount = $SalesToday - $DiscountToday;
            $SalesMonth = Purchase::whereMonth('created_at', \Carbon\Carbon::now()->month)->where('branch', Auth::user()->branch)->sum('totalpurchase');
            // dd($SalesMonth);
            $DiscountMonth = Purchase::whereMonth('created_at', \Carbon\Carbon::now()->month)->where('branch', Auth::user()->branch)->sum('discount');
            $MonthAmount = $SalesMonth - $DiscountMonth;
            $partialamount = Purchase::whereDate('updated_at', \Carbon\Carbon::today())->where('branch', Auth::user()->branch)->sum('payment2');
            $RecivedAmount = Purchase::whereDate('created_at', \Carbon\Carbon::today())->where('branch', Auth::user()->branch)->sum('partialpay') + Purchase::where('partialpay', 0)->orwhere('partialpay', null)->whereDate('created_at', \Carbon\Carbon::today())->where('branch', Auth::user()->branch)->sum('totalpurchase'); 
            $customerlist = PurchaseUserDetails::where('branch', Auth::user()->branch)->get()->unique('number')->count();  
        }
        
       
        return view('Admin.sidebar', compact('Sales','customerlist', 'DailyAmount', 'product', 'MonthAmount', 'partialamount', 'RecivedAmount'));
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('adminlogin');
    }
    public function downloadbarcodeproduct(Request $request, $id)
    {
        $Barcodeinfo = \DB::table('products')->where('id', $id)->first();
        $Barcode = $Barcodeinfo->barcode;
        return view('Product.Barcode', compact('Barcode', 'Barcodeinfo'));
        $pdf = PDF::loadView('Product.Barcode', compact('Barcode')); 
            return $pdf->download('Barcode.pdf');
    }
    public function downloadallbarcodes()
    {
        if(Auth::user()->role == 1)
        {
            $Barcodeinfo = \DB::table('products')->where('type', 'readymade')->get();
        }else{
            $Barcodeinfo = \DB::table('products')->where('branch', Auth::user()->branch)->where('type', 'readymade')->get();
        }
        return view('Product.Barcodes', compact('Barcodeinfo'));
        $pdf = PDF::loadView('Product.Barcodes', compact('Barcodeinfo')); 
            return $pdf->download('Barcode.pdf');
    }
    public function Addpricetoproduct(Request $request)
    {
        $UpdatePrice = Posproduct::where('id', $request->id)->update([
            'price' => $request->price,
        ]);
        if(! $UpdatePrice)
        {
            return 0;
        }
        return 1;
    }
      public function DeleteProductFromBill(Request $request)
    {
        $DeleteProduct = Posproduct::where('id', $request->id)->delete();
        if(! $DeleteProduct)
        {
            return 0;
        }
        return 1;
    }
    public function cancelAll(){
        $DeleteProduct = Posproduct::where('tempid', \Session::getId())->delete();
        if(! $DeleteProduct)
        {
            return 0;
        }
        return 1;
    }
    public function secondpayment(Request $request){
        $getpayment = Purchase::where('transcationid', $request->transcationid)->first();
        
        $total =  $getpayment->totalpurchase;
        $discount = $getpayment->discount;
        $finalamount = $total - $discount;
        $partialpay = $getpayment->partialpay;
        $balance = $finalamount - $partialpay;
        $UpdatePayment = Purchase::where('transcationid', $request->transcationid)->update([
                'payment2' => $balance,
            ]);
            if(! $UpdatePayment)
            {
                return 0;
            }
            return 1;
        
    }
    public function branchdelte(Request $request){
    $deletebranch = \DB::table('branches')->where('id', $request->id)->update([
            'isactive'=> 0,
        ]);     
        if(!$deletebranch){
            return 0;
        }
        return 1;
    }
    public function deletestaff(Request $request){
         $deletestaff = \DB::table('users')->where('id', $request->id)->update([
            'isactive'=> 2,
        ]);     
        if(!$deletestaff){
            return 0;
        }
        return 1;
    }
    public function addquantity(Request $request)
    {
        $UpdateQuantity = Posproduct::where('id', $request->id)->update([
            'quantity' => $request->quantity,
        ]);
        if(! $UpdateQuantity)
        {
            return 0;
        }
        return 1;
    }
    public function restorestaff(Request $request)
    {
         $restorestaff = \DB::table('users')->where('id', $request->id)->update([
            'isactive'=> 1,
        ]);     
        if(! $restorestaff){
            return 0;
        }
        return 1;
    }
        public function  restorebranch(Request $request)
       {
         $restorebranch = \DB::table('branches')->where('id', $request->id)->update([
            'isactive'=> 1,
        ]);     
        if(! $restorebranch){
            return 0;
        }
        return 1;
      }
   
        public function restoreSupplier(Request $request)
    {
         $restoreSupplier = \DB::table('suppliers')->where('id', $request->id)->update([
            'isactive'=> 1,
        ]);     
        if(!$restoreSupplier){
            return 0;
        }
        return 1;
    }
    
    public function purchasedcustomizedproduct(Request $request)
    {
        $GetProduct = Product::where('customizeid', $request->id)->first();
        $CheckExist = Posproduct::where('tempid', \Session::getId())->where('productid', $GetProduct->id);
        if($CheckExist->count() == 0)
        {
            // dd(\Session::getId);
            $Product = new Posproduct; 
            $Product->tempid = \Session::getId();
            $Product->productid = $GetProduct->id;
            $Product->price = $GetProduct->price;
            $Product->quantity = 1;
            $Product->save();
            if(! $Product)
            {
                return 0;
            }
            return 1;
        }
        elseif($CheckExist->count() == 1)
        {
            $UpdateQuantity = Posproduct::where('tempid', \Session::getId())->where('productid', $GetProduct->id)->increment('quantity', 1);
            if(! $UpdateQuantity)
            {
                return 0;
            }
            return 1;
        }
        
        if($Product == null || $Product == "")
        {
            return 0;
        }
        elseif ($Product != null) {
            return $Product;
        }else{
            return 0;
        }
    }
    // public function selectbrand($id)
    // {
    //     dd($id);
    // }
 
}
