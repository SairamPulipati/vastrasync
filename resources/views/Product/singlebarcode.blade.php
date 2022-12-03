<!DOCTYPE html>
<html>
  <head>
       <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
       </head>
       <style>
   
         
  @page { size: 413px 85px;} 
.container {
    width: 192px;
    height: 85px;
 
    margin: 0px;

    margin-bottom: 11px;
    padding: 5px;
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
    font-size: 10px;
}

.price-text {
    /*margin-top:10px;*/
    writing-mode: vertical-rl;

    font-size: 13px;
}

.barcodeDiv {
    width: 100%;
    height: 100%;
}

.container2 {
    margin-left: 2px;
}
       </style>
  <body>
    
      <div class="d-flex flex-row bg-container">
          
          <div class="d-flex flex-column">
               @foreach($Barcodeinfo as $barcode)
                  <div class="container container2">
                    <div class="d-flex flex-row price mt-1">
                        <div class="price-text">₹{{$barcode->price}}.00</div>
                        <div class="barcodeDiv">
                            <div class="product">{{$barcode->name}}.-{{$barcode->productSize}}</div>
                            <div class="my-1">{!! DNS1D::getBarcodeHTML("$barcode->barcode", 'I25',1.5,22) !!}</div>
                            <div style="font-size:10px; letter-spacing:7px;">{{$barcode->barcode}}</div>
                        </div>
                    </div>
                </div>
            @endforeach
          </div>
           <div class="d-flex flex-column">
            @foreach($Barcodeinfo as $barcode)
                  <div class="container container2 ">
                    <div class="d-flex flex-row price mt-1">
                        <div class="price-text">₹{{$barcode->price}}.00</div>
                        <div class="barcodeDiv">
                            <div class="product">{{$barcode->name}}.-{{$barcode->productSize}}</div>
                            <div class="my-1">{!! DNS1D::getBarcodeHTML("$barcode->barcode", 'I25',1.5,22) !!}</div>
                            <div style="font-size:10px;letter-spacing:7px; ">{{$barcode->barcode}}</div>
                        </div>
                    </div>
                </div>           
                @endforeach
                

          </div>
      </div>
  
  </body>
</html>

