<html>
<head>
<title>Admin Login</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {font-family: "Raleway", sans-serif}

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
      <a onclick="window.location.href='loginOrgRep.php'" class="w3-bar-item w3-button">Login as Organization Representative</a>
    </div>
  </div>
</div>

<!-- Register Applicant Section -->
<div class="w3-container" style="padding:128px 16px" id="applicantRegister">
<h3 class="w3-center">Login as Admin</h3>
  <div style="margin-top:48px">
    <br>
    <form action="/action_page.php" target="_blank">
      <p><input class="w3-input w3-border" type="text" placeholder="Username" required name="username"></p>
      <p><input class="w3-input w3-border" type="password" placeholder="Password" required name="password"></p>
      <p>
        <button class="w3-button w3-black" type="submit">LOGIN</button>
      </p>
    </form>
  </div>
</div>

</body>
</html>