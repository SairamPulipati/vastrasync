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
  let newCustomerEmailEl=document.getElementById("newCustomerEmail");
  
  function myFunction(){
    if(newCustomerName.value===""){
      document.getElementById("requiredName").innerHTML = "*Required";

    }
    if(newCustomerPhone.value===""){
      
      document.getElementById("requiredPhone").innerHTML = "*Required";
    }
    if(newCustomerEmail.value===""){
      
      document.getElementById("requiredEmail").innerHTML = "*Required";
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
    $("#allTable").on('click','.btnDelete',function(){
        $(this).closest('tr').remove();
     });
     
     $("#toPayTable").on('click','.btnDelete',function(){
        $(this).closest('tr').remove();
     }); 
     $("#toCollectTable").on('click','.btnDelete',function(){
        $(this).closest('tr').remove();
     })
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
  function dropDown() {
    document.getElementById("myDropdown").classList.toggle("show");
  }
  
  function filterFunction() {
    var input, filter, ul, li, a, i;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    div = document.getElementById("myDropdown");
    a = div.getElementsByTagName("a");
    for (i = 0; i < a.length; i++) {
      txtValue = a[i].textContent || a[i].innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        a[i].style.display = "";
      } else {
        a[i].style.display = "none";
      }
    }
  }
  let helloEl=document.getElementById("hello0")
  let plusIconInTable=document.getElementById("plusIconInTable")
  plusIconInTable.addEventListener("click",function(){
    helloEl.style.display="none"

  })

  