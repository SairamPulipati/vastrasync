<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous" />
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/6b781c3f04.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" charset="utf-8"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/easy-pie-chart/2.1.6/jquery.easypiechart.min.js" charset="utf-8"></script>
    <link href="{{asset('css/pos.css')}}" rel="stylesheet">
    <script src="{{asset('js/pos.js')}}"></script>

</head>
  <body>
    <div class=" p-3">
        <div class="pos-container">
            <div class="d-flex flex-row">
                <i class="fa-sharp fa-solid fa-arrow-left" style="font-size:20px;"></i>
                <p style="font-size:15px; font-weight: bold;" class="ml-3">POS</p>
            </div>
        </div>
      
        <div class="container-fluid" style="background-color:whitesmoke; ">
     
          <div class="d-flex justify-content-around my-0">
              <div class="p-2">
                   <input onkeyup="poscheck()" id="posnumber" name="posnumber" type="text" class="form-control" autofocus>
             
              <input type="hidden" id="randomnumber" name="randomnumber" value="{{$randomString}}">
              </div>
              <div class="p-2">
                  <form>
                  <div class="d-flex flex-row my-2">
                      <div class="px-2">
                           <label style="font-size:15px;" id="name"><span style="color:red;">* </span >Customer Name</label>
                                         
                                         
                      </div>
                      <div class="px-2">
                           <input type="text" id="newCustomerName" placeholder="Enter the Name" class="form-control" style=" font-size:13px;">
                      </div>
                      <div class="px-2">
                           <p id="requiredName" class="required-class"></p>
                      </div>
                       <div class="px-2">
                            <label  style="font-size:15px;" id="number"><span style="color:red;">* </span>Phone Number</label>
                                         
                                         
                       </div>
                       <div class="px-2">
                            <input type="number" id="newCustomerPhone" placeholder="Enter the Phone Number" class="form-control" style="font-size:13px;">
                       </div>
                       <div class="px-2">
                            <p id="requiredPhone" class="required-class"></p>
                       </div>
                  </div>
                  </form>
              </div>
              <div class="p-2">
                  <div class="d-flex flex-row my-2">
                      <div class="px-2">
                          <p style="font-size:14px;" >Sales Men</p>
                          </div>
                      <div class="px-2">
                           <select id="salesmen" style="font-size:13px;" class="form-control">
                @foreach($Salesmen as $men)
                <option style="font-size:13px;" value="{{$men->id}}">{{$men->name}}</option>
                @endforeach
              </select>
                      </div>
                  </div>
                   
             
              </div>
          </div>
           <table id="billingTable" class="table-overflow">
              <tr>
                <th>#</th>
                <th>Product Name</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Delete</th>
              </tr>
              @foreach($data as $info)
              <tr>
                <td >{{$info->id}}</td>
                <td>{{$info->productdetails->name}}</td>
                @if($info->productdetails->type == 'customized')
                <td><input type="text"  value="{{$info->price ?? ''}}" name="pricefield" id="{{$info->id}}"><button type="button" onclick="AddPrice('{{$info->id}}')" style="background-color: #5bc0de; color:#ffffff;">Add Price</button></td>
                @else
                <td>{{$info->price}}</td>
                @endif
                <td><input type="number" value="{{$info->quantity ?? ''}}" onkeyup="Quantity('{{$info->id}}')" name="quantity" class="quantity"></td>
                <td onclick="deleteproduct('{{$info->id}}')"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
  <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
  <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
