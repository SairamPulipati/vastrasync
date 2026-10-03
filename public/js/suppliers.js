function toggleNav() {
    var sidebar = document.getElementById("mySidebar");
    var main = document.getElementById("main");
    var overlay = document.getElementById("sidebarOverlay");
    if (!sidebar) return;

    sidebar.style.removeProperty("width");
    if (main) main.style.removeProperty("margin-left");

    var isMobile = window.innerWidth < 992;
    if (isMobile) {
        var isOpen = sidebar.classList.toggle("sidebar-open");
        if (overlay) {
            if (isOpen) {
                overlay.classList.add("active");
            } else {
                overlay.classList.remove("active");
            }
        }
    } else {
        sidebar.classList.toggle("sidebar-closed");
        if (main) {
            main.classList.toggle("main-expanded");
        }
    }
}

function openNav() {
    toggleNav();
}

function closeNav() {
    var sidebar = document.getElementById("mySidebar");
    var main = document.getElementById("main");
    var overlay = document.getElementById("sidebarOverlay");
    if (!sidebar) return;

    sidebar.style.removeProperty("width");
    if (main) main.style.removeProperty("margin-left");

    var isMobile = window.innerWidth < 992;
    if (isMobile) {
        sidebar.classList.remove("sidebar-open");
        if (overlay) overlay.classList.remove("active");
    } else {
        sidebar.classList.add("sidebar-closed");
        if (main) main.classList.add("main-expanded");
    }
}
let createButtonEl=document.getElementById("createButton");
let requiredEl = document.getElementById("requiredName");
let newCustomerNameEl=document.getElementById("newCustomerName");
let newCustomerPhoneEl=document.getElementById("newCustomerPhone");
let newCustomerEmailEl=document.getElementById("newCustomerEmail");
function myFunction(){
  if(newCustomerName.value===""){
    document.getElementById("requiredName").innerHTML = "*Required";
    newCustomerName.style.borderColor = "red";
  }
  if(newCustomerPhone.value===""){
    document.getElementById("requiredPhone").innerHTML = "*Required";
    newCustomerPhone.style.borderColor = "red";
  }
  if(newCustomerEmail.value===""){
    
    document.getElementById("requiredEmail").innerHTML = "*Required";
    newCustomerEmail.style.borderColor = "red";
  }
  if(newCustomerName.value==="" || newCustomerPhone.value==="" || newCustomerEmail.value===""){
    UIkit.notification({message: 'Please Fix Bellow Errors', status: 'danger',pos:"top-left"})
   
  }
  if(newCustomerName.value !="" && newCustomerPhone.value !="" && newCustomerEmail.value != ""){
   UIkit.notification({message: '<span uk-icon=\'icon: check\'></span> Customer Created Successfully',pos:"top-left",status: 'success'})
   newCustomerName.style.borderColor = "green";
   newCustomerPhone.style.borderColor = "green";
   newCustomerEmail.style.borderColor = "green";
   
  }
  if(newCustomerName.value !=""){
    newCustomerName.style.borderColor = "green";
    document.getElementById("requiredName").innerHTML = "";
  }
  if(newCustomerPhone.value !=""){
    newCustomerPhone.style.borderColor = "green";
    document.getElementById("requiredPhone").innerHTML = "";
  }
  if(newCustomerEmail.value !=""){
    newCustomerEmail.style.borderColor = "green";
    document.getElementById("requiredEmail").innerHTML = "";
  }
}
function openCity(evt, cityName) {
  var i, salesTabel1, sales;
  salesTabel1 = document.getElementsByClassName("salesTabel1");
  for (i = 0; i < salesTabel1.length; i++) {
    salesTabel1[i].style.display = "none";
  }
  sales = document.getElementsByClassName("sales");
  for (i = 0; i < sales.length; i++) {
    sales[i].className = sales[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "inline-table";
  evt.currentTarget.className += " active";
}
// Get production API keys from Upload.io

$(document).ready(function(){
  $("#allTable").on('click', '.btnDelete', function() {
    $(this).closest('tr').remove();
    UIkit.notification({message: '<span uk-icon=\'icon: check\'></span>Customer Deleted Successfully', status: 'success', pos: 'bottom-right'})
    
});
$("#toCollectTable").on('click', '.btnDeleteToCollect', function() {
  $(this).closest('tr').remove();
  UIkit.notification({message: '<span uk-icon=\'icon: check\'></span>Customer Deleted Successfully', status: 'success', pos: 'bottom-right'})
  
});
$("#toPayTable").on('click', '.btnDeletetoPayTable', function() {
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