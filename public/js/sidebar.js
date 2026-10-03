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
    if (main) main.style.marginLeft = "0px";
}
  function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("salesTabel1");
    for (i = 0; i < tabcontent.length; i++) {
      tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
  }
  $(document).ready(function(){
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
 