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

 <link rel="icon" type="image/svg+xml" href="{{ asset('images/favicon.svg') }}">
 <title>VastraSync ERP</title>
    <link rel="stylesheet" href="{{ asset('css/modern-theme.css') }}">
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
<div>
     <h4 style="color:black;"> Product Name</h4>
                            <hr style="color:black;">

                            <div class="d-flex flex-row">
                                <div class="d-flex flex-column">

                                  @if(!empty($product->image) && file_exists(public_path('images/products/logos/' . $product->image)))
                                    <img src="{{asset('images/products/logos/' . $product->image)}}" class="img-fluid" style="height:250px; border-radius:12px; object-fit:cover; border:1px solid #e2e8f0;">
                                  @else
                                    <img src="{{asset('images/product-placeholder.svg')}}" class="img-fluid" style="height:250px; border-radius:12px; object-fit:cover; border:1px solid #e2e8f0;">
                                  @endif
                                </div>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-12 col-md-4">
                                            <p id="name" style="font-size:15px">Name</p>
                                            <p style="font-size:15px; margin-top:-15px;  ">{{$product->name ?? ''}}</p>

                                        </div>
                                        <div class="col-12 col-md-4">
                                            <p id="name" style="font-size:15px">
                                                Item Code</p>
                                            <p style="font-size:15px; margin-top:-15px; ">{{$product->barcode ?? ''}}</p>

                                        </div>
                                        <div class="col-12 col-md-4">
                                            <p id="name" style="font-size:15px">Category</p>
                                            <p style="font-size:15px; margin-top:-15px;  ">{{$product->category ?? ''}}</p>

                                        </div>
                                        <div class="col-12 col-md-4 mt-2">
                                            <p id="name" style="font-size:15px"> Brand:</p>
                                            <p style="font-size:15px; margin-top:-15px;  ">{{$product->brand ?? ''}}</p>

                                        </div>
                                        <div class="col-12 col-md-4 mt-2">
                                            <p id="name" style="font-size:15px">

                                                Current Stock</p>
                                            <p style="font-size:15px; margin-top:-15px;  ">{{$product->unit ?? ''}}</p>

                                        </div>
                                        <div class="col-12 col-md-4 mt-2">
                                            <p id="name" style="font-size:15px">
                                                Quantity Alert</p>
                                            <p style="font-size:15px; margin-top:-15px;  ">{{$product->alert ?? ''}}</p>

                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="container">
                                <div class="row">
                                    <div class="col-12 col-md-4 mt-2">
                                        <p id="name" style="font-size:15px">Sales Price:</p>
                                        <p style="font-size:15px; margin-top:-15px;  ">{{$product->price ?? ''}}/- </p>

                                    </div>
                                    <div class="col-12 col-md-4 mt-2">
                                        <p id="name" style="font-size:15px">
                                            Purchase Price</p>
                                        <p style="font-size:15px; margin-top:-15px;  ">{{$product->purchasedprice->price ?? ''}}/-</p>

                                    </div>
                                    <!--<div class="col-12 col-md-4 mt-2">-->
                                    <!--    <p id="name" style="font-size:15px">-->
                                    <!--        MRP</p>-->
                                    <!--    <p style="font-size:15px;margin-top:-15px;  ">{{$product->price ?? ''}}/-</p>-->
                                    <!--</div>-->
                                    <div class="col-12 col-md-4 mt-2">
                                        <p id="name" style="font-size:15px">
                                            Tax Rate</p>
                                        <p style="font-size:15px; margin-top:-15px;  ">{{$product->tax ?? ''}}</p>
                                    </div>
                                    <!--<div class="col-12 col-md-4 mt-2">-->
                                    <!--    <p id="name" style="font-size:15px">-->
                                    <!--        Opening Stock</p>-->
                                    <!--    <p style="font-size:15px;margin-top:-15px;  ">-->
                                    <!--        66 pc</p>-->
                                    <!--</div>-->
                                    <!--<div class="col-12">-->
                                    <!--    <h6>To Collect</h6>-->
                                    <!--    <h6>To Collect</h6>-->
                                    <!--</div>-->
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
                            <!--<div class="container">-->
                            <!--    <div class="row">-->
                            <!--        <div class="col-4">-->

                            <!--            <label>-->
                            <!--                <input type="radio" name="radio-button" value="css" checked />-->
                            <!--                <p onclick="openCity(event, 'allTable')" class="sales mr-4">Product Orders</p>-->
                            <!--            </label>-->
                            <!--        </div>-->
                            <!--        <div class="col-4">-->

                            <!--            <label>-->
                            <!--                <input type="radio" name="radio-button" value="no" />-->
                            <!--                <p onclick="openCity(event, 'toCollectTable')" class="sales mr-4">Stock History</p>-->
                            <!--            </label>-->
                            <!--        </div>-->

                            <!--    </div>-->
                            <!--</div>-->
                            <!--<table id="allTable" class="salesTabel1">-->
                            <!--    <tr>-->
                            <!--        <th>Order Date</th>-->
    
                            <!--        <th>Quantity</th>-->
                            <!--        <th>Unit Price</th>-->
                            <!--        <th>Transcation id</th>-->
                                     
                                     
                                    
                            <!--    </tr>-->
                            <!--    @foreach($PurchaseDetails as $product)-->
                            <!--    <tr>-->
                            <!--        <td>{{$product->created_at}}</td>-->
                            <!--        <td> {{$product->quantity}}</td>-->
                            <!--        <td>{{$product->purchasedprice}}</td>-->
                            <!--         <td>{{$product->productdetails->transcationid ?? ''}}</td>-->
                                 


                                   

                            <!--    </tr>-->
                            <!--    @endforeach-->
                            <!--</table>-->
                            <!--<table id="toCollectTable" class="salesTabel1">-->
                            <!--    <tr>-->
                            <!--        <th>Order Date</th>-->
                            <!--        <th>Quantity</th>-->
                            <!--        <th>Unit Price</th>-->
                            <!--        <th>Tax</th>-->
                            <!--        <th>SubTotal</th>-->

                            <!--    </tr>-->
                            <!--    <tr>-->
                            <!--        <td>20-10-2022 01:04 am</td>-->
                            <!--        <td> 8 pc</td>-->
                            <!--        <td> RP37.00</td>-->
                                 

                            <!--        <td>-->
                            <!--            RP0.00 (0%)-->
                            <!--        </td>-->

                            <!--        <td>-->
                            <!--            RP296.00-->
                            <!--        </td>-->
                            <!--    </tr>-->
                            <!--    <tr>-->
                            <!--        <td>20-10-2022 01:04 am</td>-->
                            <!--        <td>8 pc</td>-->
                            <!--        <td> RP37.00</td>-->
                                  


                            <!--        <td>-->
                            <!--            RP0.00 (0%)-->
                            <!--        </td>-->

                            <!--        <td>-->
                            <!--            RP296.00-->
                            <!--        </td>-->

                            <!--    </tr>-->
                            <!--    <tr>-->
                            <!--        <td>20-10-2022 01:04 am</td>-->
                            <!--        <td>8 pc</td>-->
                            <!--        <td> RP37.00</td>-->
                                 


                            <!--        <td>-->
                            <!--            RP0.00 (0%)-->
                            <!--        </td>-->

                            <!--        <td>-->
                            <!--            RP296.00-->
                            <!--        </td>-->
                            <!--    </tr>-->
                            <!--    <tr>-->
                            <!--        <td>20-10-2022 01:04 am</td>-->
                            <!--        <td>8 pc</td>-->
                            <!--        <td> RP37.00</td>-->

                                  



                            <!--        <td>-->
                            <!--            RP0.00 (0%)-->
                            <!--        </td>-->

                            <!--        <td>-->
                            <!--            RP296.00-->
                            <!--        </td>-->
                            <!--    </tr>-->
                            <!--    <tr>-->
                            <!--        <td>20-10-2022 01:04 am</td>-->
                            <!--        <td>8 pc</td>-->
                            <!--        <td> RP37.00</td>-->
                                  



                            <!--        <td>-->
                            <!--            RP0.00 (0%)-->
                            <!--        </td>-->

                            <!--        <td>-->
                            <!--            RP296.00-->
                            <!--        </td>-->
                            <!--    </tr>-->
                            <!--    <tr>-->
                            <!--        <td>20-10-2022 01:04 am</td>-->
                            <!--        <td>8 pc</td>-->
                            <!--        <td> RP37.00</td>-->
                                  


                            <!--        <td>-->
                            <!--            RP0.00 (0%)-->
                            <!--        </td>-->


                            <!--        <td>-->
                            <!--            RP296.00-->
                            <!--        </td>-->
                            <!--    </tr>-->
                            <!--</table>-->
</div>
</div>
</body>
</html>