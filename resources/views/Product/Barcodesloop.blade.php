<!DOCTYPE html>
<html>

<head>
    <meta charset="uft-8">
    <title>Page Title</title>
    <script src="https://cdn.jsdelivr.net/npm/jsbarcode@3.11.5/dist/JsBarcode.all.min.js"></script>
</head>

<body>
    
    <?php
    foreach($Barcodeinfo as $barcode)
    {
    ?>
    <svg id="code128"></svg>
    <script>
        let a = <?php echo $barcode->barcode; ?>
        </script>
    <?php
    }
    ?>
    
    <script>
        JsBarcode("#code128", a);
    </script>
</body>

</html>