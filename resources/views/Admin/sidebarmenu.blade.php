<div id="mySidebar" class="sidebar" style="width:250px">
        <div class="d-flex flex-row">


            <img height="70px" width="70px" class="ml-5" src="https://ssr.piniteinfosol.tk/saloon2/wp-content/uploads/2022/10/wedding__1_-removebg-preview-1.png" />
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>

        </div>
        @if(\Auth::user()->role == 1 || \Auth::user()->role == 2)
        <div class="d-flex flex-row ml-3 shadow dashboard-container dash dash-board" onclick="Dashboard()">
            <div class="home-icon ml-3 ">
                <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" fill="currentColor" class="bi bi-house-door mt-1" viewBox="0 0 16 16">
                    <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5z" />
                </svg>
            </div>
            <!--<a href="{{route('dashboardview')}}">-->
            <div class="mt-2 ml-4">
                <h5 style="font-size:14px;" >Dashboard</h5>
            </div>
        <!--</a>-->

        </div>
        @endif
        @if(\Auth::user()->role != 4)
        <div id="dashboardId" class="d-flex flex-row ml-3 shadow dashboard-container dash dash-board">
            <div class="home-icon ml-3 ">
                <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" fill="currentColor" class="bi bi-people-fill mt-1" viewBox="0 0 16 16">
  <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7Zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216ZM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z"/>
</svg>
                <!--<svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" fill="currentColor" class="bi bi-house-door mt-1" viewBox="0 0 16 16">-->
                <!--    <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5z" />-->
                <!--</svg>-->
            </div>
            <div class="mt-2 ml-4">
                <h5 style="font-size:14px;">Parties</h5>
            </div>
            <div class=" mt-1 ml-5">

                <!--<i id="downIcon" class="fa fa-caret-right mt-1"></i>-->
            </div>
        </div>
        @if(\Auth::user()->role != 3)
        <div id="account" class="hide">
            <div class="d-flex flex-row dash1" onclick="customerlist()">
                <!--<a href="{{route('customerlist')}}">-->
                <div class="mt-2 ml-5">
                    <h6 style="font-size: small;">Customers</h6>
                </div>
            <!--</a>-->
            </div>
        </div>
        @endif
        <div id="account" class="hide">
            <div class="d-flex flex-row dash1" onclick="supplierslist()">
            <!--<a href="{{route('supplierslist')}}">-->
                <div class="mt-2 ml-5">
                    <h6 style="font-size: small;">Suppliers</h6>
                </div>
            <!--</a>-->
            </div>
        </div>
        @endif
        @if(\Auth::user()->role != 4)
        <div id="productManagementId" class="d-flex flex-row shadow ml-3 accounting-container dash dash-board">
            <div class="home-icon ml-3 ">

                <i class="fa-brands fa-product-hunt mt-3" style="font-size:14px;"></i>
            </div>
            <div class="mt-3 ml-4 ">
                <h5 style="font-size:14px; ">Product Manager</h5>
            </div>
            <div class="mt-2 ml-3 ">
                <!--<i id="downIcon11" class="fa fa-caret-right mt-1"></i>-->
            </div>
        </div>
        <div id="account" class="hide6">
            <div class="d-flex flex-row dash1 " onclick="Brands()">
                <!--<a href="{{route('Brands')}}">-->
                <div class="mt-1 ml-5">
                    <h6 style="font-size: small;">Brands</h6>
                </div>
            <!--</a>-->
            </div>
        </div>
        <div id="account" class="hide6">
            <div class="d-flex flex-row dash1 " onclick="Categories()">
                <!--<a href="{{route('Categories')}}">-->
                <div class="mt-1 ml-5">
                    <h6 style="font-size: small;">Categories</h6>
                </div>
            <!--</a>-->
            </div>
        </div>
        <div id="account" class="hide6">
            <div class="d-flex flex-row dash1 " onclick="products()">
                <!--<a href="{{route('products')}}">-->
                <div class="mt-1 ml-5">
                    <h6 style="font-size: small;">Products</h6>

                </div>
            <!--</a>-->
            </div>
        </div>
         <div id="account" class="hide6">
             <!--onclick="stocks()"-->
            <div class="d-flex flex-row dash1 " onclick="stock()" >
                <!--<a href="{{route('stock')}}">-->
                <div class="mt-1 ml-5">
                    <h6 style="font-size: small;">Stocks</h6>

                </div>
            <!--</a>-->
            </div>
        </div>
         <div id="account" class="hide6">
            <div class="d-flex flex-row dash1 " onclick="customizedproducts()">
                
                <div class="mt-1 ml-5">
                    <h6 style="font-size: small;">Customized Products</h6>

                </div>
         
            </div>
        </div>
        @endif
        @if(\Auth::user()->role != 3)
        <div id="hrmsystemId" class="d-flex flex-row shadow ml-3 dashboard-container dash dash-board" onclick="dailysales()">
            <div class="home-icon ml-3 ">

                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-bag-plus mt-1" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M8 7.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V12a.5.5 0 0 1-1 0v-1.5H6a.5.5 0 0 1 0-1h1.5V8a.5.5 0 0 1 .5-.5z" />
                    <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z" />
                </svg>
            </div>
           
            <div class="mt-2 ml-3">
                <h5 style="font-size:14px;">Sales</h5>
            </div>
           
            <div class="mt-1 ml-5">
                <!--<i id="downIcon1" class="fa fa-caret-right mt-1"></i>-->
            </div>
        </div>
        @endif
       @if(\Auth::user()->role != 4)
        <div id="accountingSystemId" class="d-flex flex-row shadow ml-3 accounting-container dash dash-board" onclick="Purchases()">
            <div class="home-icon mt-2 ml-3 ">


                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-bag mt-1" viewBox="0 0 16 16">
                    <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z" />
                </svg>
            </div>
            <div class="mt-3 ml-3 ">
                <h5 style="font-size:14px;">Purchases</h5>
            </div>
            <div class=" mt-3 ml-4">
                <!--<i id="downIcon2" class="fa fa-caret-right "></i>-->
            </div>
        </div>
