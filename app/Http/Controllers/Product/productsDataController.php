<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use PDF; 
use App\Models\Category;
use App\Models\Brands;
use App\Models\Branch;
use App\Models\Branchproduct;
use App\Models\PurchaseDetails;
use Auth;

class productsDataController extends Controller
{
    public function ProductsList()
    {
        $Brands = Brands::orderby('id', 'desc')->where('isactive', 1)->get();
        $categories = Category::orderby('id', 'desc')->where('isactive', 1)->get();
        if(Auth::user()->role == 1)
        {
            $products = Product::with(['purchasedprice', 'branchesdata'])->where('isactive', 1)->where('type', 'readymade')->orderby('created_at', 'DESC')->get();
        }else
        {
            $products = Product::with(['purchasedprice', 'branchesdata'])->where('isactive', 1)->where('branch', Auth::user()->branch)->where('type', 'readymade')->orderby('created_at', 'DESC')->get();
        }
        $purchases =  \DB::table('purchasebyadmin')->orderby('id', 'DESC')->get();
        // $productCode = rand(123456789110,50);
         $Branches = Branch::orderby('id', 'desc')->where('isactive', 1)->get();
        $productCode = rand(1111111111,9999999999);
        return view('Product.Products', compact('productCode', 'products', 'Brands', 'categories','purchases', 'Branches'));
    }
    public function AddProduct(Request $request)
    { 
        $filename = time().'.'.request()->image->getClientOriginalExtension();
        request()->image->move(public_path('images/products/logos'), $filename);
        $AddProduct = new Product;
        $AddProduct->name = $request->productName;
        $AddProduct->unit = $request->productUnit;
        $AddProduct->alert = $request->quantityAlert;
        $AddProduct->category = $request->category;
        $AddProduct->brand = $request->brand;
        $AddProduct->barcode = $request->itemCode;
        $AddProduct->tax = $request->tax;
       $AddProduct->purchases = (int)$request->purchases;
        $AddProduct->type = 'readymade';
        $AddProduct->price = $request->mrp;
        $AddProduct->image = $filename;
        $AddProduct->branch = $request->branches[0];
        $AddProduct->productSize = $request->productSize;
        $AddProduct->description = $request->description;
        $AddProduct->isactive = 1;
        $AddProduct->save();
        foreach($request->branches as $branch)
        {
            $BranchProduct = new Branchproduct;
            $BranchProduct->branchid = $branch;
            $BranchProduct->productid = $AddProduct->id;
            $BranchProduct->isactive = 1;
            $BranchProduct->save();
        }
        return redirect()->back()->with('message', 'product added sucessfully');
    }
    public function downloadbarcode($data)
    {
        $Barcode = $data;
        // $customPaper = array(0,0,567.00,283.80);
        $pdf = PDF::loadView('Product.Barcode', compact('Barcode')); 
           
            // $pdf = PDF::loadView('Product.Barcode', compact('Barcode'))->setPaper($customPaper, 'portrait');
            return $pdf->download('Barcode.pdf');  
            
    }
     public function productview($id)
    {
         $product = Product::with(['purchasedetails'])->where('id', $id)->first();
        $PurchaseDetails = PurchaseDetails::with(['productdetails'])->where('product_id', $id)->get();
       // dd($PurchaseDetails);
          $purchases =  \DB::table('purchasebyadmin')->orderby('id', 'DESC')->get();
         return view('Product.productview', compact('product','purchases', 'PurchaseDetails'));
  
    }
      public function stock($id='')
    {
        if(Auth::user()->role == 1)
        {
            if(isset($id) && $id != '')
            {
    
                 $Products = Product::with(['purchasedetails', 'branchesdata'])->where('isactive', 1)->where('branch', $id)->orderby('created_at', 'desc')->get();
            }
           else{
               $Products = Product::with(['purchasedetails', 'branchesdata'])->where('isactive', 1)->orderby('created_at', 'desc')->get();
           }
        }
        else{
            $Products = Product::with(['purchasedetails', 'branchesdata'])->where('branch', Auth::user()->branch)->where('isactive', 1)->orderby('created_at', 'desc')->get();
        }
        
        
      
          $Branchnames = \DB::table('branches')->where('isactive', 1)->select('id', 'name')->get();
      
                  
         return view('Product.stock', compact('Products','Branchnames'));
  
    }
    public function customizedproducts(){

        $Products = Product::where('isactive', 1)->where('type', 'customized')->orderby('id', 'desc')->get();
        return view('Product.customizedproducts', compact('Products'));  
      
    }
    public function productedit($id){
        $product = Product::with(['purchasedetails'])->where('id', $id)->first();
        $ProductCategory = Category::where('id', $product->category)->first();
          $ProductBrand = Brands::where('id', $product->brand)->first();
        $Brands = Brands::orderby('id', 'desc')->where('isactive', 1)->get();
        $categories = Category::orderby('id', 'desc')->where('isactive', 1)->get();
                 return view('Product.productedit', compact('product', 'Brands', 'categories', 'ProductCategory', 'ProductBrand'));
    }
    public function deleteProductlist(Request $request){
        $deleteproduct = Product::where('id',$request->id)->update([
                'isactive' => 0,
            ]);
            return 1;
    }
    public function updateproduct(Request $request)
    {
        if(isset($request->image))
        {
            $filename = time().'.'.request()->image->getClientOriginalExtension();
            request()->image->move(public_path('images/products/logos'), $filename);
            $UpdateImage = Product::where('id', $request->id)->update([
                'image' => $filename,
            ]);
        }
        
        $UpdateProduct = Product::where('id', $request->id)->update([
                'name' => $request->name,
                'category' => $request->category,
                'brand' => $request->brand,
                'unit' => $request->units,
                'alert' => $request->quantityAlert,
                'price' => $request->mrp,
                'tax' => $request->tax,
                'description' => $request->decription,
            ]);
            
            return redirect()->back()->with('message', 'Product Updated Sucessfully');
    }
    
}
