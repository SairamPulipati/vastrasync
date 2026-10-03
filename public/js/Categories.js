function openNav() {
    var sidebar = document.getElementById("mySidebar");
    var main = document.getElementById("main");
    if (!sidebar) return;

    var currentWidth = sidebar.style.width || window.getComputedStyle(sidebar).width;
    if (currentWidth === "0px" || sidebar.classList.contains("sidebar-collapsed")) {
        sidebar.style.width = "260px";
        if (main) main.style.marginLeft = "260px";
        sidebar.classList.remove("sidebar-collapsed");
    } else {
        sidebar.style.width = "0px";
        if (main) main.style.marginLeft = "0px";
        sidebar.classList.add("sidebar-collapsed");
    }
}

function closeNav() {
    var sidebar = document.getElementById("mySidebar");
    var main = document.getElementById("main");
    if (sidebar) {
        sidebar.style.width = "0px";
        sidebar.classList.add("sidebar-collapsed");
    }
    if (main) main.style.marginLeft = "0px";
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
     });
    $("#dashboardId").click(function(){
        $(".hide").toggle("slow");
        $("#downIcon").toggleClass("arrow-rotate")
    });
   $("#plusIcon").click(function(){
        $(".table-row-hide").toggle();
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
  function showPreview1(event){
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
      var preview1 = document.getElementById("file-ip-2-preview");
      preview1.src = src;
      preview1.style.display = "block";
    }
  }
  

  