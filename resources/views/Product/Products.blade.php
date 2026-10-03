<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous" />
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <link href="{{asset('css/Product.css')}}" rel="stylesheet">
    <link href="{{asset('css/example-styles.css')}}" rel="stylesheet">
        <link href="{{asset('css/example-styles.css')}}" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="{{asset('js/Product.js')}}"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.15.10/dist/css/uikit.min.css" />

    <!-- UIkit JS -->
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.15.10/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.15.10/dist/js/uikit-icons.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css" />
 <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <link rel="stylesheet" href="{{ asset('css/modern-theme.css') }}">
    <link rel="icon" type="image/svg+xml" href="{{ asset('images/favicon.svg') }}">
    <title>Products Catalog | Men's Wedding Studio</title>

</head>

<body>
    @include('Admin.sidebarmenu')
    <div id="main">
        @include('Admin.topnavbar')
        @if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif
        <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center mb-4">
            <div>
                <h4 class="font-weight-bold mb-1" style="color: #0f172a;">Product Catalog &amp; Inventory</h4>
                <p class="text-muted mb-0" style="font-size: 13.5px;">Manage ready-made studio products, frames, barcode labels, and pricing.</p>
            </div>
            <div class="mt-3 mt-md-0 d-flex" style="gap: 10px;">
                <a href="{{route('downloadallbarcodes')}}" class="btn btn-outline-primary" style="border-radius: 8px; font-weight: 600; font-size: 13px; text-decoration: none !important;">
                    <i class="fa-solid fa-download mr-1"></i> Barcode Download
                </a>
                <button type="button" class="btn-modern-primary" uk-toggle="target: #offcanvas-flip">
                    <i class="fa-solid fa-plus mr-1"></i> Add New Product
                </button>
            </div>
        </div>

                    <form method="post" action="{{route('AddNewProduct')}}"  enctype="multipart/form-data">
                    @csrf
                    <div id="offcanvas-flip" uk-offcanvas="flip: true; overlay: true">
                        <div class="uk-offcanvas-bar">


                            <button class="uk-offcanvas-close" type="button" style="color:darkslateblue" uk-close></button>
                            <h4 style="color:black;">Add New Product</h4>
                            <hr style="color:black;">

                            <div class="d-flex flex-row">
                                <div class="d-flex flex-column">
                                    <p style="color:black;">Image</p>
                                    <div class="form-input">
                                        <div class="preview">
                                            <img id="file-ip-2-preview" >
                                        </div>
                                        <label for="file-ip-2">Upload Image</label>
                                        <input type="file" id="file-ip-2" name="image" accept="image/*" onchange="showPreview2(event);">

                                    </div>
                                </div>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-12 col-md-6">
                                            <p id="name" style="font-size:15px"><span style="color:red;">* </span>Name</p>
                                            <input type="text" name="productName" id="newCustomerName" placeholder="Enter the Name" class="form-control" style="background-color:whitesmoke; font-size:13px">
                                            <p id="requiredName" class="required-class"></p>
                                        </div>

                                        <div class="col-12 col-md-6">
                                            <p id="name" style="font-size:15px"><span style="color:red;">* </span>Unit</p>
                                            <input type="text" name="productUnit" class="form-control" placeholder="Please Enter Units" />

                                            <p id="requiredSlug" class="required-class"></p>
                                        </div>

                                        <div class="col-12 col-md-6">

                                            <label id="name" style="font-size:15px"><span style="color:red;">* </span>Quantity Alert</label>
                                            <input type="number" name="quantityAlert"  style="font-size:13px" class="form-control">
                                        </div>
                                        <div class="col-12 col-md-6 ">
                                            <div class="d-flex flex-column">
                                            <label id="name" style="font-size:15px"><span style="color:red;">* </span>Generate Barcode</label>

                                            <a class="btn btn-info" uk-toggle="target: #modal-examplebar" >View Barcode</a>
                                            </div>



                                            






                                            <div id="modal-examplebar" uk-modal>
                                                <div class="uk-modal-dialog uk-modal-body">
                                                    <h2 class="uk-modal-title"></h2>
                                                    <p id="barcodeId"></p>
                                                    <p class="uk-text-right">
                                                    <div class="mb-3" >{!! DNS1D::getBarcodeHTML("$productCode", 'I25') !!}</div>
                                                    <div class="mb-3" >{{$productCode}}</div>
                                                  
                                                            
                                                        <button class="uk-button uk-button-default " uk-toggle="target: #offcanvas-flip" type="button">Cancel</button>
                                                        <a href="{{route('downloadbarcode', ['data'=>$productCode])}}" class="uk-button uk-button-primary" type="button" >Save</a>
                                                    </p>
                                                </div>
                                            </div>

                                        </div>

                                        <div id="modal-group-2" uk-modal>
                                            <div class="uk-modal-dialog">
                                                <button class="uk-modal-close-default" type="button" uk-close></button>
                                                <div class="uk-modal-header">
                                                    <p class="uk-modal-title" style="font-size:15px">Add New Category</p>
                                                </div>
                                                <div class="uk-modal-body">
                                                    <div class="container">
                                                        <div class="row">
                                                            <div class="col-12 mb-3">
                                                                <p id="name"><span style="color:red;">* </span>Parent Category</p>
                                                                <select style="font-size:15px" class="form-control">
                                                                    <option style="font-size:13px">Select Category</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-12 ">
                                                                <p id="name"><span style="color:red;">* </span>Name</p>
                                                                <input type="text" id="newCustomerName" placeholder="Enter the Name" class="form-control" style="background-color:whitesmoke; font-size:13px">
                                                                <p id="requiredName" class="required-class"></p>
                                                            </div>
                                                            <div class="col-12 ">
                                                                <p id="name" style="font-size:15px"><span style="color:red;">* </span>Slug</p>
                                                                <input type="text" id="bradSlug" placeholder="Enter the Slug" class="form-control" style="background-color:whitesmoke; font-size:13px">
                                                                <p id="requiredSlug" class="required-class"></p>
                                                            </div>

                                                            <div class="col-12 ">
                                                                <p style="font-size:15px">Category Logo</p>
                                                                <div class="form-input">
                                                                    <div class="preview">
                                                                        <img id="file-ip-3-preview">
                                                                    </div>
                                                                    <p for="file-ip-3" style="font-size:15px">Upload Image</p>
                                                                    <input type="file" id="file-ip-3" style="font-size:13px" accept="image/*" onchange="showPreview3(event);">

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
                            <div class="container">
                                <div class="row">
                                    <div class="col-12 col-md-4 my-2">
                                        <label id="name" style="font-size:15px"><span style="color:red;">* </span>Category</label>
                                        <select type="text" id="bradSlug"  name="category" placeholder="Enter the Slug" class="form-control" style="background-color:whitesmoke; font-size:15px">
                                            @foreach($categories as $caregory)
                                            <option  value="{{$caregory->id}}" style="font-size:13px">{{$caregory->name}}</option>
                                            @endforeach
                                            
                                        </select>
                                    </div>

                                    <div class="col-12 col-md-4 my-2">
                                        <label id="name" style="font-size:15px"><span style="color:red;">* </span>Brand:</label>
                                        <select type="text" name="brand" id="bradSlug" placeholder="Enter the Slug" class="form-control" style="background-color:whitesmoke; font-size:15px">
                                            @foreach($Brands as $Brand)
                                            <option value="{{$Brand->id}}" style="font-size:13px">{{$Brand->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                        <div class="col-12 col-md-4 my-2">
                                        <label id="name" style="font-size:15px"><span style="color:red;">* </span>Products:</label>
                                        <select type="text" name="purchases" id="purchases" placeholder="Enter the Slug" class="form-control" style="background-color:whitesmoke; font-size:15px">
                                            @foreach($purchases as $purchases)
                                            <option value="{{$purchases->id}}" style="font-size:13px">{{$purchases->item}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-12 col-md-4 my-2">
                                        <label id="name" style="font-size:15px"><span style="color:red;">* </span>Branches:</label>
                                        <select type="text" name="branches[]" id="branches" placeholder="Enter the Slug" class="form-control" style="background-color:whitesmoke; font-size:15px">
                                            @foreach($Branches as $branch)
                                            <option value="{{$branch->id}}" style="font-size:13px">{{$branch->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                        <div class="col-12 col-md-4 my-2">
                                        <label id="name" style="font-size:15px"><span style="color:red;">* </span>Product Size:</label>
                                        <input type="text" class="form-control" name="productSize" placeholder="Enter Product Size">
                                       
                                    </div>
                                  
                                    <div class="col-12 col-md-4 my-2">
                                        <p id="name" style="font-size:15px"><span style="color:red;">* </span>Item Code</p>
                                        <input type="text" name="itemCode" value="{{$productCode}}" style="font-size:13px" class="form-control" placeholder="Please Enter Item.." readonly>
                                    </div>
                                    


                                    <div class="col-12 col-md-4 my-2">
                                        <p id="name" style="font-size:15px;"><span style="color:red;">* </span>Tax
                                        </p>
                                        <div class="input-group">
                                            <input type="text" name="tax" class="form-control" aria-label="Text input with segmented dropdown button">
                                            <div class="input-group-append">
                                                <button type="button" style="width:30px;" class="btn btn-outline-secondary">₹</button>
                                                <button type="button" class="btn btn-outline-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <span class="sr-only">Toggle Dropdown</span>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#">With Tax</a>
                                                    <a class="dropdown-item" href="#">With Out Tax</a>
                                                    <a class="dropdown-item" href="#">Something else here</a>
                                                    <div role="separator" class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="#">Separated link</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                   
                                    <div class="col-12 col-md-4 my-2">
                                        <p style="font-size:15px;" id="name"><span style="color:red; ">* </span>MRP
                                        </p>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span style="width:30px; font-size:15px;" class="input-group-text">$</span>
                                                <span style="width:50px; font-size:15px;" class="input-group-text">0.00</span>
                                            </div>
                                            <input type="text " name="mrp" style="font-size:13px;" class="form-control" aria-label="Dollar amount (with dot and two decimal places)">
                                        </div>

                                    </div>
                                   


                                    <div id="modal-group-tax" uk-modal>
                                        <div class="uk-modal-dialog">
                                            <button class="uk-modal-close-default" type="button" uk-close></button>
                                            <div class="uk-modal-header">
                                                <p class="uk-modal-title" style="font-size:15px;">Add New Tax</p>
                                            </div>
                                            <div class="uk-modal-body">
                                                <p id="name" style="font-size:15px;"><span style="color:red; font-size:15px;">* </span>Name</p>
                                                <input type="text" id="newCustomerName" placeholder="Please Enter Unit Name" class="form-control" style="background-color:whitesmoke; font-size:15px;">
                                                <p id="name" style="font-size:15px;" class="mt-4 mb-3"><span style="color:red; font-size:15px;">* </span>Tax Rate</p>

                                                <div class="input-group">
                                                    <input style="font-size:13px;" type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                                                    <div class="input-group-append">
                                                        <span style="font-size:13px;" class="input-group-text">%</span>

                                                    </div>

                                                </div>

                                            </div>
                                            <div class="uk-modal-footer uk-text-right">
                                                <button class="uk-button uk-button-default uk-modal-close" style="font-size:15px;" type="button">Cancel</button>
                                                <a class="uk-button uk-button-primary" style="font-size:15px;" uk-toggle>Create</a>
                                            </div>

                                        </div>
                                    </div>



                                    <div class="col-12 col-md-6 mt-2">
                                        <p style="font-size:15px;">Description</p>

                                    </div>
                                    <div class="col-12">
                                        <textarea style="font-size:13px;" name="description" rows="4" cols="50" type="text" class="form-control" placeholder="Enter Product Description"></textarea>
                                    </div>
                                    <div class="col-12 mt-3" style="text-align: right;">
                                        <button class="btn btn-primary">Submit</button>
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
                    <div id="offcanvas-flipedit" uk-offcanvas="flip: true; overlay: true">
                        <div class="uk-offcanvas-bar">


                            <button class="uk-offcanvas-close" type="button" style="color:darkslateblue" uk-close></button>
                            <h4 style="color:black;">Edit Product</h4>
                            <hr style="color:black;">

                            <div class="d-flex flex-row">
                                <div class="d-flex flex-column">
                                    <p style="color:black;">Image</p>
                                    <div class="form-input">
                                        <div class="preview">
                                            <img id="file-ip-2-preview">
                                        </div>
                                        <label for="file-ip-2">Upload Image</label>
                                        <input type="file" id="file-ip-2" accept="image/*" onchange="showPreview2(event);">

                                    </div>
                                </div>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-12 col-md-6">
                                            <p id="name" style="font-size:15px"><span style="color:red;">* </span>Name</p>
                                            <input type="text" id="newCustomerName" placeholder="Enter the Name" class="form-control" style="background-color:whitesmoke; font-size:13px">
                                            <p id="requiredName" class="required-class"></p>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <p id="name" style="font-size:15px"><span style="color:red;">* </span>Slug</p>
                                            <input type="text" id="bradSlug" placeholder="Enter the Slug" class="form-control" style="background-color:whitesmoke; font-size:13px">
                                            <p id="requiredSlug" class="required-class"></p>
                                        </div>
                                        <div class="col-12 col-md-5 mt-3">
                                            <p id="name" style="font-size:15px"><span style="color:red;">* </span>Unit</p>
                                            <select type="text" id="bradSlug" placeholder="Enter the Slug" class="form-control" style="background-color:whitesmoke; font-size:13px">
                                                <option>Meter</option>
                                                <option>Meter</option>
                                                <option>Meter</option>
                                                <option>Meter</option>
                                            </select>

                                            <p id="requiredSlug" class="required-class"></p>
                                        </div>
                                        <div class="col-12 col-md-2 mt-5">

                                            <button class="uk-button uk-button-default" href="#modal-group-1" uk-toggle uk-tooltip="Add New Unit" style="height:30px; width:30px; font-size:25px;  background-color:gray; color:black;">+</button>







                                            <div id="modal-group-1" uk-modal>
                                                <div class="uk-modal-dialog">
                                                    <button class="uk-modal-close-default" type="button" uk-close></button>
                                                    <div class="uk-modal-header">
                                                        <p class="uk-modal-title">Add New Unit</p>
                                                    </div>
                                                    <div class="uk-modal-body">
                                                        <label id="name"><span style="color:red;">* </span>Unit Name</label>
                                                        <input type="text" id="newCustomerName" placeholder="Please Enter Unit Name" class="form-control" style="background-color:whitesmoke;">
                                                        <label id="name" class="mt-4 mb-3"><span style="color:red;">* </span>Short Name</label>
                                                        <input type="text" id="newCustomerName" placeholder="Please Enter Short Name" class="form-control mb-4" style="background-color:whitesmoke;">
                                                    </div>
                                                    <div class="uk-modal-footer uk-text-right">
                                                        <button class="uk-button uk-button-default uk-modal-close" type="button">Cancel</button>
                                                        <a class="uk-button uk-button-primary" uk-toggle>Create</a>
                                                    </div>
                                                </div>
                                            </div>







                                        </div>
                                        <div class="col-12 col-md-5 mt-3">

                                            <label id="name" style="font-size:15px"><span style="color:red;">* </span>Quantity Alert</label>
                                            <input type="number" style="font-size:13px" class="form-control">
                                        </div>

                                        <div id="modal-group-2" uk-modal>
                                            <div class="uk-modal-dialog">
                                                <button class="uk-modal-close-default" type="button" uk-close></button>
                                                <div class="uk-modal-header">
                                                    <p class="uk-modal-title" style="font-size:15px">Add New Category</p>
                                                </div>
                                                <div class="uk-modal-body">
                                                    <div class="container">
                                                        <div class="row">
                                                            <div class="col-12 mb-3">
                                                                <p id="name"><span style="color:red;">* </span>Parent Category</p>
                                                                <select style="font-size:15px" class="form-control">
                                                                    <option style="font-size:13px">Select Category</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-12 ">
                                                                <p id="name"><span style="color:red;">* </span>Name</p>
                                                                <input type="text" id="newCustomerName" placeholder="Enter the Name" class="form-control" style="background-color:whitesmoke; font-size:13px">
                                                                <p id="requiredName" class="required-class"></p>
                                                            </div>
                                                            <div class="col-12 ">
                                                                <p id="name" style="font-size:15px"><span style="color:red;">* </span>Slug</p>
                                                                <input type="text" id="bradSlug" placeholder="Enter the Slug" class="form-control" style="background-color:whitesmoke; font-size:13px">
                                                                <p id="requiredSlug" class="required-class"></p>
                                                            </div>

                                                            <div class="col-12 ">
                                                                <p style="font-size:15px">Category Logo</p>
                                                                <div class="form-input">
                                                                    <div class="preview">
                                                                        <img id="file-ip-3-preview">
                                                                    </div>
                                                                    <p for="file-ip-3" style="font-size:15px">Upload Image</p>
                                                                    <input type="file" id="file-ip-3" style="font-size:13px" accept="image/*" onchange="showPreview3(event);">

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
                            <div class="container">
                                <div class="row">
                                    <div class="col-12 col-md-4 mt-3">
                                        <label id="name" style="font-size:15px"><span style="color:red;">* </span>Category</label>
                                        <select type="text" id="bradSlug" placeholder="Enter the Slug" class="form-control" style="background-color:whitesmoke; font-size:15px">
                                            <option style="font-size:13px">Meter</option>
                                            <option style="font-size:13px">Meter</option>
                                            <option style="font-size:13px">Meter</option>
                                            <option style="font-size:13px"> Meter</option>
                                        </select>
                                    </div>
                                    <div class="col-12 col-md-2 mt-5">

                                        <button class="uk-button uk-button-default" href="#modal-group-2" uk-toggle uk-tooltip="Add New Category" style="height:30px; width:30px; font-size:25px;  background-color:gray; color:black;">+</button>
                                    </div>
                                    <div class="col-12 col-md-4 mt-3">
                                        <label id="name" style="font-size:15px"><span style="color:red;">* </span>Brand:</label>
                                        <select type="text" id="bradSlug" placeholder="Enter the Slug" class="form-control" style="background-color:whitesmoke; font-size:15px">
                                            <option style="font-size:13px">Meter</option>
                                            <option style="font-size:13px">Meter</option>
                                            <option style="font-size:13px">Meter</option>
                                            <option style="font-size:13px">Meter</option>
                                        </select>
                                    </div>
                                    <div class="col-12 col-md-2 mt-5">

                                        <button class="uk-button uk-button-default" href="#modal-group-3" uk-toggle uk-tooltip="Add New Brand" style="height:30px; width:30px; font-size:25px;  background-color:gray; color:black;">+</button>
                                    </div>
                                    <div class="col-12 col-md-4 mt-4">
                                        <p id="name" style="font-size:15px"><span style="color:red;">* </span>Barcode Symbology</p>
                                        <select style="font-size:15px" type="text" id="bradSlug" placeholder="Enter the Slug" class="form-control" style="background-color:whitesmoke;">
                                            <option style="font-size:13px">CODE39</option>
                                            <option style="font-size:13px">CODE34</option>
                                            <option style="font-size:13px">CODE90</option>
                                            <option style="font-size:13px">CODE23</option>
                                        </select>
                                    </div>
                                    <div class="col-12 col-md-4 mt-4">
                                        <p id="name" style="font-size:15px"><span style="color:red;">* </span>Item Code</p>
                                        <input type="text" style="font-size:13px" class="form-control" placeholder="Please Enter Item..">
                                    </div>

                                    <div class="col-12 col-md-6 mt-4">
                                        <p id="name" style="font-size:15px"><span style="color:red;">* </span>Opening Stock</p>
                                        <input type="text" placeholder="0" class="form-control" style="background-color:whitesmoke; font-size:15px">
                                        <p id="requiredName" class="required-class"></p>
                                    </div>
                                    <div class="col-12 col-md-6 mt-4">
                                        <p id="name" style="font-size:15px"><span style="color:red;">* </span>Opening Stock Date</p>
                                        <form autocomplete="off">
                                            <input type="text" class="form-control" style="font-size:13px;" placeholder="Start Date" id="fromDate">
                                        
                                        <p id="requiredSlug" class="required-class"></p>
                                    </div>
                                    <div class="col-12">
                                        <p style="font-weight:bold; font-size: 15px;;">Price & Tax</p>
                                        <hr class="uk-divider-icon">
                                        <hr style="width:50%;text-align:left;margin-left:0">
                                    </div>
                                    <div class="col-12 col-md-4">
                                        <p id="name" style="font-size:15px;"><span style="color:red;">* </span>Purchase Price
                                        </p>
                                        <div class="input-group">
                                            <input type="text" class="form-control" aria-label="Text input with segmented dropdown button">
                                            <div class="input-group-append">
                                                <button type="button" style="width:30px;" class="btn btn-outline-secondary">₹</button>
                                                <button type="button" class="btn btn-outline-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <span class="sr-only">Toggle Dropdown</span>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#">With Tax</a>
                                                    <a class="dropdown-item" href="#">With Out Tax</a>
                                                    <a class="dropdown-item" href="#">Something else here</a>
                                                    <div role="separator" class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="#">Separated link</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4">
                                        <p id="name" style="font-size:15px;"><span style="color:red; font-size: 15px;">* </span>Sales Price
                                        </p>
                                        <div class="input-group">
                                            <input type="text" class="form-control" aria-label="Text input with segmented dropdown button">
                                            <div class="input-group-append">
                                                <button type="button" style="width:30px;" class="btn btn-outline-secondary">₹</button>
                                                <button type="button" class="btn btn-outline-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <span class="sr-only">Toggle Dropdown</span>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#">With Tax</a>
                                                    <a class="dropdown-item" href="#">With Out Tax</a>
                                                    <a class="dropdown-item" href="#">Something else here</a>
                                                    <div role="separator" class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="#">Separated link</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4">
                                        <p style="font-size:15px;" id="name"><span style="color:red; ">* </span>MRP
                                        </p>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span style="width:30px; font-size:15px;" class="input-group-text">$</span>
                                                <span style="width:50px; font-size:15px;" class="input-group-text">0.00</span>
                                            </div>
                                            <input type="text " style="font-size:13px;" class="form-control" aria-label="Dollar amount (with dot and two decimal places)">
                                        </div>

                                    </div>
                                    <div class="col-12 col-md-6 mt-4">
                                        <p id="name" style="font-size:15px;"><span style="color:red;">* </span>Tax</p>
                                        <select type="text" id="bradSlug" placeholder="Enter the Slug" class="form-control" style="background-color:whitesmoke; font-size:15px;">
                                            <option style="font-size:13px;">CODE39</option>
                                            <option style="font-size:13px;">CODE34</option>
                                            <option style="font-size:13px;">CODE90</option>
                                            <option style="font-size:13px;">CODE23</option>
                                        </select>
                                    </div>
                                    <div class="col-12 col-md-2 mt-5">

                                        <button class="uk-button uk-button-default" href="#modal-group-tax" uk-toggle uk-tooltip="Add New Tax" style="height:30px; width:30px; font-size:25px;  background-color:gray; color:black;">+</button>
                                    </div>

                                    <div id="modal-group-tax" uk-modal>
                                        <div class="uk-modal-dialog">
                                            <button class="uk-modal-close-default" type="button" uk-close></button>
                                            <div class="uk-modal-header">
                                                <p class="uk-modal-title" style="font-size:15px;">Add New Tax</p>
                                            </div>
                                            <div class="uk-modal-body">
                                                <p id="name" style="font-size:15px;"><span style="color:red; font-size:15px;">* </span>Name</p>
                                                <input type="text" id="newCustomerName" placeholder="Please Enter Unit Name" class="form-control" style="background-color:whitesmoke; font-size:15px;">
                                                <p id="name" style="font-size:15px;" class="mt-4 mb-3"><span style="color:red; font-size:15px;">* </span>Tax Rate</p>

                                                <div class="input-group">
                                                    <input style="font-size:13px;" type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                                                    <div class="input-group-append">
                                                        <span style="font-size:13px;" class="input-group-text">%</span>

                                                    </div>

                                                </div>

                                            </div>
                                            <div class="uk-modal-footer uk-text-right">
                                                <button class="uk-button uk-button-default uk-modal-close" style="font-size:15px;" type="button">Cancel</button>
                                                <a class="uk-button uk-button-primary" style="font-size:15px;" uk-toggle>Create</a>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-12 mt-3">
                                        <p style="font-weight:bold; font-size:15px;">Custom Fields</p>
                                        <ul class="uk-list uk-list-line">------------------------------------------------------</ul>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <p style="font-size:15px;">Expiry Date</p>
                                        <input style="font-size:13px;" type="text" class="form-control" placeholder="Expiry Date">
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <p style="font-size:15px;">vat</p>
                                        <input style="font-size:13px;" type="text" class="form-control" placeholder="vat">
                                    </div>
                                    <div class="col-12 col-md-6 mt-2">
                                        <p style="font-size:15px;">Description</p>

                                    </div>
                                    <div class="col-12">
                                        <textarea style="font-size:13px;" rows="4" cols="50" type="text" class="form-control" placeholder="vat"></textarea>
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
                   
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h6 class="modal-title" id="exampleModalLongTitle">Add New Categories</h6>
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
                                                    <input type="text" id="newCustomerName" placeholder="Enter the Name" class="form-control" style="background-color:whitesmoke;">
                                                    <p id="requiredName" class="required-class"></p>
                                                </div>
                                                <div class="col-12 ">
                                                    <label id="name"><span style="color:red;">* </span>Slug</label>
                                                    <input type="text" id="bradSlug" placeholder="Enter the Slug" class="form-control" style="background-color:whitesmoke;">
                                                    <p id="requiredSlug" class="required-class"></p>
                                                </div>
                                                <div class="col-12 ">
                                                    <p>Category Logo</p>
                                                    <div class="form-input">
                                                        <div class="preview">
                                                            <img id="file-ip-1-preview">
                                                        </div>
                                                        <label for="file-ip-1">Upload Image</label>
                                                        <input type="file" id="file-ip-1" accept="image/*" onchange="showPreview1(event);">
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
                    <div class="d-flex flex=row">
                    </div>
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">Import Categories</h5>
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
                </form>
            </div>
        </div>
        <hr>
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-4 mt-2">
                    <!-- <form class="example ml-2" style="max-width:250px">
                        <input type="text" placeholder="Search.." name="search2">
                        <button style="height:30px;"><i class="fa fa-search "></i></button>
                    </form> -->
                </div>
                <div class="col-12 col-md-4 mt-2">
                    <div class="dropdown">
                        <!-- <button onclick="dropDown()" class="dropbtn">Select Brand</button> -->
                        <!-- <div id="myDropdown" class="dropdown-content">
                            <input type="text" placeholder="Search.." id="myInput" onkeyup="filterFunction()">
                            <a style="font-size:13px;" href="#Levi's">Levi's</a>
                            <a style="font-size:13px;" href="#Omega">Omega</a>
                            <a style="font-size:13px;" href="#Puma">Puma</a>
                            <a style="font-size:13px;" href="#Allen Solly">Allen Solly</a>
                            <a style="font-size:13px;" href="#Biba">Biba</a>
                            <a style="font-size:13px;" href="#Flying Machine">Flying Machine</a>
                        </div> -->
                    </div>
                </div>
                

            </div>
        </div>
        
        <div class="content-box p-4 mt-3">
            <div class="table-responsive">
                <table id="grandtotal" class="table">
            <thead>
            <tr>
                <th></th>
                <th>Product</th>
                <th>Category</th>
                <th>Branch</th>
                <th>Sale Price</th>
                <th>Purchased Price</th>
                <th>Code</th>
                <th>Main Category</th>
                <th>Product Size</th>
                <th>Current Stock</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($products as $product)
            <tr>
                <td>{{$product->id}}</td>
                 
                <td onclick="window.location='{{route('productview',$product->id )}}'" style="cursor: pointer;">
                    <div class="d-flex align-items-center" style="gap: 10px;">
                        @if(!empty($product->image) && file_exists(public_path('images/products/logos/' . $product->image)))
                            <img style="height:44px; width:44px; object-fit:cover; border-radius:8px; border:1px solid #e2e8f0;" src="{{ asset('images/products/logos/' . $product->image) }}" alt="{{ $product->name }}" />
                        @else
                            <img style="height:44px; width:44px; object-fit:cover; border-radius:8px; border:1px solid #e2e8f0;" src="{{ asset('images/product-placeholder.svg') }}" alt="{{ $product->name }}" />
                        @endif
                        <span class="font-weight-bold" style="color: #0f172a;">{{ $product->name }}</span>
                    </div>
                </td>
                 <?php 
                        $categorydetails = \DB::table('categories')->where('id', $product->category)->select('id', 'name')->first();
                     ?>
                <td>{{$categorydetails->name}}</td>
                <?php 
                        $Branchdetails = \DB::table('branches')->where('id', $product->branch)->select('id', 'name')->first();
                ?>
                <td>
                    
                     {{$Branchdetails->name ?? 'Not Avaliable'}}<br>
                  
                     </td>
                
                <td>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" style="color:red;" class="bi bi-arrow-up" viewBox="0 0 16 16">
                        
                    </svg> {{$product->price}}/-
                </td>
                <td>{{$product->purchasedprice->price ?? ''}}/-</td>
                <td>
                    <svg xmlns="http://www.w3.org/2000/svg" style="color:green;" width="16" height="16" fill="currentColor" class="bi bi-arrow-down" viewBox="0 0 16 16">
                        
                    </svg>
                    <div>  {!! DNS1D::getBarcodeHTML("$product->barcode", 'I25',1.8,22) !!} </div>
                </td>
                <td>{{$product->type}}</td>
                <td>{{$product->productSize}}</td>
                <td>
                {{$product->unit}}
                </td>
                <td>
                     <!-- uk-toggle="target: #offcanvas-flipview" -->
                    <div class="table-icon">
                        <a href="{{route('downloadbarcodeproduct', $product->id)}}">
                            <svg xmlns="http://www.w3.org/2000/svg" style="color:#ffffff; font-size:smaller;" width="18" height="18" fill="currentColor" class="bi bi-download " viewBox="0 0 16 16">
  <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
  <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/>
</svg>
                            <!--<i class="bi bi-download mt-2" style="color:#ffffff; font-size:smaller;"></i>-->
                        <!--<i class="fa-sharp fa-solid fa-eye mt-2" style="color:#ffffff; font-size:smaller;"></i>-->
                    </a>
                    </div>
                   
                    
                    <div class="table-icon" onclick="window.location='{{route('productedit', $product->id)}}'">
            <i class="fa-solid fa-pencil"  style="color:#ffffff; font-size:smaller;"></i>
                    </div>
                    <div class="table-icon" onclick="deleteProduct('{{$product->id}}')">
                        <i class="fa-solid fa-trash-can"  style="color:#ffffff; font-size:smaller;"></i>
                    </div>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
            </div>
        </div>
       
       
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
                                <input type="text" id="newCustomerName" placeholder="Enter the Name" class="form-control" style="background-color:whitesmoke;">
                                <p id="requiredName" class="required-class"></p>
                            </div>
                            <div class="col-12 ">
                                <label id="name"><span style="color:red;">* </span>Slug</label>
                                <input type="text" id="bradSlug" placeholder="Enter the Slug" class="form-control" style="background-color:whitesmoke;">
                                <p id="requiredSlug" class="required-class"></p>
                            </div>

                            <div class="col-12 ">
                                <p>Category Logo</p>
                                <div class="form-input">
                                    <div class="preview">
                                        <img id="file-ip-2-preview">
                                    </div>
                                    <label for="file-ip-2">Upload Image</label>
                                    <input type="file" id="file-ip-2" accept="image/*" onchange="showPreview2(event);">

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
    <script src="{{asset('js/jquery.multi-select.js')}}"></script>
    <script>
    
        // $("#fromDate").datepicker({
        //     format: 'dd-mm-yyyy',
        //     autoclose: true,
        // }).on('changeDate', function(selected) {
        //     var minDate = new Date(selected.date.valueOf());
        //     $('#toDate').datepicker('setStartDate', minDate);
        // });

        // $("#toDate").datepicker({
        //     format: 'dd-mm-yyyy',
        //     autoclose: true,
        // }).on('changeDate', function(selected) {
        //     var minDate = new Date(selected.date.valueOf());
        //     $('#fromDate').datepicker('setEndDate', minDate);
        // });
        function productview(id)
        {
            $.ajax({
            url : 'downloadbarcodeproduct',
            type : 'GET',
            data : {
                'id' : id
            },
            dataType:'json',
            success : function(data) {       
            },
            error : function(request,error)
            {

            }
        });
        }
    </script>



<!-- Modal -->

<script>
function deleteProduct(id){
    alert(id)
      $.ajax({
            url : 'deleteProductlist',
            type : 'GET',
            data : {
                
                'id' : id
            },
            dataType:'json',
            success : function(data) {
               $( "#grandtotal" ).load(window.location.href + " #grandtotal" );
                      
            },
            error : function(request,error)
            {

            }
        });
}
    $(function(){
      
        $('#branches').multiSelect();
       
    });
    $(document).ready(function () {
    $('#grandtotal').DataTable();
});
     
    </script>

</body>

</html>