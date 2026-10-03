
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous" />
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <link href="{{asset('css/sales.css')}}" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="{{asset('js/sales.js')}}"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" charset="utf-8"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/easy-pie-chart/2.1.6/jquery.easypiechart.min.js" charset="utf-8"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/easy-pie-chart/2.1.6/jquery.easypiechart.min.js" charset="utf-8"></script>
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
                    <h5>Sales</h5>
                </div>
                <div class="col-12 col-md-6" style="text-align: right;">
                    <div class="d-flex flex=row">

                    </div>

                </div>
            </div>
        </div>
        <hr>
        <div class="container mt-3">
            <div class="row">
                <div class="col-12 col-md-4 mt-2 mb-3">
                    <form class="example ml-2" style="max-width:250px">
                        <input type="text" placeholder="Search.." name="search2">
                        <button style="height:30px;"><i class="fa fa-search "></i></button>
                    </form>
                </div>
            </div>
         </div>
        <table id="allTable" class="salesTabel1">
            <tr>
                <th>No</th>
                <th>Sales Date</th>
                <th>Customer Name</th>
                <th>Price</th>
               <th>Items</th>
                <th>Action</th>
            </tr>
            <tr>
                <td>1</td>
                <td> 16-10-2022 08:21 pm</td>
                <td> <img style="height:30px;width:30px; border-radius:50%; padding:2px;" src="{{ asset('images/avatar-default.svg') }}" />Dach-Hintz</td>
               
                <td>
                     ₹978.00
                </td>
                <td>4</td>
                <td>
                    <div class="table-icon"  data-toggle="modal" data-target="#exampleModalCenter">
                        <i class="fa-sharp fa-solid fa-eye mt-2" style="color:#ffffff;"></i>

                    </div>
                </td>
            </tr>
            <tr>
                <td>2</td>
                <td> 16-10-2022 08:21 pm</td>
                <td> <img style="height:30px;width:30px; border-radius:50%; padding:2px;" src="{{ asset('images/avatar-default.svg') }}" />Dach-Hintz</td>
               
                <td>
                     ₹978.00
                </td>
                <td>4</td>
                <td>
                    <div class="table-icon"  data-toggle="modal" data-target="#exampleModalCenter">
                        <i class="fa-sharp fa-solid fa-eye mt-2" style="color:#ffffff;"></i>

                    </div>
                </td>
            </tr>
            <tr>
                <td>3</td>
                <td> 16-10-2022 08:21 pm</td>
                <td> <img style="height:30px;width:30px; border-radius:50%; padding:2px;" src="{{ asset('images/avatar-default.svg') }}" />Dach-Hintz</td>
               
                <td>
                     ₹978.00
                </td>
                <td>4</td>
                <td>
                    <div class="table-icon"  data-toggle="modal" data-target="#exampleModalCenter">
                        <i class="fa-sharp fa-solid fa-eye mt-2" style="color:#ffffff;"></i>

                    </div>
                </td>
            </tr>
            <tr>
                <td>4</td>
                <td> 16-10-2022 08:21 pm</td>
                <td> <img style="height:30px;width:30px; border-radius:50%; padding:2px;" src="{{ asset('images/avatar-default.svg') }}" />Dach-Hintz</td>
               
                <td>
                     ₹978.00
                </td>
                <td>4</td>
                <td>
                    <div class="table-icon" data-toggle="modal" data-target="#exampleModalCenter">
                        <i class="fa-sharp fa-solid fa-eye mt-2" style="color:#ffffff;"></i>

                    </div>
                </td>
            </tr>
        </table>
        <div class=" mt-2 mb-2 d-flex flex-row justify-content-end pagination mt-3">
            <a href="#">&laquo;</a>
            <a href="#">1</a>
            <a class="active" href="#">2</a>
            <a href="#">3</a>
            <a href="#">4</a>
            <a href="#">5</a>
            <a href="#">6</a>
            <a href="#">&raquo;</a>
        </div>
    </div>

    

  
  <!-- Modal -->
  <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Sales</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="container">
            <div class="row">
                <div class="col-12 col-md-6">
                    <p style="font-size:15px;"><span style="color:red;">* </span>Sales Date</p>
                    <p style="font-size:15px;">16-10-2022 08:21 pm</p>
                </div>
                <div class="col-12 col-md-6">
                    <p style="font-size:15px;"><span style="color:red;">* </span>Customer Name</p>
                    <p style="font-size:15px;">Dach-Hintz</p>
                </div>
                <div class="col-12 col-md-6">
                    <p style="font-size:15px;"><span style="color:red;">* </span>Price</p>
                    <p style="font-size:15px;">₹978.00</p>
                </div>
                <div class="col-12 col-md-6">
                    <p style="font-size:15px;"><span style="color:red;">* </span>	Items</p>
                    <p style="font-size:15px;">4</p>
                </div>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          
        </div>
      </div>
    </div>
  </div>

    <script>
        $("#fromDate").datepicker({
     format: 'dd-mm-yyyy',
     autoclose: true,
 }).on('changeDate', function (selected) {
     var minDate = new Date(selected.date.valueOf());
     $('#toDate').datepicker('setStartDate', minDate);
 });

 $("#toDate").datepicker({
     format: 'dd-mm-yyyy',
     autoclose: true,
 }).on('changeDate', function (selected) {
         var minDate = new Date(selected.date.valueOf());
         $('#fromDate').datepicker('setEndDate', minDate);
 });
  </script>
</body>

</html>