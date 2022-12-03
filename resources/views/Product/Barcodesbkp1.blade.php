<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	

<link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
<script src="https://cdn.tailwindcss.com"></script>

<style>

    @page { size: 10.16cm 20cm ; 
    margin-left:5px;
    }
    .barcodes{
        margin-left:5px;
        margin-right:5px;
    }
 </style>
</head>
<body>
    
<div class="grid grid-cols-2">
    <div>
        @foreach($Barcodeinfo as $barcode)
        <div class="barcodes">{{$barcode->price}}/-</div>
        
                    <div class="barcodes" style="font-size:14px">{{$barcode->name}} {{$barcode->productSize}}</div>
                    <div class="barcodes">{!! DNS1D::getBarcodeHTML("$barcode->barcode", 'I25',1.5,22) !!}</div>
                    <div class="barcodes" style="font-size:14px">{{$barcode->barcode}}</div>
                     
    </div>
    <div>     
</br>

@endforeach
</body>
</html>

