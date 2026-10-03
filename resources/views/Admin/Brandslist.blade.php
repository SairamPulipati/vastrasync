<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous" />
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <link href="{{asset('css/brands.css')}}" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="{{asset('js/brands.js')}}"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" charset="utf-8"></script>
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
                    <h5>Brands</h5>
                </div>

                <div class="col-12 col-md-6" style="text-align: right;">
                   
                    <button type="button" class="btn btn-outline-info" data-toggle="modal" data-target="#exampleModalLong"> <i class="fa-thin fa-plus mr-2"></i> Add New Brand</button>
                    <!-- Button trigger modal -->

                    <!-- Modal -->
                    <form action="{{route('AddBrands')}}" method="post" enctype='multipart/form-data'>
                        @csrf
                    <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h6 class="modal-title" id="exampleModalLongTitle">Add New Brand</h6>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div style="text-align:left;">
                                        <div class="container">
                                            <div class="row">

                                                <div class="col-12 ">
                                                    <label id="name"><span style="color:red;">* </span>Name</label>
                                                    <input type="text" id="newCustomerName" placeholder="Enter the Name" name="brandName" class="form-control" style="background-color:whitesmoke;">
                                                    <p id="requiredName" class="required-class"></p>
                                                </div>
                                                

                                                <div class="col-12 ">
                                                    <p>Brand Logo</p>
                                                    <div class="form-input">
                                                        <div class="preview">
                                                            <img id="file-ip-1-preview">
                                                        </div>
                                                        <label for="file-ip-1">Upload Image</label>
                                                        <input type="file" id="file-ip-1" name="filename" accept="image/*" name="imageUpload" onchange="showPreview(event);">

                                                    </div>
                                                </div>






                                            </div>



                                        </div>
                                    </div>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                    <button id="createButton" onclick="myFunction()" class="btn btn-info">Create</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    </form>
                    <div class="d-flex flex=row">

                    </div>


                    <!-- Modal -->
                 
                </div>
            </div>
        </div>
        <hr>

        <!--<div class="d-flex flex-row mb-3">-->
        <!--    <select class="ml-2">-->
        <!--        <option>Name</option>-->

        <!--    </select>-->
        <!--    <form class="example ml-2" style="max-width:250px">-->
        <!--        <input type="text" placeholder="Search.." name="search2">-->
        <!--        <button style="height:30px;"><i class="fa fa-search "></i></button>-->
        <!--    </form>-->

        <!--    <select class="ml-2 d-none">-->
        <!--        <option>Enabled</option>-->
        <!--        <option>Disabled</option>-->

        <!--    </select>-->
        <!--</div>-->
        @if(session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif
        <table id="brandsTable">
            <thead>
            <tr>
                <th>Name</th>
                <th>Brand Logo</th>
                <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach($Brands as $Brand)
            <tr>
                <td>{{$Brand->name}}</td>
                <td><img height="35px" width="35px" src="{{asset('images/brand/logos/'. $Brand->image)}}" /></td>
                <td>
                    <div  onclick="deletebrand('{{$Brand->id}}')" class="table-icon  ">
                        <i class="fa-solid fa-trash-can mt-2" style="color:#ffffff; font-size:x-small;"></i>
                    </div>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <!--model-->
    <div class="modal fade" id="exampleModalCenter1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Edit Brand</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="row">

                            <div class="col-12 ">
                                <label id="name"><span style="color:red;">* </span>Name</label>
                                <input name="updateName" type="text" id="newCustomerName" placeholder="Enter the Name" class="form-control" style="background-color:whitesmoke;">
                                <p id="requiredName" class="required-class"></p>
                            </div>
                           

                            <div class="col-12 ">
                                <p>Brand Logo</p>
                                <div class="form-input">
                                    <div class="preview">
                                        <img id="file-ip-2-preview">
                                    </div>
                                    <label for="file-ip-2">Upload Image</label>
                                    <input name="updateImage" type="file" id="file-ip-2" accept="image/*" onchange="showPreview2(event);">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-info">Update</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                </div>
            </div>
        </div>
    </div>


</body>

</html>
<script type="text/javascript">
    function deletebrand(id)
    {
        $.ajax({
            url : 'deletebrand',
            type : 'GET',
            data : {
                'id' : id,
            },
            dataType:'json',
            success : function(data) {   
              if(data === 1)
              {
                alert('Brand Deleted Sucessfully');
                $("#brandsTable").load(window.location + " #brandsTable");
                
              }             
            },
            error : function(request,error)
            {

            }
        });
    }
        $(document).ready(function () {
    $('#brandsTable').DataTable();
});
    
</script>