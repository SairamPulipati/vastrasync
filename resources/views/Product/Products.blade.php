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
    <script src="https://kit.fontawesome.com/6b781c3f04.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.15.10/dist/css/uikit.min.css" />

    <!-- UIkit JS -->
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.15.10/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.15.10/dist/js/uikit-icons.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css" />
 <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
   <link rel="icon" type="image/x-icon" href="https://ssr.piniteinfosol.tk/saloon2/wp-content/uploads/2022/10/wedding__1_-removebg-preview-1.png">
  <title>Men's Wedding Studio</title>

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
                <img style="height:40px;width:40px; border-radius:50%;" src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460__340.png" />

            </div>


        </div>
        <hr clas="shadow">
        @if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-md-6">
                    <h5>Products</h5>
                </div>
                
                <div class="col-12 col-md-6" style="text-align: right;">
                    <a href="{{route('downloadallbarcodes')}}" class="btn btn-outline-info" > <i class="fa-thin fa-plus mr-2"></i> Barcode Download</a>
                    <button type="button" class="btn btn-outline-info" uk-toggle="target: #offcanvas-flip"> <i class="fa-thin fa-plus mr-2"></i> Add New Product</button>

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
                                             @if(\Auth::user()->role == 1)
                                                @foreach($Branches as $branch)
                                                                                        
                                                <option value="{{$branch->id}}" style="font-size:13px">{{$branch->name}}</option>
                                                @endforeach
                                                @else
                                                @foreach($Branches as $branch)
                                                @if($branch->id == \Auth::user()->branch)                              
                                                <option value="{{$branch->id}}" style="font-size:13px">{{$branch->name}}</option>
                                                @endif
                                                @endforeach
                                                @endif
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
        
        <table id="grandtotal">
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
                 
                <td onclick="window.location='{{route('productview',$product->id )}}'"> <img style="height:50px;width:40px;  padding:3px;" src="{{asset('images/products/logos/' . $product->image ?? '')}}" />{{$product->name}}</td>
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