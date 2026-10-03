<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous" />
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <link href="{{asset('css/Product.css')}}" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="{{asset('js/Product.js')}}"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.15.10/dist/css/uikit.min.css" />

    <!-- UIkit JS -->
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.15.10/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.15.10/dist/js/uikit-icons.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>


    <link rel="stylesheet" href="{{ asset('css/modern-theme.css') }}">
</head>

<body>
    @include('Admin.sidebarmenu')
    <div id="main">
        @include('Admin.topnavbar')

        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-md-6">
                    <h5>Products</h5>
                </div>
                
                <div class="col-12 col-md-6" style="text-align: right;">
                    <button type="button" data-toggle="modal" data-target="#exampleModalCenter" class="btn btn-outline-info"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cloud-upload mr-2" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M4.406 1.342A5.53 5.53 0 0 1 8 0c2.69 0 4.923 2 5.166 4.579C14.758 4.804 16 6.137 16 7.773 16 9.569 14.502 11 12.687 11H10a.5.5 0 0 1 0-1h2.688C13.979 10 15 8.988 15 7.773c0-1.216-1.02-2.228-2.313-2.228h-.5v-.5C12.188 2.825 10.328 1 8 1a4.53 4.53 0 0 0-2.941 1.1c-.757.652-1.153 1.438-1.153 2.055v.448l-.445.049C2.064 4.805 1 5.952 1 7.318 1 8.785 2.23 10 3.781 10H6a.5.5 0 0 1 0 1H3.781C1.708 11 0 9.366 0 7.318c0-1.763 1.266-3.223 2.942-3.593.143-.863.698-1.723 1.464-2.383z" />
                            <path fill-rule="evenodd" d="M7.646 4.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V14.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3z" />
                        </svg>Import Products</button>
                    <button type="button" class="btn btn-outline-info" uk-toggle="target: #offcanvas-flip"> <i class="fa-thin fa-plus mr-2"></i> Add New Product</button>

                    <form method="post" action="{{route('AddNewProduct')}}">
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
                                        <input type="file" id="file-ip-2" name="Image" accept="image/*" onchange="showPreview2(event);">

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
                                                    <h2 class="uk-modal-title">Headline</h2>
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
                                    <div class="col-12 col-md-6">
                                        <label id="name" style="font-size:15px"><span style="color:red;">* </span>Category</label>
                                        <select type="text" id="bradSlug"  name="category" placeholder="Enter the Slug" class="form-control" style="background-color:whitesmoke; font-size:15px">
                                            <option  value="1" style="font-size:13px">Meter</option>
                                            <option value="1" style="font-size:13px">Meter</option>
                                            <option value="1" style="font-size:13px">Meter</option>
                                            <option value="1" style="font-size:13px"> Meter</option>
                                        </select>
                                    </div>

                                    <div class="col-12 col-md-6">
                                        <label id="name" style="font-size:15px"><span style="color:red;">* </span>Brand:</label>
                                        <select type="text" name="brand" id="bradSlug" placeholder="Enter the Slug" class="form-control" style="background-color:whitesmoke; font-size:15px">
                                            <option value="2" style="font-size:13px">Meter</option>
                                            <option value="2" style="font-size:13px">Meter</option>
                                            <option value="2" style="font-size:13px">Meter</option>
                                            <option value="2" style="font-size:13px">Meter</option>
                                        </select>
                                    </div>


                                    <div class="col-12 col-md-4 ">
                                        <p id="name" style="font-size:15px"><span style="color:red;">* </span>Item Code</p>
                                        <input type="text" name="itemCode" value="{{$productCode}}" style="font-size:13px" class="form-control" placeholder="Please Enter Item.." readonly>
                                    </div>
                                    


                                    <div class="col-12 col-md-4">
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
                                   
                                    <div class="col-12 col-md-4">
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
                                        <textarea style="font-size:13px;" name="description" rows="4" cols="50" type="text" class="form-control" placeholder="vat"></textarea>
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
                    <div id="offcanvas-flipview" uk-offcanvas="flip: true; overlay: true">
                        <div class="uk-offcanvas-bar">


                            <button class="uk-offcanvas-close" type="button" style="color:darkslateblue" uk-close></button>
                            <h4 style="color:black;"> Product Name</h4>
                            <hr style="color:black;">

                            <div class="d-flex flex-row">
                                <div class="d-flex flex-column">

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
                                        <div class="col-12 col-md-4">
                                            <p id="name" style="font-size:15px">Name</p>
                                            <p style="font-size:15px; margin-top:-15px;  ">thrt</p>

                                        </div>
                                        <div class="col-12 col-md-4">
                                            <p id="name" style="font-size:15px">
                                                Item Code</p>
                                            <p style="font-size:15px; margin-top:-15px; ">AD123</p>

                                        </div>
                                        <div class="col-12 col-md-4">
                                            <p id="name" style="font-size:15px">Category</p>
                                            <p style="font-size:15px; margin-top:-15px;  ">Shirts</p>

                                        </div>


                                        <div class="col-12 col-md-4 mt-2">
                                            <p id="name" style="font-size:15px"> Brand:</p>
                                            <p style="font-size:15px; margin-top:-15px;  ">Puma</p>

                                        </div>
                                        <div class="col-12 col-md-4 mt-2">
                                            <p id="name" style="font-size:15px">

                                                Current Stock</p>
                                            <p style="font-size:15px; margin-top:-15px;  ">76pc</p>

                                        </div>
                                        <div class="col-12 col-md-4 mt-2">
                                            <p id="name" style="font-size:15px">
                                                Quantity Alert</p>
                                            <p style="font-size:15px; margin-top:-15px;  ">55pc</p>

                                        </div>





                                    </div>
                                </div>

                            </div>
                            <div class="container">
                                <div class="row">
                                    <div class="col-12 col-md-4 mt-2">
                                        <p id="name" style="font-size:15px">Sales Price:</p>
                                        <p style="font-size:15px; margin-top:-15px;  ">37.00 (Without Tax)</p>

                                    </div>
                                    <div class="col-12 col-md-4 mt-2">
                                        <p id="name" style="font-size:15px">
                                            Purchase Price</p>
                                        <p style="font-size:15px; margin-top:-15px;  ">33.00 (Without Tax)</p>

                                    </div>
                                    <div class="col-12 col-md-4 mt-2">
                                        <p id="name" style="font-size:15px">
                                            MRP</p>
                                        <p style="font-size:15px;margin-top:-15px;  ">39.00</p>
                                    </div>
                                    <div class="col-12 col-md-4 mt-2">
                                        <p id="name" style="font-size:15px">
                                            Tax Rate</p>
                                        <p style="font-size:15px; margin-top:-15px;  ">-</p>
                                    </div>
                                    <div class="col-12 col-md-4 mt-2">
                                        <p id="name" style="font-size:15px">
                                            Opening Stock</p>
                                        <p style="font-size:15px;margin-top:-15px;  ">
                                            66 pc</p>
                                    </div>
                                    <div class="col-12">
                                        <h6>To Collect</h6>
                                        <h6>To Collect</h6>
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
                            <div class="container">
                                <div class="row">
                                    <div class="col-4">

                                        <label>
                                            <input type="radio" name="radio-button" value="css" checked />
                                            <p onclick="openCity(event, 'allTable')" class="sales mr-4">Product Orders</p>
                                        </label>
                                    </div>
                                    <div class="col-4">

                                        <label>
                                            <input type="radio" name="radio-button" value="no" />
                                            <p onclick="openCity(event, 'toCollectTable')" class="sales mr-4">Stock History</p>
                                        </label>
                                    </div>

                                </div>
                            </div>
                            <table id="allTable" class="salesTabel1">
                                <tr>

                                    <th>Order Date</th>
                                    <th>Order Type</th>
                                    <th>Quantity</th>
                                    <th>Unit Price</th>
                                    <th>Discount</th>
                                    <th>Tax</th>
                                    <th>SubTotal</th>
                                </tr>
                                <tr>
                                    <td>20-10-2022 01:04 am</td>








                                    <td>Sales</td>
                                    <td> 8 pc</td>
                                    <td> RP37.00</td>
                                    <td class="sales-status">
                                        <div class="pending">RP0.00 (0%)</div>
                                    </td>


                                    <td>
                                        RP0.00 (0%)
                                    </td>

                                    <td class="sales-status">RP296.00</td>

                                </tr>







                                <tr>
                                    <td>20-10-2022 01:04 am</td>
                                    <td>Sales</td>
                                    <td> 8 pc</td>
                                    <td> RP37.00</td>
                                    <td class="sales-status">
                                        <div class="pending">RP0.00 (0%)</div>
                                    </td>


                                    <td>
                                        RP0.00 (0%)
                                    </td>

                                    <td>
                                        RP296.00
                                    </td>

                                </tr>
                                <tr>
                                    <td>20-10-2022 01:04 am</td>
                                    <td>Sales</td>
                                    <td> 8 pc</td>
                                    <td> RP37.00</td>
                                    <td class="sales-status">
                                        <div class="pending">RP0.00 (0%)</div>
                                    </td>


                                    <td>
                                        RP0.00 (0%)
                                    </td>

                                    <td>
                                        RP296.00
                                    </td>
                                </tr>
                                <tr>
                                    <td>20-10-2022 01:04 am</td>
                                    <td>Sales</td>
                                    <td>8 pc</td>
                                    <td> RP37.00</td>

                                    <td class="sales-status">
                                        <div class="shipping">RP0.00 (0%)</div>
                                    </td>



                                    <td>
                                        RP0.00 (0%)
                                    </td>

                                    <td>
                                        RP296.00
                                    </td>
                                </tr>
                                <tr>
                                    <td>20-10-2022 01:04 am</td>
                                    <td>Sales</td>
                                    <td>8 pc</td>
                                    <td> RP37.00</td>
                                    <td class="sales-status">
                                        <div class="shipping">RP0.00 (0%)</div>
                                    </td>



                                    <td>
                                        RP0.00 (0%)
                                    </td>

                                    <td>
                                        RP296.00
                                    </td>
                                </tr>
                                <tr>
                                    <td>20-10-2022 01:04 am</td>
                                    <td>Sales</td>
                                    <td>8 pc</td>
                                    <td> RP37.00</td>
                                    <td class="sales-status">
                                        <div class="shipping">RP0.00 (0%)</div>
                                    </td>


                                    <td>
                                        RP0.00 (0%)
                                    </td>


                                    <td>
                                        RP296.00
                                    </td>
                                </tr>
                            </table>
                            <table id="toCollectTable" class="salesTabel1">
                                <tr>
                                    <th>Order Date</th>
                                    <th>Order Type</th>
                                    <th>Quantity</th>
                                    <th>Unit Price</th>
                                    <th>Discount</th>
                                    <th>Tax</th>
                                    <th>SubTotal</th>

                                </tr>
                                <tr>
                                    <td>20-10-2022 01:04 am</td>
                                    <td>Sales</td>
                                    <td> 8 pc</td>
                                    <td> RP37.00</td>
                                    <td class="sales-status">
                                        <div class="pending">RP0.00 (0%)</div>
                                    </td>


                                    <td>
                                        RP0.00 (0%)
                                    </td>

                                    <td>
                                        RP296.00
                                    </td>
                                </tr>
                                <tr>
                                    <td>20-10-2022 01:04 am</td>
                                    <td>Sales7</td>
                                    <td>8 pc</td>
                                    <td> RP37.00</td>
                                    <td class="sales-status">
                                        <div class="pending">RP0.00 (0%)</div>
                                    </td>


                                    <td>
                                        RP0.00 (0%)
                                    </td>

                                    <td>
                                        RP296.00
                                    </td>

                                </tr>
                                <tr>
                                    <td>20-10-2022 01:04 am</td>
                                    <td>Sales</td>
                                    <td>8 pc</td>
                                    <td> RP37.00</td>
                                    <td class="sales-status">
                                        <div class="pending">RP0.00 (0%)</div>
                                    </td>


                                    <td>
                                        RP0.00 (0%)
                                    </td>

                                    <td>
                                        RP296.00
                                    </td>
                                </tr>
                                <tr>
                                    <td>20-10-2022 01:04 am</td>
                                    <td>Sales</td>
                                    <td>8 pc</td>
                                    <td> RP37.00</td>

                                    <td class="sales-status">
                                        <div class="shipping">RP0.00 (0%)</div>
                                    </td>



                                    <td>
                                        RP0.00 (0%)
                                    </td>

                                    <td>
                                        RP296.00
                                    </td>
                                </tr>
                                <tr>
                                    <td>20-10-2022 01:04 am</td>
                                    <td>Sales</td>
                                    <td>8 pc</td>
                                    <td> RP37.00</td>
                                    <td class="sales-status">
                                        <div class="shipping">RP0.00 (0%)</div>
                                    </td>



                                    <td>
                                        RP0.00 (0%)
                                    </td>

                                    <td>
                                        RP296.00
                                    </td>
                                </tr>
                                <tr>
                                    <td>20-10-2022 01:04 am</td>
                                    <td>Sales</td>
                                    <td>8 pc</td>
                                    <td> RP37.00</td>
                                    <td class="sales-status">
                                        <div class="shipping">RP0.00 (0%)</div>
                                    </td>


                                    <td>
                                        RP0.00 (0%)
                                    </td>


                                    <td>
                                        RP296.00
                                    </td>
                                </tr>
                            </table>
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
                    <form class="example ml-2" style="max-width:250px">
                        <input type="text" placeholder="Search.." name="search2">
                        <button style="height:30px;"><i class="fa fa-search "></i></button>
                    </form>
                </div>
                <div class="col-12 col-md-4 mt-2">
                    <div class="dropdown">
                        <button onclick="dropDown()" class="dropbtn">Select Brand</button>
                        <div id="myDropdown" class="dropdown-content">
                            <input type="text" placeholder="Search.." id="myInput" onkeyup="filterFunction()">
                            <a style="font-size:13px;" href="#Levi's">Levi's</a>
                            <a style="font-size:13px;" href="#Omega">Omega</a>
                            <a style="font-size:13px;" href="#Puma">Puma</a>
                            <a style="font-size:13px;" href="#Allen Solly">Allen Solly</a>
                            <a style="font-size:13px;" href="#Biba">Biba</a>
                            <a style="font-size:13px;" href="#Flying Machine">Flying Machine</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 mt-2">
                    <select class="form-select form-select-lg mb-3 dropbtnCategery" aria-label=".form-select-lg example">
                        <option selected>Select Category</option>
                        <option style="font-size:13px;" value="1">Men Kurtas</option>
                        <option style="font-size:13px;" value="2">Men Shirts</option>
                        <option style="font-size:13px;" value="3">Girls Tops</option>
                        <option style="font-size:13px;" value="3">Women's Lehengas</option>
                        <option style="font-size:13px;" value="3">Brasso Sarees</option>
                        <option style="font-size:13px;" value="3">Banaras Collections</option>
                    </select>

                </div>

            </div>
        </div>
        <table id="productsTable">
            <tr>
                <th></th>
                <th>Product</th>
                <th>Category</th>
                <th>Brand</th>
                <th>Price</th>
                <th>Code</th>
                <th>Current Stock</th>
                <th>Action</th>
            </tr>
            @foreach($products as $product)
            <tr>
                <td></td>
                <td> <img style="height:50px;width:40px;  padding:3px;" src="https://www.beyoung.in/api/cache/catalog/products/plain_new_update_images_2_5_2022/rose_pink_plain_t-shirt_men_base_30_5_2022_400x533.jpg" />{{$product->name}}</td>
                <td>{{$product->category}}</td>
                <td>{{$product->brand}}</td>
                <td>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" style="color:red;" class="bi bi-arrow-up" viewBox="0 0 16 16">
                        
                    </svg> {{$product->price}}
                </td>
                <td>
                   
                      {!! DNS1D::getBarcodeHTML("$product->barcode", 'I25')  !!}
                     </div>
                </td>
                <td>
                {{$product->unit}}
                </td>
                <td>
                    <div class="table-icon " uk-toggle="target: #offcanvas-flipview">
                        <i class="fa-sharp fa-solid fa-eye mt-2" onclick="productview('{{$product->id}}')" style="color:#ffffff; font-size:smaller;"></i>
                    </div>
                    <div class="table-icon" uk-toggle="target: #offcanvas-flipedit">
                        <i class="fa-solid fa-pencil mt-2" style="color:#ffffff; font-size:smaller;"></i>
                    </div>
                    <div class="table-icon btnDelete">
                        <i class="fa-solid fa-trash-can mt-2" onclick="UIkit.notification({message: 'Success message…', status: 'success', pos: 'bottom-right'})" style="color:#ffffff; font-size:smaller;"></i>
                    </div>
                </td>
            </tr>
            @endforeach
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
    <script>
        $("#fromDate").datepicker({
            format: 'dd-mm-yyyy',
            autoclose: true,
        }).on('changeDate', function(selected) {
            var minDate = new Date(selected.date.valueOf());
            $('#toDate').datepicker('setStartDate', minDate);
        });

        $("#toDate").datepicker({
            format: 'dd-mm-yyyy',
            autoclose: true,
        }).on('changeDate', function(selected) {
            var minDate = new Date(selected.date.valueOf());
            $('#fromDate').datepicker('setEndDate', minDate);
        });
        function productview(id)
        {
            alert(id)
        }
    </script>
</body>

</html>