@endif
        <!-- <div id="account" class="hide2">
            <div class="d-flex flex-row dash1 ">
                <div class="mt-1 ml-5">
                    <h6 style="font-size: small;">Purchase Return/Dr.Note</h6>
                </div>
            </div>
        </div>
        <div id="account" class="hide2">
            <div class="d-flex flex-row dash1 ">
                <div class="mt-1 ml-5">
                    <h6 style="font-size: small;">Payment Out</h6>
                </div>
            </div>
        </div> -->
       <!--  <div class="d-flex flex-row shadow ml-3 accounting-container dash2 dash-board">
            <div class="home-icon ml-3 ">
                <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" fill="currentColor" class="bi bi-truck mt-3" viewBox="0 0 16 16">
                    <path d="M0 3.5A1.5 1.5 0 0 1 1.5 2h9A1.5 1.5 0 0 1 12 3.5V5h1.02a1.5 1.5 0 0 1 1.17.563l1.481 1.85a1.5 1.5 0 0 1 .329.938V10.5a1.5 1.5 0 0 1-1.5 1.5H14a2 2 0 1 1-4 0H5a2 2 0 1 1-3.998-.085A1.5 1.5 0 0 1 0 10.5v-7zm1.294 7.456A1.999 1.999 0 0 1 4.732 11h5.536a2.01 2.01 0 0 1 .732-.732V3.5a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5v7a.5.5 0 0 0 .294.456zM12 10a2 2 0 0 1 1.732 1h.768a.5.5 0 0 0 .5-.5V8.35a.5.5 0 0 0-.11-.312l-1.48-1.85A.5.5 0 0 0 13.02 6H12v4zm-9 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm9 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" />
                </svg>
            </div>
            <div class="mt-3 ml-3 ">
                <h5 style="font-size:13px;">Stock Transfer</h5>
            </div>
            <div class="mr-4">

            </div>
        </div> -->
        <!-- <div class="d-flex flex-row shadow ml-3 accounting-container dash2 dash-board"> -->
           <!--  <div class="home-icon ml-3 ">

                <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" fill="currentColor" class="bi bi-wrench-adjustable mt-3" viewBox="0 0 16 16">
                    <path d="M16 4.5a4.492 4.492 0 0 1-1.703 3.526L13 5l2.959-1.11c.027.2.041.403.041.61Z" />
                    <path d="M11.5 9c.653 0 1.273-.139 1.833-.39L12 5.5 11 3l3.826-1.53A4.5 4.5 0 0 0 7.29 6.092l-6.116 5.096a2.583 2.583 0 1 0 3.638 3.638L9.908 8.71A4.49 4.49 0 0 0 11.5 9Zm-1.292-4.361-.596.893.809-.27a.25.25 0 0 1 .287.377l-.596.893.809-.27.158.475-1.5.5a.25.25 0 0 1-.287-.376l.596-.893-.809.27a.25.25 0 0 1-.287-.377l.596-.893-.809.27-.158-.475 1.5-.5a.25.25 0 0 1 .287.376ZM3 14a1 1 0 1 1 0-2 1 1 0 0 1 0 2Z" />
                </svg>
            </div> -->
            <!-- <div class="mt-3 ml-3 ">
                <h5 style="font-size:13px;">Stock Adjustment</h5>
            </div> -->
            <!-- <div class="mr-4">

            </div>
        </div> -->
      @if(\Auth::user()->role != 3)
        <div class="d-flex flex-row shadow ml-3 accounting-container dash2 dash-board" onclick="pos()">
            <div class="home-icon ml-3 ">
                <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" fill="currentColor" class="bi bi-cart4 mt-3" viewBox="0 0 16 16">
                    <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l.5 2H5V5H3.14zM6 5v2h2V5H6zm3 0v2h2V5H9zm3 0v2h1.36l.5-2H12zm1.11 3H12v2h.61l.5-2zM11 8H9v2h2V8zM8 8H6v2h2V8zM5 8H3.89l.5 2H5V8zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z" />
                </svg>
            </div>
            <!--<a href="{{route('pos')}}">-->
            <div class="mt-3  ml-3">
            
                <h5 style="font-size:14px;">POS</h5>
           
          
            </div>
             <!--</a>-->
            <div class="mr-4">

            </div>
        </div>
       @endif
        <!-- <div class="d-flex flex-row shadow ml-3 accounting-container dash2 dash-board">
            <div class="home-icon ml-3 ">
                <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" fill="currentColor" class="bi bi-bank mt-3" viewBox="0 0 16 16">
                    <path d="m8 0 6.61 3h.89a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5H15v7a.5.5 0 0 1 .485.38l.5 2a.498.498 0 0 1-.485.62H.5a.498.498 0 0 1-.485-.62l.5-2A.501.501 0 0 1 1 13V6H.5a.5.5 0 0 1-.5-.5v-2A.5.5 0 0 1 .5 3h.89L8 0ZM3.777 3h8.447L8 1 3.777 3ZM2 6v7h1V6H2Zm2 0v7h2.5V6H4Zm3.5 0v7h1V6h-1Zm2 0v7H12V6H9.5ZM13 6v7h1V6h-1Zm2-1V4H1v1h14Zm-.39 9H1.39l-.25 1h13.72l-.25-1Z" />
                </svg>
            </div>
            <div class="mt-3 ml-3 ">
                <h5 style="font-size:13px;">Cash & Bank</h5>
            </div>
            <div class="mr-4">

            </div>
        </div -->
       <!--  <div id="crmSystemId" class="d-flex flex-row shadow ml-3 dashboard-container dash dash-board">
            <div class="home-icon ml-3 ">

                <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" fill="currentColor" class="bi bi-explicit mt-1" viewBox="0 0 16 16">
                    <path d="M6.826 10.88H10.5V12h-5V4.002h5v1.12H6.826V7.4h3.457v1.073H6.826v2.408Z" />
                    <path d="M2.5 0A2.5 2.5 0 0 0 0 2.5v11A2.5 2.5 0 0 0 2.5 16h11a2.5 2.5 0 0 0 2.5-2.5v-11A2.5 2.5 0 0 0 13.5 0h-11ZM1 2.5A1.5 1.5 0 0 1 2.5 1h11A1.5 1.5 0 0 1 15 2.5v11a1.5 1.5 0 0 1-1.5 1.5h-11A1.5 1.5 0 0 1 1 13.5v-11Z" />
                </svg>
            </div>
            <div class="mt-2 ml-3 ">
                <h5 style="font-size:13px;">Expenses</h5>
            </div>
            <div class="mt-1 ml-5">
                <i id="downIcon3" class="fa fa-caret-right mt-1"></i>
            </div>
        </div> -->
        <div id="account" class="hide3">
            <div class="d-flex flex-row dash1 ">
                <div class="mt-3 ml-5">
                    <h6 style="font-size: small;">Expense Categories</h6>
                </div>
            </div>
        </div>
        <div id="account" class="hide3">
            <div class="d-flex flex-row dash1 ">
                <div class="mt-1 ml-5">
                    <h6 style="font-size: small;">Expenses</h6>
                </div>
            </div>
        </div>
        @if(\Auth::user()->role == 1 || \Auth::user()->role == 2)
        <div class="d-flex flex-row shadow ml-3 accounting-container dash2 dash-board" onclick="RegisterStaff()">
            <div class="home-icon ml-3 ">

                <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" fill="currentColor" class="bi bi-person mt-3" viewBox="0 0 16 16">
                    <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z" />
                </svg>
            </div>
            <div class="mt-3 ml-3 ">
                <!--<a href="{{route('RegisterStaff')}}">-->
                <h5 style="font-size:14px;">Staff Members</h5>
            <!--</a>-->
            </div>
            <div class="mr-4">

            </div>
        </div>
        @endif
        <!-- <div id="userManagementId" class="d-flex flex-row shadow ml-3 accounting-container dash dash-board">
            <div class="home-icon ml-3 ">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-journal mt-3" viewBox="0 0 16 16">
                    <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z" />
                    <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z" />
                </svg>
            </div>
            <div class="mt-3 ml-4 ">
                <h5 style="font-size:13px;">Reports</h5>
            </div>
            <div class="mt-2 ml-5">
                <i id="downIcon4" class="fa fa-caret-right mt-1"></i>
            </div>
        </div> -->
        <div id="account" class="hide5">
            <div class="d-flex flex-row dash1 ">
                <div class="mt-1 ml-5">
                    <h6 style="font-size: small;">Payment</h6>
                </div>
            </div>
        </div>
        <div id="account" class="hide5">
            <div class="d-flex flex-row dash1 ">
                <div class="mt-1 ml-5">
                    <h6 style="font-size: small;">Stock Alert</h6>
                </div>
            </div>
        </div>
        <div id="account" class="hide5">
            <div class="d-flex flex-row dash1 ">
                <div class="mt-1 ml-5">
                    <h6 style="font-size: small;">Sales Summary</h6>
                </div>
            </div>
        </div>
        <div id="account" class="hide5">
            <div class="d-flex flex-row dash1 ">
                <div class="mt-1 ml-5">
                    <h6 style="font-size: small;">Stock Summary</h6>
                </div>
            </div>
        </div>

        <div id="account" class="hide5">
            <div class="d-flex flex-row dash1 ">
                <div class="mt-1 ml-5">
                    <h6 style="font-size: small;">Rate List</h6>
                </div>
            </div>
        </div>

        <div id="account" class="hide5">
            <div class="d-flex flex-row dash1 ">
                <div class="mt-1 ml-5">
                    <h6 style="font-size: small;">Product Sales Summary</h6>
                </div>
            </div>
        </div>

        <div id="account" class="hide5">
            <div class="d-flex flex-row dash1 ">
                <div class="mt-1 ml-5">
                    <h6 style="font-size: small;">Users Reports</h6>
                </div>
            </div>
        </div>

        <div id="account" class="hide5">
            <div class="d-flex flex-row dash1 ">
                <div class="mt-1 ml-5">
                    <h6 style="font-size: small;">Profit & Loss</h6>
                </div>
            </div>
        </div>
        <!-- <div id="accountingSystemId" class="d-flex flex-row shadow ml-3 accounting-container dash2 dash-board">
            <div class="home-icon ml-3 ">
                <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" fill="currentColor" class="bi bi-laptop mt-3" viewBox="0 0 16 16">
                    <path d="M13.5 3a.5.5 0 0 1 .5.5V11H2V3.5a.5.5 0 0 1 .5-.5h11zm-11-1A1.5 1.5 0 0 0 1 3.5V12h14V3.5A1.5 1.5 0 0 0 13.5 2h-11zM0 12.5h16a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 12.5z" />
                </svg>
            </div>
            <div class="mt-3 ml-3 ">
                <h5 style="font-size:13px;">Online Order</h5>
            </div>
            <div class="mr-4">

            </div>
        </div> -->

