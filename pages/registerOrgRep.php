<html>
<head>
<title>Admin Page</title>
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
</style>
</head>
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-card" id="myNavbar">
    <a onclick="window.location.href='index.php'" class="w3-bar-item w3-button w3-wide">HELPING HAND</a>
    <!-- Right-sided navbar links -->
    <div class="w3-right w3-hide-small">
      <a onclick="window.location.href='registerOrgRep.php'" class="w3-bar-item w3-button"> REGISTER ORGANIZATION REPRESENTATIVE</a>
      <a onclick="window.location.href='registerOrg.php'" class="w3-bar-item w3-button"> REGISTER ORGANIZATION</a>
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
  <a onclick="window.location.href='registerOrgRep.php'" onclick="w3_close()" class="w3-bar-item w3-button"> REGISTER ORGANIZATION REPRESENTATIVE</a>
  <a onclick="window.location.href='registerOrg.php'" onclick="w3_close()" class="w3-bar-item w3-button"> REGISTER ORGANIZATION</a>
  <a onclick="window.location.href='../PHP/logout.php'" onclick="w3_close()" class="w3-bar-item w3-button"> LOGOUT</a>
</nav>

<div class="w3-container" style="padding:128px 16px" id="applicantRegister">
    <h1 class="w3-center">Register Organization Representative</h1>
      <div style="margin-top:48px">
        <br>
        <form action="../PHP/registerOrgRep.php" method="post">
          <p><input class="w3-input w3-border" type="text" placeholder="Username" required name="username"></p>
          <p><input class="w3-input w3-border" type="text" placeholder="Fullname" required name="fullname"></p>
          <p><input class="w3-input w3-border" type="text" placeholder="Email" required name="email"></p>
          <p><input class="w3-input w3-border" type="number" min=0 placeholder="Mobile Number" required name="mobileNo"></p>
          <p><input class="w3-input w3-border" type="text" placeholder="Job Title" required name="jobTitle"></p>
          <p><select class="w3-input w3-border" required name="orgName">

            <option value='' disabled selected>Select Organization</option>
            <?php
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

<div class="w3-container w3-light-grey" style="padding:128px 16px">
 <h1 class="w3-center">Organization Representative List</h1>
  <div class="w3-responsive">
    <table class="w3-table-all" id="table">
      <tr>
        <th>Username</th>
        <th>Full Name</th>
        <th>Email</th>
        <th>Mobile Number</th>
        <th>Job Title</th>
        <th>Organization</th>
      </tr>       
        <?php 
        include "../PHP/getOrgRepList.php";
        ?>
    </table>
</div>

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
</script>

</body>
</html>