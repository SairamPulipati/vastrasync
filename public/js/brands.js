function openNav() {
    document.getElementById("mySidebar").style.width = "245px";
    document.getElementById("main").style.marginLeft = "250px";
    
  }
  function closeNav() {
    document.getElementById("mySidebar").style.width = "0";
    document.getElementById("main").style.marginLeft= "0";
  }
  let createButtonEl=document.getElementById("createButton");
  let requiredEl = document.getElementById("requiredName");
  let newCustomerNameEl=document.getElementById("newCustomerName");
  let newCustomerPhoneEl=document.getElementById("newCustomerPhone");
  let newCustomerEmailEl=document.getElementById("bradSlug");
  
  function myFunction(){
    if(newCustomerName.value===""){
      document.getElementById("requiredName").innerHTML = "*Required";

    }
   
   
   
    
  }
  
    
  
  // Get production API keys from Upload.io

  $(document).ready(function(){
    $("#brandsTable").on('click','.btnDelete',function(){
        $(this).closest('tr').remove();
        UIkit.notification({message: '<span uk-icon=\'icon: check\'></span>Customer Deleted Successfully', status: 'success', pos: 'bottom-right'})
     });
    $("#dashboardId").click(function(){
        $(".hide").toggle("slow");
        $("#downIcon").toggleClass("arrow-rotate")

       
    });
    $("#hrmsystemId").click(function(){
      $(".hide1").toggle("slow");
      $("#downIcon1").toggleClass("arrow-rotate")

     
  });
  
  $("#accountingSystemId").click(function(){
    $(".hide2").toggle("slow");
    $("#downIcon2").toggleClass("arrow-rotate")
   
});
$("#crmSystemId").click(function(){
  $(".hide3").toggle("slow");
  $("#downIcon3").toggleClass("arrow-rotate")
 
});
$("#productManagementId").click(function(){
  $(".hide6").toggle("slow");
  $("#downIcon11").toggleClass("arrow-rotate")
 
});
$("#userManagementId").click(function(){
  $(".hide5").toggle("slow");
  $("#downIcon4").toggleClass("arrow-rotate")
 
});

$("#posSystemId").click(function(){
  $(".hide7").toggle("slow");
  $("#downIcon9").toggleClass("arrow-rotate")
 
});
$(function() {
  $('.chart').easyPieChart({
      size: 160,
      barColor: "darkslateblue",
      scaleLength: 0,
      lineWidth: 15,
      trackColor: "whitesmoke",
      lineCap: "circle",
      animate: 2000,
  });
});
  });
  function showPreview(event){
    if(event.target.files.length > 0){
      var src = URL.createObjectURL(event.target.files[0]);
      var preview = document.getElementById("file-ip-1-preview");
      preview.src = src;
      preview.style.display = "block";
    }
  }
  function showPreview2(event){
    if(event.target.files.length > 0){
      var src = URL.createObjectURL(event.target.files[0]);
      var preview = document.getElementById("file-ip-2-preview");
      preview.src = src;
      preview.style.display = "block";
    }
  }
  var modal = document.getElementById('id01');

  // When the user clicks anywhere outside of the modal, close it
  window.onclick = function(event) {
    if (event.target == modal) {
      modal.style.display = "none";
    }
  }

  