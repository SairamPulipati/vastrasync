<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous" />
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <link href="{{asset('css/warehose.css')}}" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="{{asset('js/warehouse.js')}}"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" charset="utf-8"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/easy-pie-chart/2.1.6/jquery.easypiechart.min.js" charset="utf-8"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.15.10/dist/css/uikit.min.css" />

    <!-- UIkit JS -->
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.15.10/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.15.10/dist/js/uikit-icons.min.js"></script>

  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css" />
 <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
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
                    <h5>Branches</h5>

                </div>
                <div class="col-12 col-md-6" style="text-align: right;">
                    <button type="button" class="btn btn-outline-info" uk-toggle="target: #offcanvas-flip"> Add New Branches</button>
                </div>
            </div>
        </div>
        <hr>
       <div class="container-fluid">
        <div class="row">
            
            <div class="col-12 col-md-12">
              <table clas=="table-hover table" id="warehouses">
                  <thead>
                <tr>
                    <!--<th>Logo</th>-->
                    <th>Name</th>
                    <!--<th>Email</th>-->
                    <th>Phone</th>
                    <th>Address</th>
                     <th>Status</th>
                    <th>Delete</th>
                    
                </tr>
                </thead>
                <tbody>
                @foreach($Branches as $branch)
                <tr>
                    
                    <td>{{$branch->name ?? ''}}</td>
                 
                    <td>{{$branch->mobile ?? ''}}</td>
                     <td>{{$branch->address ?? ''}}</td>
                      @if($branch->isactive == 1)
                <td class="sales-status"><div  class="paid-amount">Enabled</div></td>
                @elseif($branch->isactive == 0)
                <td class="sales-status"><div  class="unpaid-amount">Disabled</div></td>
                @endif
                    
                    <td>
                        <div class="table-icon" >
                        @if($branch->isactive == 1)
                        <i class="fa-solid fa-trash-can mt-2" onclick="branchdelte('{{$branch->id}}')" style="color:#ffffff;"></i>
                        @elseif($branch->isactive == 0)
                        <i class="fa-solid fa-arrow-rotate-left mt-2"  onclick="restorebranch('{{$branch->id}}')" style="color:white"></i>
                        @endif
                    </div>

                        </td>
                    
                </tr>
                @endforeach
                </tbody>
              </table>
            </div>
        </div>
       </div>
                       
         
       



        <form method="post" action="{{route('AddnewBranch')}}" enctype="multipart/form-data"    >
        		@csrf
                    <div id="offcanvas-flip" uk-offcanvas="flip: true; overlay: true">
                        <div class="uk-offcanvas-bar">


                            <button class="uk-offcanvas-close" type="button" style="color:darkslateblue" uk-close></button>
                            <h4 style="color:black;">Add New Branch</h4>
                            <hr style="color:black;">

                            <div class="d-flex flex-row">
                                <!--<div class="d-flex flex-column">-->
                                <!--    <p style="color:black;">Logo</p>-->
                                <!--    <div class="form-input">-->
                                <!--        <div class="preview">-->
                                <!--            <img id="file-ip-2-preview">-->
                                <!--        </div>-->
                                <!--        <label for="file-ip-2">Upload Image</label>-->
                                <!--        <input type="file" name="image" id="file-ip-2" accept="image/*" onchange="showPreview2(event);">-->

                                <!--    </div>-->
                                <!--</div>-->
                                <div class="container">
                                    <div class="row">
                                        <div class="col-12 col-md-6">
                                       
                                            <label id="name" style="font-size:15px"><span style="color:red;">* </span>Name</label>
                                            <input type="text" required id="newCustomerName" placeholder="Enter the Name" class="form-control" name="branchname" style="background-color:whitesmoke; font-size:13px">
                                       
                                        </div>

                                        <!--<div class="col-12 col-md-6">-->
                                        <!--    <p id="name" style="font-size:15px"><span style="color:red;">* </span>Email</p>-->
                                        <!--    <input type="email" name="branchemail" class="form-control" placeholder="Please Enter Units" />-->

                                        <!--    <p id="requiredSlug" class="required-class"></p>-->
                                        <!--</div>-->

                                        <div class="col-12 col-md-6">

                                            <label id="phone" style="font-size:15px"><span style="color:red;">* </span>Phone</label>
                                            <input type="number" required name="branchmobile" style="font-size:13px" class="form-control">
                                            
                                        </div>
                                       

                                      

                                    </div>
                                </div>

                            </div>
                            <div class="container">
                                <div class="row">
                                    <div class="col-12 col-md-6 mt-2">
                                        <p style="font-size:15px;">Billing Address</p>

                                    </div>
                                    <div class="col-12">
                                        <textarea style="font-size:13px;" rows="3" cols="50" type="text" name="address" class="form-control" placeholder="Please Enter Billing Address"></textarea>
                                    </div>
                                    
                                    </div>

                                    <div class="col-12 mt-3" style="text-align: right;">
                                        <div class="d-flex justify-content-center">
                                            <div class="p-2"></div>
                                        <div class="p-2"><button class="btn btn-primary">Submit</button>
                                        </div>
                                        <div class="p-2"></div>
                                        </div>
                                    </div> 


                                    <div id="modal-group-3" uk-modal>
                                        <div class="uk-modal-dialog">
                                            <button class="uk-modal-close-default" type="button" uk-close></button>
                                            <div class="uk-modal-header">
                                                <p class="uk-modal-title">Add New Brand</p>
                                            </div>
                                            <div class="uk-modal-body">
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="col-12 mb-3">
                                                            <label id="name"><span style="color:red;">* </span>Parent Category</label>
                                                            <select class="form-control">
                                                                <option>Select Category</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-12 ">
                                                            <label id="name"><span style="color:red;">* </span>Name</label>
                                                            <input type="text" id="newCustomerName" placeholder="Enter the Name" class="form-control" style="background-color:whitesmoke;">
                                                            <p id="requiredName" class="required-class"></p>
                                                        </div>
                                                        <div class="col-12 ">
                                                            <label id="name"><span style="color:red;">* </span>Slug</label>
                                                            <input type="text" id="bradSlug" placeholder="Enter the Slug" class="form-control" style="background-color:whitesmoke;">
                                                            <p id="requiredSlug" class="required-class"></p>
                                                        </div>

                                                        <div class="col-12 ">
                                                            <p>Brand Logo</p>
                                                            <div class="form-input">
                                                                <div class="preview">
                                                                    <img id="file-ip-4-preview">
                                                                </div>
                                                                <label for="file-ip-4">Upload Image</label>
                                                                <input type="file" id="file-ip-4" accept="image/*" onchange="showPreview4(event);">

                                                            </div>
                                                        </div>






                                                    </div>



                                                </div>
                                            </div>
                                            <div class="uk-modal-footer uk-text-right">
                                                <button class="uk-button uk-button-default uk-modal-close" type="button">Cancel</button>
                                                <a class="uk-button uk-button-primary" uk-toggle>Create</a>
                                            </div>


                                        </div>
                                    </div>





                                </div>
                            </div>



                        </div>
                    </div>
                    </form>





                         
</body>

</html>
<script>

  function restorebranch(id)
    {
         $.ajax({
          url : 'restorebranch',
          type : 'GET',
          data : {
              'id' : id,
             
          },
          dataType:'json',
          success : function(data) {
              alert('Branch Restored Sucessfully')
              $( "#warehouses" ).load(window.location.href + " #warehouses" );
          
             // urlRefresh();
             // alert('price added')        
          },
          error : function(request,error)
          {

          }
        });
    }
    function branchdelte(id){
           $.ajax({
            url : 'branchdelte',
            type : 'GET',
            data : {
                
                'id' : id
            },
            dataType:'json',
            success : function(data) {
       alert("branch deleted succesfully")
       $( "#warehouses" ).load(window.location.href + " #warehouses" );
            },
            error : function(request,error)
            {

            }
        });
    }
    
               $(document).ready(function () {
    $('#warehouses').DataTable();
});
 
</script>