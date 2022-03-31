<?php 
include "config.php";
$appealID = $_SESSION["appealID"];

function validate($data){
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

$username = validate($_POST['username']);
$fullname = validate($_POST['fullname']);
$password = "password123";
$jobTitle = validate($_POST['jobTitle']);
$email = validate($_POST['email']);
$mobileNo = validate($_POST['mobileNo']);
$orgName = ($_POST['orgName']);



$check = "SELECT * FROM tb_user WHERE username='$username'";
$result = mysqli_query($conn, $check);
if (mysqli_num_rows($result) > 0){
    echo "<script>alert('Username: $username is already used'); window.location.href='../pages/registerOrgRep.php';</script>";
}else{
    $getOrg = "SELECT orgID FROM tb_organization WHERE orgName='$orgName'";
    $result = mysqli_query($conn, $getOrg);
    $rows = $result->fetch_assoc();
    $orgID = $rows['orgID'];
    
    $sql = "INSERT INTO `tb_user` (`username`, `password`, `email`, `fullName`, `mobileNo`)
    VALUES ('$username', '$password', '$email', '$fullname', '$mobileNo')";
    mysqli_query($conn, $sql);

    $sql2 = "INSERT INTO `tb_organization_rep` (`username`, `jobTitle`, `orgID`)
    VALUES ('$username', '$jobTitle', '$orgID')";
    mysqli_query($conn, $sql2);

    echo "<script>alert('Organization Representative: $username registered successfully'); window.location.href='../pages/registerOrgRep.php';</script>";
}
?>

