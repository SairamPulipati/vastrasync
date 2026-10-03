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
        @if(\Auth::user()->role == 1)
<div class="row">
    <div class="col-4"></div>
    <div class="col-4">
        
          <div class="category-filter">
      <select id="categoryFilter" onchange="window.location.href=this.options[this.selectedIndex].value;"  class="form-control-sm">
          <option  value="1" style="font-size:13px">Select one</option>
          @foreach($Branchnames as $Branchname)
<option  value="{{ route('stock', $Branchname->id) }}" style="font-size:13px">{{$Branchname->name}}</option>
        @endforeach
      </select>
    </div>

    </div>
    <div class="col-4"></div>
</div>
@endif
     
        <table id="brandsTable">
            <thead>
            <tr>
                <th>#</th>
                <th>Product Image</th>
                <th>Product Name</th>
                 <th>Product Branch</th>
                <th>Product Price</th>
                <th>No.Of Products Purchased</th>
                <th>No.Of Products Sold</th>
                <th>No.Of Products Available</th>
            </tr>
            </thead>
            <tbody>
            @foreach($Products as $Stock)
            <tr>
                <td>{{$Stock->id}}</td>
                @if($Stock->type == "readymade")
                <td>
                    @if(!empty($Stock->image) && file_exists(public_path('images/products/logos/' . $Stock->image)))
                        <img style="height:38px; width:38px; object-fit:cover; border-radius:6px; border:1px solid #e2e8f0;" src="{{asset('images/products/logos/' . $Stock->image)}}" alt="{{ $Stock->name }}" />
                    @else
                        <img style="height:38px; width:38px; object-fit:cover; border-radius:6px; border:1px solid #e2e8f0;" src="{{asset('images/product-placeholder.svg')}}" alt="{{ $Stock->name }}" />
                    @endif
                </td>
                @else
                <td>
                    @if(!empty($Stock->image) && file_exists(public_path('images/Customizedproducts/logos/' . $Stock->image)))
                        <img style="height:38px; width:38px; object-fit:cover; border-radius:6px; border:1px solid #e2e8f0;" src="{{asset('images/Customizedproducts/logos/' . $Stock->image)}}" alt="{{ $Stock->name }}" />
                    @else
                        <img style="height:38px; width:38px; object-fit:cover; border-radius:6px; border:1px solid #e2e8f0;" src="{{asset('images/product-placeholder.svg')}}" alt="{{ $Stock->name }}" />
                    @endif
                </td>
                @endif
                    <td>{{$Stock->name}}</td>
                    <?php
                        $Branchdetails = \DB::table('branches')->where('id', $Stock->branch)->select('id', 'name')->first();
                        ?>
                    <td>{{$Branchdetails->name ?? ''}}<br>
                       
                        </td>
                <td>₹{{$Stock->price}}</td>

                <td>{{$Stock->purchasedetails[0]->quantity ?? 'Not Avaliable'}}</td>
                <?php
                    $saled = \DB::table('purchasedata')->where('product_id', $Stock->id)->sum('quantity');
                ?>
                <td>{{$saled ?? 'Not Avaliable'}}</td>
                <td>{{$Stock->unit ?? 'Not Avaliable'}}</td>
            </tr>
            @endforeach
           </tbody>

        </table>


        
       

    </div>
    <!--model-->
   
<script>
        $(document).ready(function () {
    $('#brandsTable').DataTable();
});
</script>

</body>

</html>