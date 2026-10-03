<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous" />
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <link href="{{asset('css/customers.css')}}" rel="stylesheet">
    <link href="{{asset('css/registration.css')}}" rel="stylesheet">
    <script src="{{asset('js/registration.js')}}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="{{asset('js/customers.js')}}"></script>
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
                    <h5>Customers</h5>

                </div>
                <div class="col-12 col-md-6" style="text-align: right;">
                    
                 
                    <!-- Button trigger modal -->

                    <!-- Modal -->
                  



                   



                    <div class="modal fade" id="exampleModalLong01" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content" style="width:60vw;">
                                <div class="modal-header">
                                    <h6 class="modal-title" id="exampleModalLongTitle">retert </h6>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div style="text-align:left;">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-12 col-md-4">
                                                    <p>Customer</p>
                                                    <img id="profileImageId" style="height:100px; width:100px; border-radius:50%;" src="{{ asset('images/avatar-default.svg') }}" />
                                                </div>

                                                

  
 

                                                <div class="col-12 col-md-4">
                                                    <label id="name"><span style="color:red;">* </span>Name</label>
                                                    <P style="font-size:13px;">Dach-Hintz</P>
                                                    <p id="requiredName" class="required-class"></p>
                                                </div>
                                                <div class="col-12 col-md-4">
                                                    <label id="name"><span style="color:red;">* </span>Phone Number</label>
                                                    <P style="font-size:13px;">9876543210</P>
                                                    <p id="requiredPhone" class="required-class"></p>
                                                </div>
                                                <div class="col-12 col-md-4">

                                                </div>
                                                
                                               
                                                
                                               
                                               
                                               
                                              
                                                <hr>
                                              
                                               

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
                    <div class="d-flex flex=row">

                    </div>


                    <!-- Modal -->
                    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">Import Customers</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body" style="text-align:left;">
                                    <p> Click here to download sample csv file</p>

                                    <h5> file</h5>

                                    <input type="file" onchange="uploadFile(event)" />

                                    <script>
                                        // DOM Elements
                                        const d = document
                                        const h1 = d.getElementsByTagName("h1")[0]
                                        const uploadButton = d.getElementsByTagName("input")[0]
                                    </script>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-info">Import</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <hr>
        <!--<div class="d-flex flex-row mb-3">-->
           
        <!--    <form class="example ml-2" style="max-width:250px">-->
        <!--        <input type="text" id="myInput" onkeyup="myFunction1()" placeholder="Search.." name="search2">-->
        <!--        <button style="height:30px;"><i class="fa fa-search "></i></button>-->
        <!--    </form>-->
           
        <!--</div>-->
    
        <table id="allTable" class="salesTabel1">
            <thead>
                <tr>
                <th>Name</th>
                <th>Phone</th>
                <th>view</th>
            </tr>
            </thead>
            <tbody>
            @foreach($customerlist as $customer)
            <tr>
                <td> <img style="height:30px;width:30px; border-radius:50%; padding:2px;" src="{{ asset('images/avatar-default.svg') }}" />{{$customer->name}}</td>
                <td>{{$customer->number}}</td>
                <td>
                    <a href="{{route('purchasedlisting', $customer->number)}}">
                    <div class="table-icon " data-toggle="modal">
                        <i class="fa-sharp fa-solid fa-eye mt-2" style="color:#ffffff; font-size:smaller;"></i>
                    </div>
                    </a>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
    
       
      

    </div>
</body>

</html>
<script>
$(document).ready(function () {
    $('#allTable').DataTable();
});
</script>