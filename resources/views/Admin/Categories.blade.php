<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous" />
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <link href="{{asset('css/Categories.css')}}" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="{{asset('js/Categories.js')}}"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" charset="utf-8"></script>
   
     <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css" />
 <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>

 <link rel="icon" type="image/svg+xml" href="{{ asset('images/favicon.svg') }}">
<title>Men's Wedding Studio</title>

    <link rel="stylesheet" href="{{ asset('css/modern-theme.css') }}">
</head>

<body>
     @include('Admin.sidebarmenu')
    <div id="main"  style="margin-left:250px;">
        <div class="d-flex flex-row justify-content-between">
            <div>
                <button class="openbtn" onclick="openNav()">☰ MWS</button>
            </div>
            <div>
                <!--<svg xmlns="http://www.w3.org/2000/svg" data-toggle="modal" data-target=".bd-example-modal-sm" width="25" height="25" fill="currentColor" class="bi bi-plus-circle-dotted mr-2" style="color:darkslateblue;" viewBox="0 0 16 16">-->
                <!--    <path d="M8 0c-.176 0-.35.006-.523.017l.064.998a7.117 7.117 0 0 1 .918 0l.064-.998A8.113 8.113 0 0 0 8 0zM6.44.152c-.346.069-.684.16-1.012.27l.321.948c.287-.098.582-.177.884-.237L6.44.153zm4.132.271a7.946 7.946 0 0 0-1.011-.27l-.194.98c.302.06.597.14.884.237l.321-.947zm1.873.925a8 8 0 0 0-.906-.524l-.443.896c.275.136.54.29.793.459l.556-.831zM4.46.824c-.314.155-.616.33-.905.524l.556.83a7.07 7.07 0 0 1 .793-.458L4.46.824zM2.725 1.985c-.262.23-.51.478-.74.74l.752.66c.202-.23.418-.446.648-.648l-.66-.752zm11.29.74a8.058 8.058 0 0 0-.74-.74l-.66.752c.23.202.447.418.648.648l.752-.66zm1.161 1.735a7.98 7.98 0 0 0-.524-.905l-.83.556c.169.253.322.518.458.793l.896-.443zM1.348 3.555c-.194.289-.37.591-.524.906l.896.443c.136-.275.29-.54.459-.793l-.831-.556zM.423 5.428a7.945 7.945 0 0 0-.27 1.011l.98.194c.06-.302.14-.597.237-.884l-.947-.321zM15.848 6.44a7.943 7.943 0 0 0-.27-1.012l-.948.321c.098.287.177.582.237.884l.98-.194zM.017 7.477a8.113 8.113 0 0 0 0 1.046l.998-.064a7.117 7.117 0 0 1 0-.918l-.998-.064zM16 8a8.1 8.1 0 0 0-.017-.523l-.998.064a7.11 7.11 0 0 1 0 .918l.998.064A8.1 8.1 0 0 0 16 8zM.152 9.56c.069.346.16.684.27 1.012l.948-.321a6.944 6.944 0 0 1-.237-.884l-.98.194zm15.425 1.012c.112-.328.202-.666.27-1.011l-.98-.194c-.06.302-.14.597-.237.884l.947.321zM.824 11.54a8 8 0 0 0 .524.905l.83-.556a6.999 6.999 0 0 1-.458-.793l-.896.443zm13.828.905c.194-.289.37-.591.524-.906l-.896-.443c-.136.275-.29.54-.459.793l.831.556zm-12.667.83c.23.262.478.51.74.74l.66-.752a7.047 7.047 0 0 1-.648-.648l-.752.66zm11.29.74c.262-.23.51-.478.74-.74l-.752-.66c-.201.23-.418.447-.648.648l.66.752zm-1.735 1.161c.314-.155.616-.33.905-.524l-.556-.83a7.07 7.07 0 0 1-.793.458l.443.896zm-7.985-.524c.289.194.591.37.906.524l.443-.896a6.998 6.998 0 0 1-.793-.459l-.556.831zm1.873.925c.328.112.666.202 1.011.27l.194-.98a6.953 6.953 0 0 1-.884-.237l-.321.947zm4.132.271a7.944 7.944 0 0 0 1.012-.27l-.321-.948a6.954 6.954 0 0 1-.884.237l.194.98zm-2.083.135a8.1 8.1 0 0 0 1.046 0l-.064-.998a7.11 7.11 0 0 1-.918 0l-.064.998zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z" />-->
                <!--</svg>-->
                <!--<div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">-->
                <!--    <div class="modal-dialog modal-sm">-->
                <!--        <div class="modal-content">-->
                <!--            <div class="d-flex flex-row ml-5" data-toggle="modal" data-target=".bd-example-modal-lg">-->
                <!--                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person m-2" viewBox="0 0 16 16">-->
                <!--                    <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z" />-->
                <!--                </svg>-->
                <!--                <p class="m-2" style="font-size:14px;">Add Staff Members</p>-->
                <!--            </div>-->


                <!--            <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">-->
                <!--                <div class="modal-dialog modal-lg">-->
                <!--                    <div class="modal-content">-->
                <!--                        <form class="p-3">-->
                <!--                            <h5>Add New Staff Member</h5>-->
                <!--                            <hr>-->

                <!--                        </form>-->

                <!--                    </div>-->
                <!--                </div>-->
                <!--            </div>-->
                <!--            <div class="d-flex flex-row ml-5">-->
                <!--                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-person-plus m-2" viewBox="0 0 16 16">-->
                <!--                    <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z" />-->
                <!--                    <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z" />-->
                <!--                </svg>-->
                <!--                <p class="m-2" style="font-size:14px;">Add Customers</p>-->
                <!--            </div>-->
                <!--            <div class="d-flex flex-row ml-5">-->
                <!--                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-file-earmark-person-fill m-2" viewBox="0 0 16 16">-->
                <!--                    <path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zM11 8a3 3 0 1 1-6 0 3 3 0 0 1 6 0zm2 5.755V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1v-.245S4 12 8 12s5 1.755 5 1.755z" />-->
                <!--                </svg>-->
                <!--                <p class="m-2" style="font-size:14px;">Add Supplier</p>-->
                <!--            </div>-->
                <!--            <div class="d-flex flex-row ml-5">-->
                <!--                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-bag-plus-fill m-2" viewBox="0 0 16 16">-->
                <!--                    <path fill-rule="evenodd" d="M10.5 3.5a2.5 2.5 0 0 0-5 0V4h5v-.5zm1 0V4H15v10a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V4h3.5v-.5a3.5 3.5 0 1 1 7 0zM8.5 8a.5.5 0 0 0-1 0v1.5H6a.5.5 0 0 0 0 1h1.5V12a.5.5 0 0 0 1 0v-1.5H10a.5.5 0 0 0 0-1H8.5V8z" />-->
                <!--                </svg>-->
                <!--                <p class="m-2" style="font-size:14px;">Add Brand</p>-->
                <!--            </div>-->
                <!--            <div class="d-flex flex-row ml-5">-->
                <!--                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-hr m-2" viewBox="0 0 16 16">-->
                <!--                    <path d="M12 3H4a1 1 0 0 0-1 1v2.5H2V4a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v2.5h-1V4a1 1 0 0 0-1-1zM2 9.5h1V12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V9.5h1V12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V9.5zm-1.5-2a.5.5 0 0 0 0 1h15a.5.5 0 0 0 0-1H.5z" />-->
                <!--                </svg>-->
                <!--                <p class="m-2" style="font-size:14px;">Add Category</p>-->
                <!--            </div>-->
                <!--            <div class="d-flex flex-row ml-5">-->
                <!--                <i class="fa-brands fa-product-hunt m-2"></i>-->
                <!--                <p class="m-2" style="font-size:14px;">Add Product</p>-->
                <!--            </div>-->
                <!--            <div class="d-flex flex-row ml-5">-->
                <!--                <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" fill="currentColor" class="bi bi-tags m-2" viewBox="0 0 16 16">-->
                <!--                    <path d="M3 2v4.586l7 7L14.586 9l-7-7H3zM2 2a1 1 0 0 1 1-1h4.586a1 1 0 0 1 .707.293l7 7a1 1 0 0 1 0 1.414l-4.586 4.586a1 1 0 0 1-1.414 0l-7-7A1 1 0 0 1 2 6.586V2z" />-->
                <!--                    <path d="M5.5 5a.5.5 0 1 1 0-1 .5.5 0 0 1 0 1zm0 1a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3zM1 7.086a1 1 0 0 0 .293.707L8.75 15.25l-.043.043a1 1 0 0 1-1.414 0l-7-7A1 1 0 0 1 0 7.586V3a1 1 0 0 1 1-1v5.086z" />-->
                <!--                </svg>-->
                <!--                <p class="m-2" style="font-size:14px;">Add Sales</p>-->
                <!--            </div>-->
                <!--            <div class="d-flex flex-row ml-5">-->
                <!--                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-handbag m-2" viewBox="0 0 16 16">-->
                <!--                    <path d="M8 1a2 2 0 0 1 2 2v2H6V3a2 2 0 0 1 2-2zm3 4V3a3 3 0 1 0-6 0v2H3.36a1.5 1.5 0 0 0-1.483 1.277L.85 13.13A2.5 2.5 0 0 0 3.322 16h9.355a2.5 2.5 0 0 0 2.473-2.87l-1.028-6.853A1.5 1.5 0 0 0 12.64 5H11zm-1 1v1.5a.5.5 0 0 0 1 0V6h1.639a.5.5 0 0 1 .494.426l1.028 6.851A1.5 1.5 0 0 1 12.678 15H3.322a1.5 1.5 0 0 1-1.483-1.723l1.028-6.851A.5.5 0 0 1 3.36 6H5v1.5a.5.5 0 1 0 1 0V6h4z" />-->
                <!--                </svg>-->
                <!--                <p class="m-2" style="font-size:14px;">Add Purchase</p>-->
                <!--            </div>-->
                <!--            <div class="d-flex flex-row ml-5">-->

                <!--                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-window m-2" viewBox="0 0 16 16">-->
                <!--                    <path d="M2.5 4a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1zm2-.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm1 .5a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1z" />-->
                <!--                    <path d="M2 1a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2H2zm13 2v2H1V3a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1zM2 14a1 1 0 0 1-1-1V6h14v7a1 1 0 0 1-1 1H2z" />-->
                <!--                </svg>-->
                <!--                <p class="m-2" style="font-size:14px;">Add Expense Category</p>-->
                <!--            </div>-->
                <!--            <div class="d-flex flex-row ml-5">-->
                <!--                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-explicit m-2" viewBox="0 0 16 16">-->
                <!--                    <path d="M6.826 10.88H10.5V12h-5V4.002h5v1.12H6.826V7.4h3.457v1.073H6.826v2.408Z" />-->
                <!--                    <path d="M2.5 0A2.5 2.5 0 0 0 0 2.5v11A2.5 2.5 0 0 0 2.5 16h11a2.5 2.5 0 0 0 2.5-2.5v-11A2.5 2.5 0 0 0 13.5 0h-11ZM1 2.5A1.5 1.5 0 0 1 2.5 1h11A1.5 1.5 0 0 1 15 2.5v11a1.5 1.5 0 0 1-1.5 1.5h-11A1.5 1.5 0 0 1 1 13.5v-11Z" />-->
                <!--                </svg>-->
                <!--                <p class="m-2" style="font-size:14px;">Add Expenses</p>-->
                <!--            </div>-->
                <!--            <div class="d-flex flex-row ml-5">-->
                <!--                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-currency-rupee m-2" viewBox="0 0 16 16">-->
                <!--                    <path d="M4 3.06h2.726c1.22 0 2.12.575 2.325 1.724H4v1.051h5.051C8.855 7.001 8 7.558 6.788 7.558H4v1.317L8.437 14h2.11L6.095 8.884h.855c2.316-.018 3.465-1.476 3.688-3.049H12V4.784h-1.345c-.08-.778-.357-1.335-.793-1.732H12V2H4v1.06Z" />-->
                <!--                </svg>-->
                <!--                <p class="m-2" style="font-size:14px;">Add Currency</p>-->
                <!--            </div>-->
                <!--            <div class="d-flex flex-row ml-5">-->
                <!--                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-cash-stack m-2" viewBox="0 0 16 16">-->
                <!--                    <path d="M1 3a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1H1zm7 8a2 2 0 1 0 0-4 2 2 0 0 0 0 4z" />-->
                <!--                    <path d="M0 5a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V5zm3 0a2 2 0 0 1-2 2v4a2 2 0 0 1 2 2h10a2 2 0 0 1 2-2V7a2 2 0 0 1-2-2H3z" />-->
                <!--                </svg>-->
                <!--                <p class="m-2" style="font-size:14px;">Add Warehouse</p>-->
                <!--            </div>-->
                <!--            <div class="d-flex flex-row ml-5">-->

                <!--                <i class="fa-solid fa-building-un m-2" style="font-size:18px;"></i>-->
                <!--                <p class="m-2" style="font-size:14px;">Add Unit</p>-->
                <!--            </div>-->
                <!--            <div class="d-flex flex-row ml-5">-->
                <!--                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-translate m-2" viewBox="0 0 16 16">-->
                <!--                    <path d="M4.545 6.714 4.11 8H3l1.862-5h1.284L8 8H6.833l-.435-1.286H4.545zm1.634-.736L5.5 3.956h-.049l-.679 2.022H6.18z" />-->
                <!--                    <path d="M0 2a2 2 0 0 1 2-2h7a2 2 0 0 1 2 2v3h3a2 2 0 0 1 2 2v7a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2v-3H2a2 2 0 0 1-2-2V2zm2-1a1 1 0 0 0-1 1v7a1 1 0 0 0 1 1h7a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H2zm7.138 9.995c.193.301.402.583.63.846-.748.575-1.673 1.001-2.768 1.292.178.217.451.635.555.867 1.125-.359 2.08-.844 2.886-1.494.777.665 1.739 1.165 2.93 1.472.133-.254.414-.673.629-.89-1.125-.253-2.057-.694-2.82-1.284.681-.747 1.222-1.651 1.621-2.757H14V8h-3v1.047h.765c-.318.844-.74 1.546-1.272 2.13a6.066 6.066 0 0 1-.415-.492 1.988 1.988 0 0 1-.94.31z" />-->
                <!--                </svg>-->
                <!--                <p class="m-2" style="font-size:14px;">Add Language</p>-->
                <!--            </div>-->
                <!--            <div class="d-flex flex-row ml-5">-->
                <!--                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person m-2" viewBox="0 0 16 16">-->
                <!--                    <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z" />-->
                <!--                </svg>-->
                <!--                <p class="m-2" style="font-size:14px;">Add Role</p>-->
                <!--            </div>-->
                <!--            <div class="d-flex flex-row ml-5">-->
                <!--                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-calendar2-plus m-2" viewBox="0 0 16 16">-->
                <!--                    <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM2 2a1 1 0 0 0-1 1v11a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1H2z" />-->
                <!--                    <path d="M2.5 4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H3a.5.5 0 0 1-.5-.5V4zM8 8a.5.5 0 0 1 .5.5V10H10a.5.5 0 0 1 0 1H8.5v1.5a.5.5 0 0 1-1 0V11H6a.5.5 0 0 1 0-1h1.5V8.5A.5.5 0 0 1 8 8z" />-->
                <!--                </svg>-->
                <!--                <p class="m-2" style="font-size:15px;">Add Tax</p>-->
                <!--            </div>-->
                <!--            <div class="d-flex flex-row ml-5">-->
                <!--                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-wallet2 m-2" viewBox="0 0 16 16">-->
                <!--                    <path d="M12.136.326A1.5 1.5 0 0 1 14 1.78V3h.5A1.5 1.5 0 0 1 16 4.5v9a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 13.5v-9a1.5 1.5 0 0 1 1.432-1.499L12.136.326zM5.562 3H13V1.78a.5.5 0 0 0-.621-.484L5.562 3zM1.5 4a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-13z" />-->
                <!--                </svg>-->
                <!--                <p class="m-2" style="font-size:14px;">Add Payment Mode</p>-->
                <!--            </div>-->
                <!--        </div>-->
                <!--    </div>-->
                <!--</div>-->
                <!--<select>-->
                <!--    <option>Electronifly</option>-->

                <!--</select>-->
                <!--<select>-->
                <!--    <option>en</option>-->
                <!--</select>-->
                <img style="height:40px;width:40px; border-radius:50%;" src="{{ asset('images/avatar-default.svg') }}" />

            </div>


        </div>
        <hr clas="shadow">

        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-md-6">
                    <h5>Categories</h5>
                </div>

                <div class="col-12 col-md-6" style="text-align: right;">
                  
                    <button type="button" class="btn btn-outline-info" data-toggle="modal" data-target="#exampleModalLong"> <i class="fa-thin fa-plus mr-2"></i> Add New Categories</button>
                    <!-- Button trigger modal -->

                    <!-- Modal -->
                    <form method="post" action="{{route('AddCategory')}}" enctype='multipart/form-data'>
                        @csrf
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
                                                    <label><span style="color:red;">* </span>Name</label>
                                                    <input type="text" id="CategoryName" name="name" placeholder="Enter the Name" class="form-control" style="background-color:whitesmoke;">
                                                    <p id="requiredName" class="required-class"></p>
                                                </div>
                                               

                                                <div class="col-12 ">
                                                    <p>Category Logo</p>
                                                    <div class="form-input">
                                                        <div class="preview">
                                                            <img id="file-ip-1-preview">
                                                        </div>
                                                        <label for="file-ip-1">Upload Image</label>
                                                        <input type="file" id="file-ip-1" accept="image/*" name="uploadImage" onchange="showPreview1(event);">
                                                    </div>
                                                </div>






                                            </div>



                                        </div>
                                    </div>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                    <button id="createButton"  class="btn btn-info" >Create</button>
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

       <!--  <div class="d-flex flex-row mb-3">
            <select class="ml-2">
                <option>Name</option>

            </select>
            <form class="example ml-2" style="max-width:250px">
                <input type="text" placeholder="Search.." name="search2">
                <button style="height:30px;"><i class="fa fa-search "></i></button>
            </form>

            <select class="ml-2 d-none">
                <option>Enabled</option>
                <option>Disabled</option>

            </select>
        </div> -->
