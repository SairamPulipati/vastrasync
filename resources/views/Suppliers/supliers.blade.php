<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous" />
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <link href="{{asset('css/suppliers.css')}}" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="{{asset('js/suppliers.js')}}"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" charset="utf-8"></script>
   
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.15.10/dist/css/uikit.min.css" />

    <!-- UIkit JS -->
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.15.10/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.15.10/dist/js/uikit-icons.min.js"></script>

     <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css" />
 <!--<script src="https://code.jquery.com/jquery-3.5.1.js"></script>-->
  <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
   <link rel="icon" type="image/svg+xml" href="{{ asset('images/favicon.svg') }}">
  <title>Men's Wedding Studio</title>
  <style>
          .unpaid-amount {
    height: 22px;
    width: 90px;
    background-color: #F08080;
    text-align: center;
}
.paid-amount {
    height: 22px;
    width: 90px;
    background-color: #3CB371;
    text-align: center;
}
  </style>
    <link rel="stylesheet" href="{{ asset('css/modern-theme.css') }}">
</head>

<body>
    @include('Admin.sidebarmenu')
    <div id="main">
        @include('Admin.topnavbar')
       
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-md-6">
                    <h5>Suppliers</h5>
                </div>
               
                <div class="col-12 col-md-6" style="text-align: right;">
                   
                    <button type="button" class="btn btn-outline-info" data-toggle="modal" data-target="#exampleModalLong"> <i class="fa-thin fa-plus mr-2"></i> Add New Supplier</button>
                    <!-- Button trigger modal -->
                    <!-- <form> -->

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content" style="width:60vw;">
                                <div class="modal-header">
                                    <h6 class="modal-title" id="exampleModalLongTitle">Add New Supplier</h6>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div style="text-align:left;">
                                        <div class="container">
                                            <div class="row">
                                                <!-- <div class="col-12 col-md-4">
                                                    <p>Profile Image</p>
                                                    <div class="form-input">
                                                        <div class="preview">
                                                            <img id="file-ip-1-preview">
                                                        </div>
                                                        <label for="file-ip-1">Upload Image</label>
                                                        <input type="file" id="file-ip-1" name="image" accept="image/*" onchange="showPreview(event);">

                                                    </div>
                                                </div> -->
                                                <div class="col-12 col-md-4">
                                                    <label ><span style="color:red;">* </span>Name</label>
                                                    <input type="text" name="suppliername" id="suppliername" placeholder="Enter the Name" class="form-control" style="background-color:whitesmoke;"/>
                                                    <p id="requiredName" class="required-class"></p>
                                                </div>
                                                <div class="col-12 col-md-4">
                                                    <label ><span style="color:red;">* </span>Phone Number</label>
                                                    <input type="number" name="phoneNumber" id="suppliernumber" placeholder="Enter the Phone Number" class="form-control" style="background-color:whitesmoke;"/>
                                                    <p id="requiredPhone" class="required-class"></p>
                                                </div>
                                                <div class="col-12 col-md-4">

                                                </div>
                                                <!--<div class="col-12 col-md-4">-->
                                                <!--    <label id="name"><span style="color:red;">* </span>Purchases</label>-->
                                                <!--    <input type="text" name="Purchases" id="Purchases" placeholder="Enter the Purchases" class="form-control" style="background-color:whitesmoke;">-->
                                                <!--    <p id="requiredEmail" class="required-class"></p>-->
                                                <!--</div>-->
                                                
                                                
                                               

                                            </div>
                                           
                                            
                                            
                                        </div>
                                    </div>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                    <button id="createButton" data-dismiss="modal" onclick="addPurchasedetails()" class="btn btn-info">Create</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- </form> -->
                   
                   

                    <div class="modal fade" id="exampleModalLong01" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content" style="width:60vw;">
                                <div class="modal-header">
                                    <h6 class="modal-title" id="exampleModalLongTitle">New Supplier </h6>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div style="text-align:left;">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-12 col-md-6">
                                                    <p>Profile Image</p>
                                                    <img id="profileImageId" style="height:100px; width:100px; border-radius:50%;" src="{{ asset('images/avatar-default.svg') }}" />
                                                </div>

                                            

                                                <div class="col-12 col-md-6">
                                                    <label id="name"><span style="color:red;">* </span>Name</label>
                                                    <P style="font-size:13px;">Dach-Hintz</P>
                                                    
                                                </div>
                                                <div class="col-12 col-md-6">
                                                    <label id="name"><span style="color:red;">* </span>Phone Number</label>
                                                    <P style="font-size:13px;">9876543210</P>
                                                   
                                                </div>
                                               
                                                <div class="col-12 col-md-6">
                                                    <label id="name"><span style="color:red;">* </span>Purchases</label>
                                                    <P style="font-size:13px;">Mobile</P>
                                                   
                                                </div>
                                                <p style="font-size:13px;">Transactions</p>
                                                <hr>
                                                <table class="table-overflow">
                                                    <tr>
                                                        <th>Payment Date</th>
                                                        <th>Txns No.</th>
                                                        <th>Payment Type</th>
                                                        <th>User</th>
                                                        <th>Amount</th>
                                                    </tr>
                                                   
                                                    <tr>
                                                        <td>11-10-2022</td>
                                                        <td> SALE-50</td>
                                                        <td>Sales</td>
                                                        <td> <img style="height:30px;width:30px; border-radius:50%; padding:2px;" src="{{ asset('images/avatar-default.svg') }}" />Dach-Hintz</td>
                                                        <td>₹15,608.15</td>
                                                    </tr>
                                                    <tr>
                                                        <td>11-10-2022</td>
                                                        <td> SALE-50</td>
                                                        <td>purchases</td>
                                                        <td> <img style="height:30px;width:30px; border-radius:50%; padding:2px;" src="{{ asset('images/avatar-default.svg') }}" />Dach-Hintz</td>
                                                        <td>₹15,608.15</td>
                                                    </tr>
                                                    <tr>
                                                        <td>11-10-2022</td>
                                                        <td> SALE-50</td>
                                                        <td>purchases</td>
                                                        <td> <img style="height:30px;width:30px; border-radius:50%; padding:2px;" src="{{ asset('images/avatar-default.svg') }}" />Dach-Hintz</td>
                                                        <td>₹15,608.15</td>
                                                    </tr>
                                                    <tr>
                                                        <td>11-10-2022</td>
                                                        <td>SALE-50</td>
                                                        <td>purchases</td>
                                                        <td> <img style="height:30px;width:30px; border-radius:50%; padding:2px;" src="{{ asset('images/avatar-default.svg') }}" />Dach-Hintz</td>
                                                        <td>₹15,608.15</td>
                                                    </tr>
                                                </table>
                                                <div class=" mt-5 mb-2 m-auto d-flex flex-row justify-content-end pagination mt-3">
                                                    <a href="#">&laquo;</a>
                                                    <a href="#">1</a>
                                                    <a class="active" href="#">2</a>
                                                    <a href="#">3</a>
                                                    <a href="#">4</a>
                                                    <a href="#">5</a>
                                                    <a href="#">6</a>
                                                    <a href="#">&raquo;</a>
                                                </div>

                                            </div>



                                        </div>
                                    </div>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                    
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Modal -->
                    
                </div>
            </div>
        </div>
        <hr>
        
        
        <table id="allTable" class="salesTabel1">
            <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Phone</th>
                <th>Status</th>
                
                <!--<th>Purchases</th>-->
                 <th>Actions</th> 
            </tr>
            </thead>
            <tbody>
             <?php  $i =1; ?>
            @foreach($Suppliers as $Supplier)
            <tr>
                <td>
                    {{$i}}</td>
                <td>{{$Supplier->name}}</td>
                <td>{{$Supplier->number}}</td>
                 @if($Supplier->isactive == 1)
                <td class="sales-status"><div  class="paid-amount">Enabled</div></td>
                @elseif($Supplier->isactive == 0)
                <td class="sales-status"><div  class="unpaid-amount">Disabled</div></td>
                @endif
                    
                <td>
                     <div  class="table-icon  ">
                           @if($Supplier->isactive == 1)
                        <i class="fa-solid fa-trash-can mt-2" onclick="deleteSupplier('{{$Supplier->id}}')" style="color:#ffffff; font-size:x-small;"></i>
                           @elseif($Supplier->isactive == 0)
                     <i class="fa-solid fa-arrow-rotate-left mt-2"  onclick="restoreSupplier('{{$Supplier->id}}')" style="color:white"></i>
                      @endif
                    </div>
                </td>
                <!--<td>{{$Supplier->purchases}}</td>-->
               <!--  <td>
                    <div class="table-icon "  data-toggle="modal" data-target="#exampleModalLong01">
                        <i class="fa-sharp fa-solid fa-eye mt-2" style="color:#ffffff; font-size:smaller;"></i>

                    </div>
                   
                    <div class="table-icon btnDelete">
                        <i class="fa-solid fa-trash-can mt-2" style="color:#ffffff; font-size:smaller;"></i>
                    </div>
                </td> -->
            </tr>
              <?php $i++; ?>
            @endforeach
            </tbody>
        </table>

    
    
        <!--<div class="fixed-bottom d-flex flex-row justify-content-end ">-->
        <!--    <div class="bottom-plus ">-->
        <!--        <i class="fa-light fa-plus plus-iconn" data-toggle="modal" data-target=".bd-example-modal-sm"></i>-->

        <!--    </div>-->

        <!--</div>-->


    </div>
