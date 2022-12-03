$(document).ready(function(){
    $("#billingTable").on('click','.btnDelete',function(){
        $(this).closest('tr').remove();
     });
    })