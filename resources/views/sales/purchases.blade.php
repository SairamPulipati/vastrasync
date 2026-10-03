<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous" />
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <link href="{{asset('css/purchases.css')}}" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="{{asset('js/purchases.js')}}"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" charset="utf-8"></script>

        <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css" />
 <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
   <link rel="icon" type="image/svg+xml" href="{{ asset('images/favicon.svg') }}">
<title>VastraSync ERP</title>

    <link rel="stylesheet" href="{{ asset('css/modern-theme.css') }}">
</head>
<body>
   @include('Admin.sidebarmenu')
    <div id="main">
        @include('Admin.topnavbar')
        
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-md-6">
                    <h5>Purchases</h5>
                    

                </div>
                <div class="col-12 col-md-6" style="text-align: right;">
                   
                    <button type="button" class="btn btn-outline-info" data-toggle="modal" data-target="#exampleModalLong"> <i class="fa-thin fa-plus mr-2"></i> Add New Purchase</button>
                    <!-- Button trigger modal -->
                    <form>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content" style="width:60vw;">
                                <div class="modal-header">
                                    <h6 class="modal-title" id="exampleModalLongTitle">Add New Purchase</h6>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div style="text-align:left;">
                                        <div class="container">
                                            <div class="row">
                                               
                                                <div class="col-12 col-md-6">
                                                    <label><span style="color:red;">* </span>Date</label>
                                                    <input name="Date" type="date" id="PurchaseDateInput" placeholder="Enter the Name" class="form-control" style="background-color:whitesmoke;">
                                                    <p style="color:red; font-size:12px;" id="PurchaseDate"></p>
                                                </div>
                                                <div class="col-12 col-md-6">
                                                    <label><span style="color:red;">* </span>Supplier Name</label>
                                                   <select id="Suppilername" class="form-control" style="background-color:whitesmoke;">
                                                    @foreach($Suppliers as $Supplier)
                                                       <option value="{{$Supplier->id}}">{{$Supplier->name}}</option>
                                                    @endforeach
                                                   </select>
                                                    <p style="color:red; font-size:12px;" id="SupplierName"></p>
                                                </div>
                                                
                                                <div class="col-12 col-md-6">
                                                    <label><span style="color:red;">* </span>Purchase Price</label>
                                                    <input name="price" type="number" id="priceInput" placeholder="Enter the Price" class="form-control" style="background-color:whitesmoke;">
                                                    <p style="color:red; font-size:12px;" id="Price"></p>
                                                </div>
                                                <div class="col-12 col-md-6">
                                                     <label id="name"><span style="color:red;">* </span>Units</label>
                                                      <select id="units" class="form-control" name="units" style="background-color:whitesmoke;">
                                                     <option value="">Select Units</option>
                                    <option value="Meters">Meters</option>
                                     <option value="Pieces">Pieces</option>
                                                      
                                                   
                                                   </select>
                                                    <!--<input name="units" type="text" id="units" placeholder="Enter Number of Units" class="form-control" style="background-color:whitesmoke;">-->
                                                    <p style="color:red; font-size:12px;" id="units"></p>
                                                    <!--<label><span style="color:red;">* </span>Sale Price</label>-->
                                                    <!--<input name="saleprice" type="number" id="saleprice" placeholder="Enter the Price" class="form-control" style="background-color:whitesmoke;">-->
                                                    <!--<p style="color:red; font-size:12px;" id="saleprice"></p>-->
                                                </div>
                                                <div class="col-12 col-md-6">
                                                    <label id="name"><span style="color:red;">* </span>Product Name</label>
                                                    <input name="Item" type="text" id="ItemInput" placeholder="Enter the Item" class="form-control" style="background-color:whitesmoke;">
                                                    <p style="color:red; font-size:12px;" id="Items"></p>
                                                </div>
                                                <div class="col-12 col-md-6">
                                                    <label id="name"><span style="color:red;">* </span>Invoice Number</label>
                                                    <input name="invoiceNumber" type="text" value={{$invoicecode}} id="invoiceNumber" placeholder="Enter the Invoice Number" class="form-control" style="background-color:whitesmoke;">
                                                    <p style="color:red; font-size:12px;" id="Invoice"></p>
                                                </div>
                                                    <div class="col-12 col-md-6">
                                                    <label id="name"><span style="color:red;">* </span>Quantity</label>
                                                    <input name="quantity" type="text" id="quantity" placeholder="Enter Number of products" class="form-control" style="background-color:whitesmoke;">
                                                    <p style="color:red; font-size:12px;" id="quantity"></p>
                                                </div>
                                                            <div class="col-12 col-md-6">
                                                   
                                                </div>
                                                
                                               

                                            </div>
                                            
                                            
                                            
                                        </div>
                                    </div>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                    <button  type="button" onclick="CreatePurchase()" id="createButton" data-dismiss="modal" class="btn btn-info">Create</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    </form>
                   


                   
                   
                </div>
            </div>
        </div>
        <hr>
        <!--<div class="container mt-3">-->
        <!--    <div class="row">-->
        <!--        <div class="col-12 col-md-4 mt-2">-->
        <!--            <form class="example ml-2" style="max-width:250px">-->
        <!--                <input type="text" placeholder="Search By Supplier.." name="search2">-->
        <!--                <button style="height:30px;"><i class="fa fa-search "></i></button>-->
        <!--            </form>-->
        <!--        </div>-->
            
               

        <!--    </div>-->
        <!-- </div>-->
      
        <!-- <hr>-->
          
          
           
           
        
    
        
        <table id="allTable" class="salesTabel1">
            <thead>
                <tr>
                <th>No</th>
                 <th>Date</th>
                <th>Product Name</th>
                   <th>Invoice Number</th>
                <th>Purchased Price</th>
             
                <th>Selling price</th>
                <th>Purchased Quantity	</th>
               
                <th>Units</th>
            </tr>
            </thead>
            <tbody>
            
            @foreach($Purchasesdata as $Purchase)
            <tr>
                <td>{{$Purchase->id ?? ''}}</td>
                  <td>{{$Purchase->date ?? ''}}</td>
                 <td>{{$Purchase->item ?? ''}}</td>
                   <td>{{$Purchase->invoiceNumber ?? ''}}</td>
                    <td>{{$Purchase->price ?? ''}}
                </td>
                 <td>{{$Purchase->productdetails->price ?? ''}}
                </td>
                <td>{{$Purchase->quantity ?? ''}}</td>
                
                <td>{{$Purchase->units ?? ''}}</td>
            <!--    <td>{{$Purchase->date ?? ''}}</td>-->
            <!--    <td>{{$Purchase->supilerdata->name}}</td>-->
              
                
            <!--    <td>{{$Purchase->price ?? ''}}-->
            <!--    </td>-->
               
               
            <!--    <td>-->
            <!--{{$Purchase->created_at ?? ''}}-->
            <!--    </td>-->
            </tr>
            @endforeach
            </tbody>
        </table>
       
      


    </div>


    <!-- Modal -->
  <script>
     let createButtonEl=document.getElementById("createButton");
    let PurchaseDateEl=document.getElementById("PurchaseDate");