</body>

</html>
<script type="text/javascript">
 function restoreSupplier(id)
    {
         $.ajax({
          url : 'restoreSupplier',
          type : 'GET',
          data : {
              'id' : id,
             
          },
          dataType:'json',
          success : function(data) {
              alert('Supplier Restored Sucessfully')
              $( "#allTable" ).load(window.location.href + " #allTable" );
          
             // urlRefresh();
             // alert('price added')        
          },
          error : function(request,error)
          {

          }
        });
    }
   function deleteSupplier(id)
    {
        $.ajax({
            url : 'deleteSupplier',
            type : 'GET',
            data : {
                'id' : id,
            },
            dataType:'json',
            success : function(data) {   
              if(data === 1)
              {
                alert('Supplier Deleted Sucessfully');
                $("#allTable").load(window.location + " #allTable");
                
              }             
            },
            error : function(request,error)
            {

            }
        });
    }
    function addPurchasedetails()
    {
        // $('#exampleModalLong').hide();
        var name = $('#suppliername').val();
        var number = $('#suppliernumber').val();
        // var purchases = $('#Purchases').val();
        $.ajax({
            url : 'addsuppiler',
            type : 'GET',
            data : {
                'name' : name,
                'number' : number
                // 'purchases' : purchases
            },
            dataType:'json',
            success : function(data) {   
              if(data === 1)
              {
                alert('Supplier added Sucessfully');
                $("#allTable").load(window.location + " #allTable");
                $('#suppliername').val('');
                $('#suppliernumber').val('');
                // $('#Purchases').val('');
              }             
            },
            error : function(request,error)
            {

            }
        });
    }
    $(document).ready(function () {
    $('#allTable').DataTable();
});
</script>