@if(\Auth::user()->role == 1 || \Auth::user()->role == 2)
        <div id="posSystemId" class="d-flex flex-row shadow dashboard-container ml-3 dash dash-board" onclick="warehouse()">
            <div class="home-icon ml-3 mb-2 ">
               <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" fill="currentColor" class="bi bi-shop mt-1" viewBox="0 0 16 16">
  <path d="M2.97 1.35A1 1 0 0 1 3.73 1h8.54a1 1 0 0 1 .76.35l2.609 3.044A1.5 1.5 0 0 1 16 5.37v.255a2.375 2.375 0 0 1-4.25 1.458A2.371 2.371 0 0 1 9.875 8 2.37 2.37 0 0 1 8 7.083 2.37 2.37 0 0 1 6.125 8a2.37 2.37 0 0 1-1.875-.917A2.375 2.375 0 0 1 0 5.625V5.37a1.5 1.5 0 0 1 .361-.976l2.61-3.045zm1.78 4.275a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 1 0 2.75 0V5.37a.5.5 0 0 0-.12-.325L12.27 2H3.73L1.12 5.045A.5.5 0 0 0 1 5.37v.255a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0zM1.5 8.5A.5.5 0 0 1 2 9v6h1v-5a1 1 0 0 1 1-1h3a1 1 0 0 1 1 1v5h6V9a.5.5 0 0 1 1 0v6h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1V9a.5.5 0 0 1 .5-.5zM4 15h3v-5H4v5zm5-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1v-3zm3 0h-2v3h2v-3z"/>