@if(session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif
        <table id="brandsTable">
            <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Category Logo</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
               <?php  $i =1; ?>
            @foreach($Categories as $Category)
            <tr>
                
                <td>{{$i}}</td>
                <td> 
                {{$Category->name}}</td>
                <td><img height="35px" width="35px" src="{{asset('images/Category/logos/'. $Category->image)}}" /></td>
                <td>
                    <div onclick="DeleteCategory('{{$Category->id}}')" class="table-icon">
                        <i class="fa-solid fa-trash-can  mt-2" style="color:#ffffff; font-size:x-small;"></i>
                    </div>
                </td>
            </tr>
            <?php $i++; ?>
            @endforeach
            </tbody>
        </table>
    </div>
    <!--model-->
    <div class="modal fade" id="exampleModalCenter1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Edit Category</h5>
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
                                <p>Category Logo</p>
                                <div class="form-input">
                                    <div class="preview">
                                        <img id="file-ip-2-preview">
                                    </div>
                                    <label for="file-ip-2">Upload Image</label>
                                    <input name="updateImages" type="file" id="file-ip-2" accept="image/*" onchange="showPreview2(event);">

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
    function DeleteCategory(id) 
    {
         $.ajax({
            url : 'DeleteCategory',
            type : 'GET',
            data : {
                'id' : id,
            },
            dataType:'json',
            success : function(data) {   
              if(data === 1)
              {
                alert('Category Deleted Sucessfully');
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