<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous" />
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <link href="{{asset('css/registration.css')}}" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="{{asset('js/registration.js')}}"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" charset="utf-8"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/easy-pie-chart/2.1.6/jquery.easypiechart.min.js" charset="utf-8"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.15.10/dist/css/uikit.min.css" />

    <!-- UIkit JS -->
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.15.10/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.15.10/dist/js/uikit-icons.min.js"></script>
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
                    <h5>Profile</h5>

                </div>
                <div class="col-12 col-md-6" style="text-align: right;">
                    <button type="button" class="btn btn-outline-info" > Update</button>
                </div>
            </div>
        </div>
        <hr>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-md-6">
                    <label style="font-size:15px;" id="name"><span style="color:red;">* </span >Name</label>
                    <input type="text" id="newCustomerName" placeholder="Enter the Name" class="form-control" style="background-color:whitesmoke; font-size:13px;">
                    <p id="requiredName" class="required-class"></p>
                </div>
                <div class="col-12 col-md-6">
                    <label style="font-size:15px;" id="name"><span style="color:red;">* </span>Email</label>
                    <input type="email" id="newCustomerEmail" placeholder="Enter the Email" class="form-control" style="background-color:whitesmoke; font-size:13px;">
                    <p id="requiredEmail" class="required-class"></p>
                </div>
                <div class="col-12 col-md-6">
                    <label style="font-size:15px;" id="name"><span style="color:red;">* </span>Password</label>
                    <input type="password" id="newCustomerEmail" placeholder="Enter the password" class="form-control" style="background-color:whitesmoke; font-size:13px;">
                    <p id="requiredEmail" class="required-class"></p>
                </div>
                <div class="col-12 col-md-6">
                    <label  style="font-size:15px;" id="name"><span style="color:red;">* </span>Phone Number</label>
                    <input type="number" id="newCustomerPhone" placeholder="Enter the Phone Number" class="form-control" style="background-color:whitesmoke; font-size:13px;">
                    <p id="requiredPhone" class="required-class"></p>
                </div>
                <div class="col-12 col-md-4">
                    <p>Profile Image</p>
                    <div class="form-input">
                        <div class="preview">
                            <img id="file-ip-1-preview">
                        </div>
                        <label for="file-ip-1">Upload Image</label>
                        <input type="file" id="file-ip-1" accept="image/*" onchange="showPreview(event);">

                    </div>
                   
                </div>
                <div class="col-12">
                    <label  style="font-size:15px;">Address</label>
                    <textarea class="form-control" rows="3" placeholder="Please Enter Address"></textarea>
                </div>
                <div class="col-12 mt-3">
                    <button type="button" class="btn btn-outline-info" > Update</button>
                </div>
            </div>
        </div>
        
         
    
       
       
       


    </div>
</body>

</html>