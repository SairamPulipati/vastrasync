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
 
  <table id="customizedproductsTable">
      <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Products</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
               @foreach($Products as $product)
            <tr>
                <td>{{$product->customizeid}}</td>
                <td>{{$product->name}}</td>
                <td><img height="35px" width="35px" src="{{asset('images/Customizedproducts/logos/'. $product->image)}}" /></td>
                <td>
                    <div  onclick="deletecustomizedproducts('{{$product->id}}')" class="table-icon  ">
                        <i class="fa-solid fa-trash-can mt-2" style="color:#ffffff; font-size:x-small;"></i>
                    </div>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
</div>
<script type="text/javascript">
 function deletecustomizedproducts(id)
    {
        $.ajax({
            url : 'deletecustomizedproducts',
            type : 'GET',
            data : {
                'id' : id,
            },
            dataType:'json',
            success : function(data) {   
              if(data === 1)
              {
                alert('deletecustomizedproducts Deleted Sucessfully');
                $("#customizedproductsTable").load(window.location + " #customizedproductsTable");
                
              }             
            },
            error : function(request,error)
            {

            }
        });
    }
            $(document).ready(function () {
    $('#customizedproductsTable').DataTable();
});
 
</script>
</body>
</html>