let SupplierNameEl=document.getElementById("SupplierName");
let PriceEl=document.getElementById("Price");
let ItemsEl=document.getElementById("Items");
let PurchaseDateInputEl=document.getElementById("PurchaseDateInput");
let SupplierNameInputEl=document.getElementById("SupplierNameInput");
let PriceInputEl=document.getElementById("PriceInput");
let ItemsInputEl=document.getElementById("ItemsInput");
createButtonEl.addEventListener("click",function(){
 
  if(SupplierNameInputEl.value ===""){
    SupplierNameInputEl.style.borderColor="red"
    SupplierNameEl.textContent="*Required"
  }
  

})
SupplierNameInputEl.addEventListener("keydown",function(){
    SupplierNameInputEl.style.borderColor="green"
    SupplierNameEl.textContent=""

})
PurchaseDateInputEl.addEventListener("keydown",function(){
    SupplierNameInputEl.style.borderColor="green"
    SupplierNameEl.textContent=""

})
  </script>

   
</body>

</html>
<script type="text/javascript">
    function CreatePurchase()
    {
        var date = $('#PurchaseDateInput').val();
        var supilername = $('#Suppilername').val();
        var price = $('#priceInput').val();
        var ItemInput = $('#ItemInput').val();
        var invoiceNumber = $('#invoiceNumber').val();
         var quantity = $('#quantity').val();
             var units = $('#units').val();
         
        
      
        $.ajax({
            url : 'addpurchase',
            type : 'GET',
            data : {
                'date' : date,
                'supilername' : supilername,
                'price' : price,
                'ItemInput' : ItemInput,
                  'invoiceNumber' : invoiceNumber,
                   'quantity' : quantity,
                   'units' : units
                   
                  
            },
            dataType:'json',
            success : function(data) {   
              if(data === 1)
              {
                alert('New Purchase added Sucessfully');
                // $("#allTable").load(window.location + " #allTable");
                // $('#PurchaseDateInput').val('');
                // $('#Suppilername').val('');
                // $('#priceInput').val('');
                // $('#ItemInput').val('');
                //  $('#invoiceNumber').val('');
                //  $('#quantity').val('');
                //   $('#units').val('');
                location.reload();

                  
              }             
            },
            error : function(request,error)
            {

            }
        });
    }
</script>
  <script>
$(document).ready(function () {
    $('#allTable').DataTable();
});
</script>