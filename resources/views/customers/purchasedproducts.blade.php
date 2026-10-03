<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous" />
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" charset="utf-8"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/easy-pie-chart/2.1.6/jquery.easypiechart.min.js" charset="utf-8"></script>
    <link href="{{asset('css/pos.css')}}" rel="stylesheet">
    <script src="{{asset('js/pos.js')}}"></script>
 <link rel="icon" type="image/svg+xml" href="{{ asset('images/favicon.svg') }}">
<title>VastraSync ERP</title>
</head>
  <body>
    <div class=" p-3">
        <div class="pos-container">
            <div class="d-flex flex-row">
                <!--<i class="fa-sharp fa-solid fa-arrow-left" style="font-size:20px;"></i>-->
                <p style="font-size:15px; font-weight: bold;" class="ml-3">Purchased Products</p>
            </div>
        </div>
        <hr>
        <div class="container-fluid" style="background-color:whitesmoke; ">
              <div class="d-flex flex-row">
                    <div class="p-2">
                      Sales Men:
                    </div>
                    <div cass="p-2" style="margin-top:10px">
                      {{$transcationDetails[0]->salesman}}
                    </div>
                      </div>
          <div class="row">
            <!-- <div class="col-12 col-md-3 mt-5">
              <input type="text" class="form-control">
            </div> -->
           <!--  <div class="col-12 col-md-3 mt-5">
              <button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModalLong">Customer Details</button>
            </div> -->
           
           <!--  <div class="col-12 col-md-3 mt-5">
              <button class="btn btn-primary">Submit</button>
            </div> -->
           
             
            <div class="col-12 col-md-3 mt-2">
                
                </div>
             
             
          
            <table id="billingTable" class="table-overflow">
              <tr>
                <th>Sl No.</th>
                <th>Product Name</th>
                <th>Quantity</th>
                <th>Unit Price</th>
                <th>Total Price</th>
             
              </tr>
              
             <?php  $i =1; ?>
              @foreach($transcationDetails as $detail)
             @foreach($detail->purchasedetails as $List) 
            <?php
              $card = $List->paymentmode;
              $productdetails = \DB::table('products')->where('id', $List->product_id)->first();
             ?>
              <tr>
                <td>
                    {{$i}}</td>
                <td>{{$productdetails->name}}</td>
                <td>{{$List->quantity}}</td>
                <td>₹{{$List->purchasedprice}}</td>
                 <td>₹{{$List->purchasedprice * $List->quantity}}</td>
              </tr>
              <?php $i++; ?>
              @endforeach
              @endforeach
              
              
            </table>
          
 
          <!--</div>-->
        </div>
        
       <div class="d-flex justify-content-end">
                <div class="p-2"></div>
                @if($transcationDetails[0]->payment2 == null)
                <div class="p-2">
                    <button class="btn btn-sm btn-info" onclick="paynow('{{$transcationid}}')">Pay</button>
                </div>
                @endif
                <div class="p-2">
                    <button class="btn btn-sm btn-info" onclick="view('{{$transcationid}}')">View</button>
                    
                </div>
                <div class="p-2">
                                  <table class="table-hover" style="width:300px">
                                      <tr>
                                          <td>Payment Mode</td>
                                          <td><h5 id="upis" value="" style="font-size:13px;"><span id="grandtotal">{{$detail->purchasedetails[0]->paymentmode}}</span></h5></td>
                                      </tr>
                 <tr>
                  <td>Grand Total:</td>
                  <td><h5 id="total" value="" style="font-size:13px;"><span id="grandtotal">{{$transcationDetails[0]->totalpurchase}}</span></h5></td>
                </tr>
                <tr>
                  <td>Discount : </td>
                     <td><h5 id="dicount" value="" style="font-size:13px;"><span id="discounts">{{$transcationDetails[0]->discount}}</span></h5></td>
           
                 
                 
                </tr>
                   <tr>
                  <td>Final Total:</td>
                  <td><h5 id="total" value="" style="font-size:13px;"><span id="Finaltotal">{{$transcationDetails[0]->totalpurchase - $transcationDetails[0]->discount}}</span></h5></td>
                </tr>
          
              <tr>
                  <td>Advance</td>
                  <td><h5 id="Advances" value="" style="font-size:13px;"><span id="Advances">{{$transcationDetails[0]->partialpay}}</span></h5></td>
                </tr>
                <tr>
                  <td>Final Payment:</td>
                  <td><h5 id="payment2" value="" style="font-size:13px;"><span id="payment2s">{{$transcationDetails[0]->payment2 ?? 0}}</span></h5></td>
                </tr>
                    <tr>
                  <td>Balance:</td>
                  <td><h5 id="Advances" value="" style="font-size:13px;"><span id="Advances">{{floor(((int)$transcationDetails[0]->totalpurchase - $transcationDetails[0]->discount) - ((int)$transcationDetails[0]->partialpay + (int)$transcationDetails[0]->payment2))}}</span></h5></td>
                </tr>
              </table>

                </div>
            </div>
            <script>
            function view(transcationid){
                
                 window.location.href= "{{route('invoice', $transcationid)}}";
            }
                function paynow(transcationid){
                         $.ajax({
                            url : 'secondpayment',
                            type : 'GET',
                            data : {
                                
                                'transcationid' : transcationid
                            },
                            dataType:'json',
                            success : function(data) {
                                      alert('payment done succesfully')
                                      location.reload();
                            },
                            error : function(request,error)
                            {
                
                            }
                        });
                }
            </script>
  </body>
</html>
