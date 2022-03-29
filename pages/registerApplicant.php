<?php
session_start();
?>
<html>
<head>
<title>Organization Representative Page</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}

body, html {
  height: 100%;
  line-height: 1.8;
}

.w3-bar .w3-button {
  padding: 16px;
}
table tr:not(:first-child){
  cursor: pointer;transition: all .25s ease-in-out;
}
table tr:not(:first-child):hover{background-color: #a7a7a7;}
</style>
</head>
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-card" id="myNavbar">
    <a onclick="window.location.href='index.php'" class="w3-bar-item w3-button w3-wide">HELPING HAND</a>
    <!-- Right-sided navbar links -->
    <div class="w3-right w3-hide-small">
      <a onclick="window.location.href='registerApplicant.php'" class="w3-bar-item w3-button">REGISTER APPLICANT</a>
      <a onclick="window.location.href='recordContribution.php'" class="w3-bar-item w3-button"> RECORD CONTRIBUTION</a>
      <a onclick="window.location.href='addAppeal.php'" class="w3-bar-item w3-button"> ADD APPEAL</a>
      <a onclick="window.location.href='recordDisbursement.php'" class="w3-bar-item w3-button"> RECORD DISBURSEMENT</a>
      <a onclick="window.location.href='../PHP/logout.php'" class="w3-bar-item w3-button"> LOGOUT</a>
    </div>
    <!-- Hide right-floated links on small screens and replace them with a menu icon -->

    <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
      <i class="fa fa-bars"></i>
    </a>
  </div>
</div>

<!-- Sidebar on small screens when clicking the menu icon -->
<nav class="w3-sidebar w3-bar-block w3-black w3-card w3-animate-left w3-hide-medium w3-hide-large" style="display:none" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-large w3-padding-16">Close X</a>
  <a onclick="window.location.href='registerApplicant.php'" onclick="w3_close()" class="w3-bar-item w3-button">REGISTER APPLICANT</a>
  <a onclick="window.location.href='recordContribution.php'" onclick="w3_close()" class="w3-bar-item w3-button"> RECORD CONTRIBUTION</a>
  <a onclick="window.location.href='addAppeal.php.php'" onclick="w3_close()" class="w3-bar-item w3-button"> ADD APPEAL</a>
  <a onclick="window.location.href='recordDisbursement.php'" onclick="w3_close()" class="w3-bar-item w3-button"> RECORD DISBURSEMENT</a>
  <a onclick="window.location.href='../PHP/logout.php'" onclick="w3_close()" class="w3-bar-item w3-button"> LOGOUT</a>
</nav>

<div class="w3-container" style="padding:128px 16px">
 <h1 class="w3-center">Applicant Request List</h1>
  <div class="w3-responsive">
    <table class="w3-table-all" id="table">
      <tr>
        <th>ID</th>
        <th>Full Name</th>
        <th>Email</th>
        <th>Mobile Number</th>
        <th>Address</th>
        <th>Household Income</th>
      </tr>       
        <?php 
        include "../PHP/getTempApplicantList.php";
        ?>
    </table>
    <br>
        <form action="../PHP/acceptApplicant.php" method="post">
          <p><input class="w3-input w3-border" type="number" placeholder="ID" required name="applicantID" id="applicantID"></p>
          <p>
            <button class="w3-button w3-black" type="submit">ACCEPT</button>
            <button class="w3-button w3-red" type="submit" formaction="../PHP/rejectApplicant.php">REJECT</button>
          </p>
        </form>
</div>

<div class="w3-container w3-light-grey" style="padding:128px 16px" id="applicantRegister">
    <h1 class="w3-center">Register Applicant</h1>
      <div style="margin-top:48px">
        <br>
        <form action="../PHP/registerApplicant.php" method="post">
          
          <p><input class="w3-input w3-border" type="text" placeholder="Fullname" required name="fullname"></p>
          <p><input class="w3-input w3-border" type="text" placeholder="Email" required name="email"></p>
          <p><input class="w3-input w3-border" type="number" min=0 placeholder="Mobile Number" required name="mobileNo"></p>
          <p><input class="w3-input w3-border" type="text" placeholder="Address" required name="address"></p>
          <p><input class="w3-input w3-border" type="number" min=0 placeholder="Household Income" required name="householdIncome"></p>

          <p>
            <button class="w3-button w3-black" type="submit">REGISTER APPLICANT</button>
          </p>
        </form>
    </div>
</div>

<div class="w3-container" style="padding:128px 16px">
 <h1 class="w3-center">Applicant List</h1>
  <div class="w3-responsive">
    <table class="w3-table-all" id="table">
      <tr>
        <th>Username</th>
        <th>Full Name</th>
        <th>Email</th>
        <th>Mobile Number</th>
        <th>Address</th>
        <th>Household Income</th>
      </tr>       
        <?php 
        include "../PHP/getApplicantList.php";
        ?>
    </table>
    <br>
        <form action="../PHP/acceptApplicant.php" method="post">
          <p><input class="w3-input w3-border" type="number" placeholder="ID" required name="applicantID" id="applicantID"></p>
          <p>
            <button class="w3-button w3-black" type="submit">ACCEPT</button>
            <button class="w3-button w3-red" type="submit" formaction="../PHP/rejectApplicant.php">REJECT</button>
          </p>
        </form>
</div>
<!--
<div class="w3-container" style="padding:128px 16px" id="applicantRegister">
    <h1 class="w3-center">Register Applicant</h1>
      <div style="margin-top:48px">
        <br>
        <form action="../PHP/registerApplicant.php" method="post" enctype="multipart/form-data">
          <p><input class="w3-input w3-border" type="text" placeholder="Username" required name="username"></p>
          <p><input class="w3-input w3-border" type="text" placeholder="Fullname" required name="fullname"></p>
          <p><input class="w3-input w3-border" type="text" placeholder="Email" required name="email"></p>
          <p><input class="w3-input w3-border" type="number" min=0 placeholder="Mobile Number" required name="mobileNo"></p>
          <p><input class="w3-input w3-border" type="text" placeholder="Address" required name="address"></p>
          <p><input class="w3-input w3-border" type="number" min=0 placeholder="Household Income" required name="householdIncome"></p>

          <p><input class="w3-input w3-border" type="text" placeholder="Filename" required name="filename"></p>
          <p><input class="w3-input w3-border" type="text" placeholder="Description" required name="description"></p>
          <p><input class="w3-input w3-border" type="file" required name="file[]" multiple></p>
-->
<!--         
          <php echo count($_FILES['file']['name']); ?>


          <p><select class="w3-input w3-border" required name="orgName">

            <option value='' disabled selected>Select Organization</option>
            <php
            include "../PHP/getOrgName.php";
            ?>
            </select>
          </p>


          <p>
            <button class="w3-button w3-black" type="submit">REGISTER ORGANIZATION REPRESENTATIVE</button>
          </p>
        </form>
    </div>
</div>

-->
 
<script>
// Toggle between showing and hiding the sidebar when clicking the menu icon
var mySidebar = document.getElementById("mySidebar");

function w3_open() {
  if (mySidebar.style.display === 'block') {
    mySidebar.style.display = 'none';
  } else {
    mySidebar.style.display = 'block';
  }
}

// Close the sidebar with the close button
function w3_close() {
    mySidebar.style.display = "none";
}

var table = document.getElementById('table');
                
for(var i = 1; i < table.rows.length; i++){
  table.rows[i].onclick = function(){
    document.getElementById("applicantID").value = this.cells[0].innerHTML;
  }
}


</script>


</body>
</html>