</svg></td>
              </tr>
              @endforeach
            </table>

          <!--<div class="row">-->
            <!--<div class="col-12 col-md-3 mt-2">-->
                
            <!--</div>-->
            <!--<div class="col-12 col-md-6 mt-5">-->
            <!--      <div style="text-align:left;" class="my-2">-->
            <!--                  <div class="container">-->
            <!--                      <div class="row">-->
                                   
            <!--                          <div class="col-12 col-md-6">-->
                                         
            <!--                          </div>-->
            <!--                          <div class="col-12 col-md-6">-->
                                         
            <!--                          </div>-->
                                     
                                     
                                   
                                   

            <!--                      </div>-->
                                
                                 
            <!--                  </div>-->
            <!--              </div>-->
              <!--<button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModalLong" id="customermodal">Customer Details</button>-->
              
            <!--</div>-->
            
           
            <!-- <div class="col-12 col-md-3 mt-5">
          <!--    <button class="btn btn-primary">Submit</button>-->
          <!--  </div> -->
          <!--  <form>           -->
          <!--  <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">-->
          <!--    <div class="modal-dialog" role="document">-->
          <!--        <div class="modal-content" style="width:60vw;">-->
          <!--            <div class="modal-header">-->
          <!--                <h6 class="modal-title" id="exampleModalLongTitle">Add New Customer</h6>-->
          <!--                <button type="button" class="close" data-dismiss="modal" aria-label="Close">-->
          <!--                    <span aria-hidden="true">&times;</span>-->
          <!--                </button>-->
          <!--            </div>-->
          <!--            <div class="modal-body">-->
                        

          <!--            </div>-->
          <!--            <div class="modal-footer">-->
          <!--                <button type="button" style="font-size:15px;" class="btn btn-secondary" data-dismiss="modal">Ok</button>-->
                         
          <!--            </div>-->
          <!--        </div>-->
          <!--    </div>-->
          <!--</div>-->
          <!--</form>-->
             
            <!--<div class="col-12 col-md-3 mt-2">-->
             
            <!--</div>-->
           
            
            
            

            
                  

              
            
 <div class="d-flex justify-content-between">
                <div class="p-2"></div>
                <div class="p-2"></div>
                <div class="p-2">
                                  <table>
                 <tr>
                  <td>Grand Total:</td>
                  <td><h5 id="total" value="{{$total}}" style="font-size:13px;"><span id="grandtotal">{{$total}}</span></h5></td>
                </tr>
                <tr>
                  <td>Discount:</td>
                  <td>
                      <div class="d-flex flex-row">
                          <div class="p-2">
                               <input type="number" style="font-size:13px;" placeholder="Enter Discount" class="form-control" name="discount" id="discount">
                          </div>
                          <div class="p-2">
                               <button type="button" class="btn btn-info" onclick="Discount()" style="background-color: #2e2e2e; border-color:#2e2e2e; color:#ffffff;height:33.49px">Submit</button></td>
                          </div>
                      </div> 
                      </td>
                 
                 
                </tr>
                <tr>
                  <td>Final Total:</td>
                  <td><h6 id="FinalTotal"></h6></td>
                  
                </tr>
                <tr>
                  <td>Partial Payment:</td>
                   <td>
                      <div class="d-flex flex-row">
                          <div class="p-2">
                              <input type="number" style="font-size:13px;" placeholder="Enter Partial Payment" class="form-control" name="partialpayment" id="partialpayment">
                          </div>
                          <div class="p-2">
                              <button type="button" class="btn btn-primary" onclick="PartialPayment()" style="background-color: #2e2e2e; border-color:#2e2e2e; color:#ffffff;height:33.49px">Submit</button>
                          </div>
                      </div> 
                      </td>
               
              

                </tr>
                <tr>
                  <td>Balance:</td>
                  <td><h6 id="Balance"></h6></td>
                </tr>
                
              </table>

                </div>
            </div>
          <!--</div>-->
        </div>
        <div class="container-fluid pb-4" style="background-color:whitesmoke; ">
          <div class="row">
          
           
            <div class="col-6 mt-3"></div>
            <div class="col-2 mt-3">
              <select id="payment" class="form-control" name="paymentOptions">
              <option style="font-size:13px;" value="debitCard">Debit Card</option>
              <option style="font-size:13px;" value="creditCard">Credit Card</option>
              <option style="font-size:13px;" value="upi">UPI</option>
              <option style="font-size:13px;" value="cash">Cash</option>
            </select>
        </div>

            <div class="col-2 mt-3">
              
              <!-- <button onclick="Print('{{$randomString}}')" id="purchasebutton" class="btn btn-info">Submit</button> -->
              <a href="{{url('printpdf')}}" id="printpdf" class="btn btn-info">View</a>
              <button class="btn btn-info">Cancel</button>
            
            </div>
                    <div class="col-2 mt-3"  >
              <button class="btn btn-success" id="purchasebutton" onclick="Print()">Pay Now</button>
            </div>
      </div>
    </div>
  </body>