</svg>
            </div>
            <div class="mt-2 ml-3 ">
                <h5 style="font-size:14px;">Branches</h5>
            </div>
            <div class="mt-1 ml-3">
                <!--<i id="downIcon9" class="fa fa-caret-right"></i>-->
            </div>
        </div> 
@endif
        <div id="accountingSystemId" class="d-flex flex-row shadow ml-3 accounting-container dash2 dash-board">
            <div class="home-icon ml-3 ">
                <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" fill="currentColor" class="bi bi-box-arrow-right mt-3" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z" />
                    <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z" />
                </svg>
            </div>
           
            <!--<a href="{{route('logout')}}">-->
            <div class="mt-3 ml-3 " onclick="logout()">
                <h5 style="font-size:13px;">Log Out</h5>
            </div>
        <!--</a>-->
            <div class="mr-4">

            </div>
        </div>

    </div>
    <script>
        function Dashboard(){
            window.location.href="{{route('dashboardview')}}";
        }
        function customerlist(){
           window.location.href= "{{route('customerlist')}}";
        }
        function supplierslist(){
          window.location.href= "{{route('supplierslist')}}";
        }
         function Brands(){
          window.location.href= "{{route('Brands')}}";
        }
          function Categories(){
          window.location.href= "{{route('Categories')}}";
        }
            function products(){
          window.location.href= "{{route('products')}}";
        }
          function dailysales(){
          window.location.href= "{{route('dailysales')}}";
        }
          function Purchases(){
          window.location.href= "{{route('Purchases')}}";
        }
          function pos(){
          window.location.href= "{{route('pos')}}";
        }
             function RegisterStaff(){
          window.location.href= "{{route('RegisterStaff')}}";
        }
              function warehouse(){
          window.location.href= "{{route('warehouse')}}";
        }
         function logout(){
          window.location.href= "{{route('logout')}}";
        }
          function stock(){
          window.location.href= "{{route('stock')}}";
        }
          function customizedproducts(){
          window.location.href= "{{route('customizedproducts')}}";
        }
        
       
        
        
        
        
       
   
          
    
        
    </script>