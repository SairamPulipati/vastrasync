<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous" />
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <link href="{{asset('css/printingbill.css')}}" rel="stylesheet">
     <link rel="icon" type="image/x-icon" href="https://ssr.piniteinfosol.tk/saloon2/wp-content/uploads/2022/10/wedding__1_-removebg-preview-1.png">
 <title>Men's Wedding Studio</title>
    <style>
        @media print
{    

    .no-print, .no-print *
    {
        display: none !important;
    }
}
    </style>
  </head>
  <body>
    <page size="A4" style="margin:0" layout="landscape">
        <div class="container-fluid p-4">
          <!-- <h text-align="center">Partial pay</h> -->
            <div class="row">
                <div class="col-6 ">
                    <strong class="weddingStudio" style="font-size:25px; color:#af0000">Men's Wedding Studio</strong>
                    <p class="desc"><strong>Address :</strong><br>{{$Branchdetails->address}}<br>
                     <strong> Phone Number: </strong>{{$Branchdetails->mobile}} <br>
                      <strong> GST Number :</strong>36ALQPT0938F1ZP.
                     </p>
                    
                </div>
                <div class="col-6 " style="text-align:right">
                    <img class="logo-style" style="height:130px; width:130px" src="https://ssr.piniteinfosol.tk/saloon2/wp-content/uploads/2022/10/wedding__1_-removebg-preview-1.png" alt="wedding studio"/>
                   
                </div>
                <div class="col-3">
                    <hr>
                    <strong>Bill To</strong>
                    <p class="desc">Customer Name:{{$data->customerdetails->name ?? ''}}</p>
                  
                    
                    
                </div>
                <div class="col-3">
                    <hr>
                    <strong>Phone Number</strong>
                      <p class="desc">Phone Number:{{$data->customerdetails->number ?? ''}}</p>
                </div>
                 
                <div class="col-3">
                    <hr>
                    <strong>Salesman</strong>
                    <p class="desc">{{$data->salesmandata->name}}</p>
                    
                    
                </div>
                
                <div class="col-3" style="text-align:right">
                    <hr>
                    <p class="desc">Invoice# {{$data->transcationid}}<br>{{$data->created_at}}<br></p>
                    
                </div>
                <div class="col-12">
                    <hr>
                    <table>
                        <tr>
                            <th >Sl No.</th>
                          <th >ITEM</th>
                          <th colspan="2">QTY</th>
                          <th>PRICE</th>
                          <th>AMOUNT</th>
                        </tr>
                         <?php  $i =1; ?>
                        @foreach($data->purchasedetails as $purchases)
                        <tr>
                            <td >{{$i}}</td>
                            <?php
                             $Product_name = \DB::table('products')->where('id', $purchases->product_id)->select('name')->first();
                            ?>
                          <td >{{$Product_name->name}}</td>
                          <td colspan="2">{{$purchases->quantity}}</td>
                          <td>₹{{$purchases->purchasedprice}}</td>
                          <td>₹{{$purchases->quantity * $purchases->purchasedprice}}</td>
                        </tr>
                        <?php $i++;?>
                        @endforeach
                        
                        <tr>
                          <td colspan="2">
                            <ul>
                              <li style="font-family:arial, sans-serif; font-size:13px">
                              Goods once sold can't be taken back.
                            </li>
                            <li  style="font-family:arial, sans-serif; font-size:13px">
                             Exchange of goods will be subject to our approval.
                            </li>
                            <li  style="font-family:arial, sans-serif; font-size:13px">
                              Strictly No Exchange without bill. No Guarantee on Pure Silk Items.
                            </li>
                            <li  style="font-family:arial, sans-serif; font-size:13px">
                              Suits,Sherwani,Dupatta,Pagdl,No Exchange.
                            </li>
                             <li  style="font-family:arial, sans-serif; font-size:13px">
                             We Shall Not be responsible for the goods if delivery is not taken within 2 months
                            </li>
                            <li  style="font-family:arial, sans-serif; font-size:13px">
                              <strong>NO GUARANTEE ON ANY ITEM</strong>
                            </li>
                           
                            </ul>
                          </td>
                          <td colspan="2" style="border-left-style: hidden;">
                              <strong>Included SGST & CGST</strong>
                          </td>
                          <td colspan="4">
                            <table>
                              <tr>
                                <td><strong>Grand Total</strong></td>
                                <td><strong>{{$data->totalpurchase}}</strong></td>
                              </tr>
                              <tr>
                                <td><strong>Discount</strong></td>
                                <td><strong>₹{{$data->discount }} </strong></td>
                              </tr>
                              <tr>
                                <td><strong>Final Total</strong></td>
                                <td><strong>{{$data->totalpurchase - $data->discount}}</strong></td>
                              </tr>
                              @if($data->ispartiallypay == 1)
                               <tr>
                                <td><strong>Advance</strong></td>
                                <td><strong>{{$data->partialpay}}</strong></td>
                              </tr>
                               @if($data->payment2 != null)
                              <tr>
                                <td><strong>Final Payment</strong></td>
                                <td><strong>{{$data->payment2 }}
                                    </strong></td>
                              </tr>
                              @endif
                               @if($data->payment2 == null)
                              <tr>
                                  
                                <td><strong>Remaining Balance</strong></td>
                                <td><strong>{{$data->totalpurchase - $data->discount - $data->partialpay - $data->payment2 }}
                                    </strong></td>
                              </tr>
                              @endif
                              @endif
                            </table>
                            
                          </td>
                          
                        </tr>
                                       
                      </table>
                      <div class="col-12 mt-3">
                        <strong>Our Branches:</strong>
                    </div>
                    <table>
                      <tr>
                       @foreach($Branchdetail as $bankdetailssss)
                    <td>
                  
                        
                        <strong>Address:</strong>
                        <br>
                       {{$bankdetailssss->address}}<br><strong>Phone Number: </strong>{{$bankdetailssss->mobile}}
                        
                  
                    </td>
                    @endforeach
                    <tr>
                    </table>
                </div>
              
              
                
              
             
               
               
                
            </div>
              <div class="d-flex justify-content-between my-5">
                   <div class="p-2"></div>
                   <div class="p-2">
                        <button onclick="window.print()" class="no-print btn btn-primary">Print</button>
                   </div>
                   <div class="p-2"></div>
               </div> 
        </div>
    </page>
   
   
  </body>
</html>