</html>
<script type="text/javascript">
  $('#printpdf').hide();
  var myarray = [];
  var price = [];
  function poscheck()
  {
    var randomnumber = $('#randomnumber').val();
    var posnumber = $('#posnumber').val();
   
    var grandtotal = 0
    if(posnumber.length == 10)
    {
      debugger;
      $('#posnumber').val('');
        $.ajax({
            url : 'purchaseproduct',
            type : 'GET',
            data : {
                'posnumber' : posnumber,
                'randomnumber' : randomnumber
            },
            dataType:'json',
            success : function(data) {
              // debugger;
              $( "#billingTable" ).load(window.location.href + " #billingTable" );
               $( "#grandtotal" ).load(window.location.href + " #grandtotal" );
              
            // console.log(myarray)
            // var status = myarray.includes(data.id);
              // if(status == false)
              // {

              //   debugger;
                // if(data != 0)
                // {
                //   if(data.type != 'customized')
                //   {
                //     $('#billingTable').append('<tr><td name="id">'+data.id+'</td><td>'+data.name+'</td><td>1</td><td>'+data.price+'</td><td></tr>');
                //     $('#posnumber').val('');
                //     window.myarray.push(data.id);
                //     window.price.push(parseInt(data.price));
                //     sum = price.reduce((pv, cv) => pv + cv, 0);
                //     // window.sum = price.reduce(function(a, b){
                //     //     return a + b;
                //     // }, 0);
                //     $('h5').empty('<span>'+''+'</span>');
                //     $('h5').append('<span>'+sum+'</span>');
                //   }else{
                //     $('#billingTable').append('<tr><td name="id">'+data.id+'</td><td>'+data.name+'</td><td>1</td><td><input type="number" name="price"></td><td></tr>');
                //     $('#posnumber').val('');
                //     window.myarray.push(data.id);
                //     window.price.push(parseInt(data.price));
                //     sum = price.reduce((pv, cv) => pv + cv, 0);
                //     // window.sum = price.reduce(function(a, b){
                //     //     return a + b;
                //     // }, 0);
                //     $('h5').empty('<span>'+''+'</span>');
                //     $('h5').append('<span>'+sum+'</span>');
                // }
                //   }
              // }else{
              //   $('#posnumber').val('');
              // }               
            },
            error : function(request,error)
            {

            }
        });
    }
//   $('#posnumber').val(''); 
  }
  function Print()
  {
      <?php
        $phpVar = $total;
        echo "var totalprice = '{$phpVar}';";
      ?>
      var salesmen = $('#salesmen').val();
      var payment = $('#payment').val();
      var customername = $('#newCustomerName').val();
      var customernumber = $('#newCustomerPhone').val();
      var total = $('#grandtotal').val();
      var partialpayment = $('#partialpayment').val();
      var discount = $('#discount').val();
      debugger;
      $.ajax({
            url : 'purchaseproducts',
            type : 'GET',
            data : {
                'salesmen' : salesmen,
                'paymentmode' : payment,
                'customername' : customername,
                'customernumber' : customernumber,
                'totalprice' : totalprice,
                'partialpay' : partialpayment,
                'discount' : discount
            },
            dataType:'json',
            success : function(data) {
              debugger;
               window.id = data
              $('#printpdf').show();
              $('#purchasebutton').hide();         
            },
            error : function(request,error)
            {

            }
        });
  }
  function AddPrice(id)
  {
    var Price = document.getElementById(id).value;
    // var Price = $('#pricefield').val();
    // debugger;
     $.ajax({
            url : 'Addpricetoproduct',
            type : 'GET',
            data : {
                'id' : id,
                'price' : Price
            },
            dataType:'json',
            success : function(data) {
               $( "#billingTable" ).load(window.location.href + " #billingTable" );
               $( "#grandtotal" ).load(window.location.href + " #grandtotal" );
               alert('price added')        
            //   location.reload()
            },
            error : function(request,error)
            {

            }
        });
  }
  function PayBill() 
  {
    $.ajax({
            url : 'PayBill',
            type : 'GET',
            data : {
                'id' : id,
                'price' : Price
            },
            dataType:'json',
            success : function(data) {
               $( "#billingTable" ).load(window.location.href + " #billingTable" );
               $( "#grandtotal" ).load(window.location.href + " #grandtotal" );
               
               alert('price added')        
            },
            error : function(request,error)
            {

            }
        });
  }
  function deleteproduct(id) {
    $.ajax({
            url : 'DeleteProductFromBill',
            type : 'GET',
            data : {
                'id' : id
            },
            dataType:'json',
            success : function(data) {
               $( "#billingTable" ).load(window.location.href + " #billingTable" );
               $( "#grandtotal" ).load(window.location.href + " #grandtotal" );
               
               alert('price added')        
            },
            error : function(request,error)
            {

            }
        });
  }
  $(".quantity").keyup(function(){
  // $('.quantity').keyup(function() {
    window.EnteredQuantity = this.value;
    somefunction();
  });
  function Quantity(data) 
  {
    // alert('vcf')
    window.dataid = data
  }
  function somefunction()
  {
    // alert('Total Quantity added')
    var qunty = window.EnteredQuantity  
    var idf = window.dataid
    $.ajax({
          url : 'addquantity',
          type : 'GET',
          data : {
              'id' : idf,
              'quantity' : qunty
          },
          dataType:'json',
          success : function(data) {
             // $( "#billingTable" ).load(window.location.href + " #billingTable" );
             $( "#grandtotal" ).load(window.location.href + " #grandtotal" );
             // urlRefresh();
             // alert('price added')        
          },
          error : function(request,error)
          {

          }
        });
  }
  function Discount()
  {
      var discount = $('#discount').val();
      var total = document.getElementById('grandtotal').innerText;
      var ChangeDiscount = 100 - discount;
      var AfterDiscount = total*ChangeDiscount/100;
      $( "#FinalTotal" ).empty();
      $( "#FinalTotal" ).append(AfterDiscount);
  }
  function PartialPayment()
  {
    var finaltotaldata = document.getElementById('FinalTotal').innerText;   
    var partialpayment = $('#partialpayment').val();
    var Balance = finaltotaldata - partialpayment;
    $( "#Balance" ).empty();
    $( "#Balance" ).append(Balance);
  }
</script>
