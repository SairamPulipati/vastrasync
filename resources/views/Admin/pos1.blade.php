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
        <hr>
        <div class="container-fluid" style="background-color:whitesmoke; ">
          <div class="row">
            <div class="col-12 col-md-3 mt-5">
              <input onkeyup="poscheck()" id="posnumber" name="posnumber" type="text" class="form-control" autofocus>
            </div>
            <div class="col-12 col-md-3 mt-5">
              <button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModalLong" id="customermodal">Customer Details</button>
            </div>
           
            <div class="col-12 col-md-3 mt-5">
              <button class="btn btn-primary">Submit</button>
            </div>
            <form>           
            <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
              <div class="modal-dialog" role="document">
                  <div class="modal-content" style="width:60vw;">
                      <div class="modal-header">
                          <h6 class="modal-title" id="exampleModalLongTitle">Add New Customer</h6>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                          </button>
                      </div>
                      <div class="modal-body">
                          <div style="text-align:left;">
                              <div class="container">
                                  <div class="row">
                                   
                                      <div class="col-12 col-md-6">
                                          <label style="font-size:15px;" id="name"><span style="color:red;">* </span >Name</label>
                                          <input type="text" id="newCustomerName" placeholder="Enter the Name" class="form-control" style="background-color:whitesmoke; font-size:13px;">
                                          <p id="requiredName" class="required-class"></p>
                                      </div>
                                      <div class="col-12 col-md-6">
                                          <label  style="font-size:15px;" id="number"><span style="color:red;">* </span>Phone Number</label>
                                          <input type="number" id="newCustomerPhone" placeholder="Enter the Phone Number" class="form-control" style="background-color:whitesmoke; font-size:13px;">
                                          <p id="requiredPhone" class="required-class"></p>
                                      </div>
                                     
                                     
                                   
                                   

                                  </div>
                                
                                 
                              </div>
                          </div>

                      </div>
                      <div class="modal-footer">
                          <button type="button" style="font-size:15px;" class="btn btn-secondary" data-dismiss="modal">Ok</button>
                         
                      </div>
                  </div>
              </div>
          </div>
          </form>
             
            <div class="col-12 col-md-3 mt-2">
              <p style="font-size:14px;" >Sales Men</p>
              <select id="salesmen" style="font-size:13px;" class="form-control">
                @foreach($Salesmen as $men)
                <option style="font-size:13px;" value="{{$men->id}}">{{$men->name}}</option>
                @endforeach
              </select>
            </div>
            <table id="billingTable" class="table-overflow">
              <tr>
                <th>#</th>
                <th>Product Name</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Delete</th>
                <!-- <th>Action</th> -->
              </tr>
            </table>
            <div class="col-12 col-md-3 mt-5 mb-4"  >
              Grand Total:
              <h5 id="total" style="font-size:15px;"><span id="grandtotal" class="ml-3">0</span></h5>
            </div>
            <div class="col-12 col-md-2 mt-5 mb-4"  >
            <select id="payment" class="form-control" name="paymentOptions">
              <option style="font-size:13px;" value="debitCard">Debit Card</option>
              <option style="font-size:13px;" value="creditCard">Credit Card</option>
              <option style="font-size:13px;" value="upi">UPI</option>
              <option style="font-size:13px;" value="cash">Cash</option>
            </select>
            </div>
            <!--<div class="col-12 col-md-4 mt-5 mb-4"  >-->
            <!--  <button class="btn btn-success">Pay Now</button>-->
            <!--</div>-->
            <div class="col-12 col-md-3 mt-5 mb-4"  >
              <button onclick="Print('{{$randomString}}')" id="purchasebutton" class="btn btn-success">Pay Now</button>
              <a href="{{url('printpdf', $randomString)}}" id="printpdf" class="btn btn-info">Print</a>
            </div>
              
            

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
    var posnumber = $('#posnumber').val();
    var grandtotal = 0
    if(posnumber.length == 10)
    { 
        $.ajax({
            url : 'purchaseproduct',
            type : 'GET',
            data : {
                'posnumber' : posnumber
            },
            dataType:'json',
            success : function(data) {
            console.log(myarray)
            var status = myarray.includes(data.id); 
              if(status == false)
              {
                if(data != 0)
                {
                    $('#billingTable').append('<tr><td name="id">'+data.id+'</td><td>'+data.name+'</td><td>1</td><td>'+data.price+'</td><td> <i class="fa-solid fa-trash-can"></i></td></tr>');
                    $('#posnumber').val('');
                    window.myarray.push(data.id);
                    window.price.push(parseInt(data.price));
                    sum = price.reduce((pv, cv) => pv + cv, 0);
                    // window.sum = price.reduce(function(a, b){
                    //     return a + b;
                    // }, 0);
                    $('h5').empty('<span>'+''+'</span>');
                    $('h5').append('<span>'+sum+'</span>');
                }
              }else{
                $('#posnumber').val('');
              }               
            },
            error : function(request,error)
            {

            }
        });
    }
  }
  function Print(reference)
  {
      var data = myarray;
      var salesmen = $('#salesmen').val();
      var payment = $('#payment').val();
      var customername = $('#newCustomerName').val();
      var customernumber = $('#newCustomerPhone').val();
      var trns = reference;
      var totl = sum;
      debugger;
      $.ajax({
            url : 'purchaseproducts',
            type : 'GET',
            data : {
                'productid' : data,
                'salesmen' : salesmen,
                'paymentmode' : payment,
                'customername' : customername,
                'customernumber' : customernumber,
                'trns' : trns,
                'sum' : totl

            },
            dataType:'json',
            success : function(data) {
              $('#printpdf').show(); 
              $('#purchasebutton').hide();         
            },
            error : function(request,error)
            {

            }
        });
  }
</script>
