<html>
<head>
<title>Helping Hand</title>
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

/* Full height image header */
.bgimg-1 {
  background-position: center;
  background-size: cover;
  background-image: url("../img/image.jpg");
  min-height: 100%;
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
      <a href="#about" class="w3-bar-item w3-button">ABOUT</a>
      <a href="#appeals" class="w3-bar-item w3-button"> APPEALS</a>
      <a href="#applicantRegister" class="w3-bar-item w3-button"> REGISTER AS APPLICANT</a>
      <div class="w3-dropdown-hover w3-right">
        <button class="w3-button">LOGIN</button>
        <div class="w3-dropdown-content w3-bar-block w3-card-4" style="right:0">
          <a onclick="window.location.href='loginAdmin.php'" class="w3-bar-item w3-button">Help Aid Admin</a> 
          <a onclick="window.location.href='loginOrgRep.php'" class="w3-bar-item w3-button">Organization Representative</a>
        </div>
      </div>
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
  <a href="#about" onclick="w3_close()" class="w3-bar-item w3-button">ABOUT</a>
  <a href="#appeals" onclick="w3_close()" class="w3-bar-item w3-button">APPEALS</a>
  <a href="#applicantRegister" onclick="w3_close()" class="w3-bar-item w3-button">REGISTER AS APPLICANT</a>
  <div class="w3-dropdown-hover w3-right">
    <button class="w3-button">LOGIN</button>
    <div class="w3-dropdown-content w3-bar-block w3-card-4" style="right:0">
      <a onclick="window.location.href='loginAdmin.php'" class="w3-bar-item w3-button">Help Aid Admin</a> 
      <a onclick="window.location.href='loginOrgRep.php'" class="w3-bar-item w3-button">Organization Representative</a>
    </div>
  </div>
  
</nav>

<!-- Header with full-height image -->
<header class="bgimg-1 w3-display-container w3-grayscale-min" id="home">
  <div class="w3-display-left w3-text-white" style="padding:48px">
    <span class="w3-jumbo w3-hide-small">Lending a Helping Hand</span><br>
    <span class="w3-xxlarge w3-hide-large w3-hide-medium">Lending a Helping Hand</span><br>
    <span class="w3-large">To face Economic Hardships together.</span>
    <p><a href="#about" class="w3-button w3-white w3-padding-large w3-large w3-margin-top w3-opacity w3-hover-opacity-off">Learn more and start today</a></p>
  </div> 
  <div class="w3-display-bottomleft w3-text-grey w3-large" style="padding:24px 48px">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
  </div>
</header>

<!-- About Section -->
<div class="w3-container" style="padding:128px 16px" id="about">
  <h3 class="w3-center">ABOUT THE COMPANY</h3>
  <p class="w3-center w3-large">Key features of our company</p>
  <div class="w3-row-padding w3-center" style="margin-top:64px">
    <div class="w3-quarter">
      <i class="fa fa-desktop w3-margin-bottom w3-jumbo w3-center"></i>
      <p class="w3-large">Responsive</p>
      <p>Always online 24/7 for your services.</p>
    </div>
    <div class="w3-quarter">
      <i class="fa fa-heart w3-margin-bottom w3-jumbo"></i>
      <p class="w3-large">Passion</p>
      <p>Passionate in helping anyone who experiences income issues in these trying times.</p>
    </div>
    <div class="w3-quarter">
      <i class="fa fa-line-chart w3-margin-bottom w3-jumbo"></i>
      <p class="w3-large">Progress</p>
      <p>Providing Aid in forms of Goods or Cash to you efficiently and effectively.</p>
    </div>
    <div class="w3-quarter">
      <i class="fa fa-users w3-margin-bottom w3-jumbo"></i>
      <p class="w3-large">Support</p>
      <p>Our team will try our best to assist you!</p>
    </div>
  </div>
</div>

<!-- Appeals Section -->
<div class="w3-container w3-light-grey" style="padding:128px 16px" id="appeals">
<h2 class="w3-center">VIEW APPEALS</h2>
  <div class="w3-row-padding">
  <button class="w3-button w3-black" onclick="viewAppeals()" id="btnAppeal">view past appeals</button>
    <table class="w3-table-all" id="presentAppeal">
      
      <tr>
        <th>Appeal ID</th>
        <th>Organization</th>
        <th>From Date</th>
        <th>To Date</th>
        <th>Description</th>
        <th>Outcome</th>
      </tr>       
        <?php 
        include "../PHP/getPresentAppeals.php";
        ?>
    </table>
    <table class="w3-table-all" id="pastAppeal" style="display:none">
      <tr>
        <th>Appeal ID</th>
        <th>Organization</th>
        <th>From Date</th>
        <th>To Date</th>
        <th>Description</th>
        <th>Outcome</th>
      </tr>       
        <?php 
        include "../PHP/getPastAppeals.php";
        ?>
    </table>
  </div>
</div>

<!-- Register Applicant Section -->
<div class="w3-container" style="padding:128px 16px" id="applicantRegister">
<h3 class="w3-center">REGISTER AS APPLICANT</h3>
  <p class="w3-center w3-large">Lets get in touch. Send us a message:</p>
  <div style="margin-top:48px">
    <br>
    <form action="../PHP/ApplicantSelfRegister.php" method="post">
      <p><input class="w3-input w3-border" type="text" placeholder="Fullname" required name="fullname"></p>
      <p><input class="w3-input w3-border" type="email" placeholder="Email" required name="email"></p>
      <p><input class="w3-input w3-border" type="number" min=0 placeholder="Mobile Number" required name="mobileNo"></p>
      <p><input class="w3-input w3-border" type="text" placeholder="Address" required name="address"></p>
      <p><input class="w3-input w3-border" type="number" min=0 placeholder="Household Income" required name="householdIncome"></p>
      <p><select class="w3-input w3-border" required name="orgName">
        <option value='' disabled selected>Select Organization</option>
        <?php
        include "../PHP/getOrgName.php";
        ?>
        </select>
      </p>
      <p>
      <button class="w3-button w3-black" type="submit">REGISTER</button>
      </p>
    </form>
  </div>
</div>


<!-- Footer -->
<footer class="w3-center w3-black w3-padding-64">
  <a href="#home" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
  <div class="w3-xlarge w3-section">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
  </div>
  <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-text-green">w3.css</a></p>
</footer>
 
<script>
// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}


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

var a;
function viewAppeals()
{
if(a==1)
{
document.getElementById("pastAppeal").style.display="none";
document.getElementById("presentAppeal").style.display="inline-table";
document.getElementById("btnAppeal").innerText="view past appeals";
return a=0;
}
else 
{
document.getElementById("pastAppeal").style.display="inline-table";
document.getElementById("presentAppeal").style.display="none";
document.getElementById("btnAppeal").innerText="view present appeals";
return a=1;
}
}
</script>

</body>
</html>