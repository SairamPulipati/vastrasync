<!DOCTYPE html>
<html>

<head>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
     <link rel="icon" type="image/x-icon" href="https://ssr.piniteinfosol.tk/saloon2/wp-content/uploads/2022/10/wedding__1_-removebg-preview-1.png">
  <title>Mens Wedding Studio</title>
    <style>
        .container1 {
    width: 192px;
    height: 85px;
    margin: 0px;
    
 
    margin-bottom: 11px;
    padding: 10px;
    border-radius: 10px;
}

.bg-container {
    margin-left: 15px;
    padding-right: 14px;
    padding-left: 14px;
    width: 413px;
}

.price {
    width: 100%;
    height: 100%;
    margin: 0px;
    padding: 0px;
}

.product {
    font-weight: bold;
    font-size: 13px;
}

.price-text {
    writing-mode: vertical-rl;
    font-weight: bolder;
    font-size: 13px;
}

.barcodeDiv {
    width: 100%;
    height: 100%;
}


@media print
{    
    .no-print, .no-print *
    {
        display: none !important;
    }
}
.btn-primary,.btn-primary:hover,.btn:visited,btn:focused  {

    background-color: #2e2e2e;
    border-color: #2e2e2e;
}

    </style>
</head>

<body>
    <div class="bg-container container">
        <div class="row">
             @foreach($Barcodeinfo as $barcode)
            <div class="col-6">
                <div class="container1">
                    <div class="d-flex flex-row price mt-1">
                        
                        <div class="barcodeDiv">
                       
                            <div class="product">{{$barcode->name}}.-{{$barcode->productSize}} -  <span style="font-size:13px;">₹{{$barcode->price}}:00</span></div>
                            <div>{!! DNS1D::getBarcodeHTML("$barcode->barcode", 'I25',2.0,28) !!}</div>
                            <div style="font-size:10px; letter-spacing:9px;  margin-top:0px;">{{$barcode->barcode}}</div>
                        </div>
                    </div>
                </div>
            </div>
          @endforeach
        </div>
       <div class="d-flex flex-row my-2">
       <div class="p-2"></div>
       <div class="p-2">
           <button class="btn btn-primary no-print" onclick="window.print()">Print</button>
       </div>
       <div class="p-2"></div>
   </div>
       
   
   
    </div>
</body>

</html>