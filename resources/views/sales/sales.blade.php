<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous" />
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <link href="{{asset('css/sales1.css')}}" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="{{asset('js/sales1.js')}}"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" charset="utf-8"></script>
     <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css" />
 <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.2/moment.min.js"></script>
<script src="https://cdn.datatables.net/datetime/1.2.0/js/dataTables.dateTime.min.js"></script>
 <link rel="icon" type="image/svg+xml" href="{{ asset('images/favicon.svg') }}">
 <title>Men's Wedding Studio</title>
    <link rel="stylesheet" href="{{ asset('css/modern-theme.css') }}">
</head>
<body>
   @include('Admin.sidebarmenu')
    <div id="main">
        @include('Admin.topnavbar')
        
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-md-6">
                    
                    <h5 class="p-2">Sales</h5>
                </div>
                <div class="col-12 col-md-6">
                  <div class="d-flex justify-content-end">
                      <div class="p-2">
                          <input type="date" id="datefrom" class="form-control-sm">
                      </div>
                      <div class="p-2">
                           <input type="date" id="dateto" class="form-control-sm">
                      </div>
                      <div class="p-2">
                          <input onclick="Submit()" type="submit">
                      </div>
                  </div>
              </div>
                <!--<div class="col-12 col-md-6" style="text-align: right;">-->
                   
                   
                    <!-- Button trigger modal -->

                    <!-- Modal -->
                  
                    <!--<div class="d-flex flex=row">-->

                    <!--</div>-->


               
                <!--</div>-->
            </div>
        </div>
        <hr>
        <!--<div class="container mt-3">-->
        <!--    <div class="row">-->
        <!--        <div class="col-12 col-md-4 mt-2 mb-3">-->
                    
        <!--                <input type="text" id="myInput" onkeyup="myFunction1()" placeholder="Search.." class="form-control" style="background-color:whitesmoke;" name="search2">-->
                        
                         
                
        <!--        </div>-->
        <!--       <div class="col-12 col-md-4 mt-2 mb-3">-->
        <!--           <input type="date" class="form-control" id="searchFrom" data-date-split-input="true">-->
        <!--           </div>-->
        <!--           <div class="col-12 col-md-4 mt-2 mb-3">-->
        <!--           <input type="date" class="form-control" id="searchTo" data-date-split-input="true">-->
        <!--           </div>-->
                

        <!--    </div>-->
        <!-- </div>-->
      
       
  
           
           
          <table id="allTable" class="salesTabel1">
            <thead>
                <tr>
               <th>No</th>
                <th>Sales Date</th>
                <th>Transciation Id</th>
                <th>Customer Name</th>
                <th>Price</th>
               <th>Items</th>
                <th>Details</th>
            </tr>
            </thead>
            <tbody>
            <?php  $i =1; ?>
            @foreach($Sales as $sale)
            <tr>
                <td>
                    {{$i}}</td>
                <td>{{$sale->created_at}}</td>
                <td>{{$sale->transcationid}}</td>
                <td> {{$sale->customerdetails->name ?? ''}}</td>
                <td>
                   {{$sale->totalpurchase}}
                </td>
                <td>{{count($sale->purchasedetails)}}</td>
                 <td>
                    <a href="{{route('singletranscitiondetails', $sale->transcationid)}}">
                    <div class="table-icon " data-toggle="modal">
                        <i class="fa-sharp fa-solid fa-eye mt-2" style="color:#ffffff; font-size:smaller;"></i>
                    </div>
                </td>
            </tr>
              <?php $i++; ?>
            @endforeach
         
            </tbody>
        </table>
    </div>
  <script>
$(document).ready(function () {
    $('#allTable').DataTable();
});
</script>
 
</body>

</html>
<script>
    function Submit()
    {
        var fromdate = $('#datefrom').val();
        var todate = $('#dateto').val();
        if(fromdate == '')
        {
            alert('please enter date');
            
        }
        window.location.href= "{{route('dailysales')}}" +"/"+fromdate +"/"+todate;
;
        
    }
</script>