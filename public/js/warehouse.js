function openNav() {
    document.getElementById("mySidebar").style.width = "245px";
    document.getElementById("main").style.marginLeft = "250px";
  }
  function closeNav() {
    document.getElementById("mySidebar").style.width = "0";
    document.getElementById("main").style.marginLeft = "0";
  }
  let createButtonEl = document.getElementById("createButton");
  let requiredEl = document.getElementById("requiredName");
  let newCustomerNameEl = document.getElementById("newCustomerName");
  let newCustomerPhoneEl = document.getElementById("newCustomerPhone");
  let newCustomerEmailEl = document.getElementById("newCustomerEmail");
  function myFunction() {
    if (newCustomerName.value === "") {
        document.getElementById("requiredName").innerHTML = "*Required";
        newCustomerName.style.borderColor = "red";
    }
    if (newCustomerPhone.value === "") {
        document.getElementById("requiredPhone").innerHTML = "*Required";
        newCustomerPhone.style.borderColor = "red";
    }
    if (newCustomerEmail.value === "") {
        document.getElementById("requiredEmail").innerHTML = "*Required";
        newCustomerEmail.style.borderColor = "red";
    }
    if (newCustomerName.value === "" || newCustomerPhone.value === "" || newCustomerEmail.value === "") {
        UIkit.notification({
            message: 'Please Fix Bellow Errors',
            status: 'danger',
            pos: "top-left"
        })
    }
    if (newCustomerName.value != "" && newCustomerPhone.value != "" && newCustomerEmail.value != "") {
        let productName = newCustomerName.value
        let tabelEmail = newCustomerEmail.value
        let openingBalanceIdEl = document.getElementById("openingBalanceId").value
        UIkit.notification({
            message: '<span uk-icon=\'icon: check\'></span> Customer Created Successfully',
            pos: "top-left",
            status: 'success'
        })
        newCustomerName.style.borderColor = "green";
        newCustomerPhone.style.borderColor = "green";
        newCustomerEmail.style.borderColor = "green";
        var table = document.getElementById("allTable");
        let toCollectTableEl=document.getElementById("toCollectTable");
        let image = document.createElement("img")
        const date = new Date().toJSON().slice(0, 10);
        image.src = "https://thumbs.dreamstime.com/b/beautiful-rain-forest-ang-ka-nature-trail-doi-inthanon-national-park-thailand-36703721.jpg"
        image.style.height = "30px";
        image.style.width = "30px";
        let userCreatedListEl1 = document.querySelector('#paymentMethod');
        let outputuserCreatedListEl1 = userCreatedListEl1.value;
        console.log(outputuserCreatedListEl1)
        let userCreatedListEl = document.querySelector('#userCreatedList');
        let outputuserCreatedListEl = userCreatedListEl.value;
        var row = table.insertRow(1);
        var cell1 = row.insertCell(0);
        var cell2 = row.insertCell(1);
        var cell3 = row.insertCell(2);
        var cell4 = row.insertCell(3);
        var cell5 = row.insertCell(4);
        var cell6 = row.insertCell(5);
        cell1.innerHTML = `<h6  style=font-size:13px;>${productName}</h6>`
        cell2.innerHTML = `<h6>${tabelEmail}</h6>`
        cell3.innerHTML = `<h6>${date }</h6>`
        cell4.innerHTML = `<h6>₹${openingBalanceIdEl}</h6>`
        if (outputuserCreatedListEl=== "Enabled"){
          cell5.innerHTML = `<button type="button" class="btn btn-outline-success">Enabled</button>`
        }
        else{
          cell5.innerHTML = `<button type="button" class="btn btn-outline-danger">Disabled</button>`
        }
        cell6.innerHTML = ` <div class="table-icon" data-toggle="modal" data-target="#exampleModalLong01">
   <i class="fa-sharp fa-solid fa-eye mt-2" style="color:#ffffff; font-size:smaller;"></i>
  </div>
  <div class="table-icon"  data-toggle="modal" data-target="#exampleModalLong4">
   <i class="fa-solid fa-pencil mt-2" style="color:#ffffff; font-size:smaller;"></i>
  </div>
  <div class="table-icon btnDelete">
   <i class="fa-solid fa-trash-can mt-2" style="color:#ffffff; font-size:smaller;"></i>
  </div>`
  var toCollectrow =toCollectTableEl.insertRow(1);
        var cell7 = toCollectrow.insertCell(0);
        var cell8 = toCollectrow.insertCell(1);
        var cell9 = toCollectrow.insertCell(2);
        var cell10 = toCollectrow.insertCell(3);
        var cell11 = toCollectrow.insertCell(4);
        var cell12 = toCollectrow.insertCell(5);
        cell7.innerHTML = `<h6  style=font-size:13px;>${productName}</h6>`
        cell8.innerHTML = `<h6>${tabelEmail}</h6>`
        cell9.innerHTML = `<h6>${date }</h6>`
        cell10.innerHTML = `<h6>₹${openingBalanceIdEl}</h6>`
        if (outputuserCreatedListEl=== "Enabled"){
          cell11.innerHTML = `<button type="button" class="btn btn-outline-success">Enabled</button>`
        }
        else{
          cell11.innerHTML = `<button type="button" class="btn btn-outline-danger">Disabled</button>`
        }
        cell12.innerHTML = ` <div class="table-icon" data-toggle="modal" data-target="#exampleModalLong01">
   <i class="fa-sharp fa-solid fa-eye mt-2" style="color:#ffffff; font-size:smaller;"></i>
  </div>
  <div class="table-icon"  data-toggle="modal" data-target="#exampleModalLong4">
   <i class="fa-solid fa-pencil mt-2" style="color:#ffffff; font-size:smaller;"></i>
  </div>
  <div class="table-icon btnDelete">
   <i class="fa-solid fa-trash-can mt-2" style="color:#ffffff; font-size:smaller;"></i>
  </div>`
    }
    if (newCustomerName.value != "") {
        newCustomerName.style.borderColor = "green";
        document.getElementById("requiredName").innerHTML = "";
    }
    if (newCustomerPhone.value != "") {
        newCustomerPhone.style.borderColor = "green";
        document.getElementById("requiredPhone").innerHTML = "";
    }
    if (newCustomerEmail.value != "") {
        newCustomerEmail.style.borderColor = "green";
        document.getElementById("requiredEmail").innerHTML = "";
    }
  }
  function myFunction1() {
  //rn = window.prompt("Input the Row number(0,1,2)", "0");
  //cn = window.prompt("Input the Column number(0,1)","0");
  //content = window.prompt("Input the Cell content");  
    if (newCustomerNameUpdate.value === "") {
        document.getElementById("requiredNameUpdate").innerHTML = "*Required";
        newCustomerNameUpdate.style.borderColor = "red";
    }
    if (newCustomerPhoneUpdate.value === "") {
        document.getElementById("requiredPhoneUpdate").innerHTML = "*Required";
        newCustomerPhoneUpdate.style.borderColor = "red";
    }
    if (newCustomerEmailUpdate.value === "") {
        document.getElementById("requiredEmailUpdate").innerHTML = "*Required";
        newCustomerEmailUpdate.style.borderColor = "red";
    }
    if (newCustomerNameUpdate.value === "" || newCustomerPhoneUpdate.value === "" || newCustomerEmailUpdate.value === "") {
        UIkit.notification({
            message: 'Please Fix Bellow Errors',
            status: 'danger',
            pos: "top-left"
        })
    }
    if (newCustomerNameUpdate.value != "" && newCustomerPhoneUpdate.value != "" && newCustomerEmailUpdate.value != "") {
      let selectElement = document.querySelector('#selectedOptionDropdown');
        output = selectElement.value;
        console.log(output)
        let productNameUpdate = newCustomerNameUpdate.value
        let tabelEmailUpdate = newCustomerEmailUpdate.value
        const Updateddate = new Date().toJSON().slice(0, 10);
        let openingBalanceIdElUpdate = document.getElementById("openingBalanceIdUpdate").value
        var x=document.getElementById('allTable').rows[3].cells;
        x[0].innerHTML=`<h6  style=font-size:13px;>${productNameUpdate}</h6>`
        x[1].innerHTML=`<h6>${tabelEmailUpdate}</h6>`
        x[2].innerHTML=`<h6>${Updateddate}</h6>`
        x[3].innerHTML=`<h6>₹${openingBalanceIdElUpdate}</h6>`
        if(output === "Enabled"){
          x[4].innerHTML=`<button class="btn btn-outline-success" >${output}</button>`
        }
        else{
          x[4].innerHTML=`<button class="btn btn-outline-danger" >${output}</button>`
        }
        var y=document.getElementById('toCollectTable').rows[3].cells;
        y[0].innerHTML=`<h6  style=font-size:13px;>${productNameUpdate}</h6>`
        y[1].innerHTML=`<h6>${tabelEmailUpdate}</h6>`
        y[2].innerHTML=`<h6>${Updateddate}</h6>`
        y[3].innerHTML=`<h6>₹${openingBalanceIdElUpdate}</h6>`
        if(output === "Enabled"){
          x[4].innerHTML=`<button class="btn btn-outline-success" >${output}</button>`
        }
        else{
          x[4].innerHTML=`<button class="btn btn-outline-danger" >${output}</button>`
        } 
        UIkit.notification({
            message: '<span uk-icon=\'icon: check\'></span> Customer Updated Successfully',
            pos: "top-left",
            status: 'success'
        })
        newCustomerNameUpdate.style.borderColor = "green";
        newCustomerPhoneUpdate.style.borderColor = "green";
        newCustomerEmailUpdate.style.borderColor = "green";
    }
    if (newCustomerNameUpdate.value != "") {
        newCustomerNameUpdate.style.borderColor = "green";
        document.getElementById("requiredNameUpdate").innerHTML = "";
    }
    if (newCustomerPhoneUpdate.value != "") {
        newCustomerPhoneUpdate.style.borderColor = "green";
        document.getElementById("requiredPhoneUpdate").innerHTML = "";
    }
    if (newCustomerEmailUpdate.value != "") {
        newCustomerEmailUpdate.style.borderColor = "green";
        document.getElementById("requiredEmailUpdate").innerHTML = "";
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
  $(document).ready(function() {
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
    $("#dashboardId").click(function() {
        $(".hide").toggle("slow");
        $("#downIcon").toggleClass("arrow-rotate")
    });
    $("#hrmsystemId").click(function() {
        $(".hide1").toggle("slow");
        $("#downIcon1").toggleClass("arrow-rotate")
    });
    $("#accountingSystemId").click(function() {
        $(".hide2").toggle("slow");
        $("#downIcon2").toggleClass("arrow-rotate")
    });
    $("#crmSystemId").click(function() {
        $(".hide3").toggle("slow");
        $("#downIcon3").toggleClass("arrow-rotate")
    });
    $("#productManagementId").click(function() {
        $(".hide6").toggle("slow");
        $("#downIcon11").toggleClass("arrow-rotate")
    });
    $("#userManagementId").click(function() {
        $(".hide5").toggle("slow");
        $("#downIcon4").toggleClass("arrow-rotate")
    });
    $("#posSystemId").click(function() {
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
  function showPreview(event) {
    if (event.target.files.length > 0) {
        var src = URL.createObjectURL(event.target.files[0]);
        var preview = document.getElementById("file-ip-1-preview");
        preview.src = src;
        let a = JSON.stringify(preview.src)
        localStorage.setItem("hello", a)
        console.log(preview.src)
        preview.style.display = "block";
    }
  }
  function showPreview2(event) {
    if (event.target.files.length > 0) {
        var src = URL.createObjectURL(event.target.files[0]);
        var preview = document.getElementById("file-ip-2-preview");
        preview.src = src;
        let a = JSON.stringify(preview.src)
        localStorage.setItem("hello", a)
        console.log(preview.src)
        preview.style.display = "block";
    }
  }
  function showPreview4(event) {
    if (event.target.files.length > 0) {
        var src = URL.createObjectURL(event.target.files[0]);
        var preview4 = document.getElementById("file-ip-4-preview");
        preview4.src = src;
        let a = JSON.stringify(preview4.src)
        localStorage.setItem("hello", a)
        console.log(preview4.src)
        preview4.style.display = "block";
    }
  }
  