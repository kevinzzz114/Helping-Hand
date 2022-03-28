<?php 
include "config.php";
session_start();
$orgID = $_SESSION["orgID"];

function validate($data){
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

$fullname = validate($_POST['fullname']);
$email = validate($_POST['email']);
$mobileNo = validate($_POST['mobileNo']);
$address = validate($_POST['address']);
$householdIncome = validate($_POST['householdIncome']);

$checkEmail = "SELECT * FROM tb_user WHERE email='$email'";
$result = mysqli_query($conn, $checkEmail);
if (mysqli_num_rows($result) > 0){
    echo "<script>alert('Email is already used'); window.location.href='../pages/registerApplicant.php';</script>";
}else{
    $checkMobileNo = "SELECT * FROM tb_user WHERE mobileNo='$mobileNo'";
    $result2 = mysqli_query($conn, $checkMobileNo);
    if (mysqli_num_rows($result2) > 0){
        echo "<script>alert('Email is already used'); window.location.href='../pages/registerApplicant.php';</script>";
    }else{

    }
}

$getOrg = "SELECT orgID FROM tb_organization WHERE orgName='$orgName'";
$result = mysqli_query($conn, $getOrg);
$rows = $result->fetch_assoc();
$orgID = $rows['orgID'];
    
$sql = "INSERT INTO `tb_user` (`IDno`, `fullName`, `email`, `mobileNo`, `address`, `householdIncome`, `orgID`)
VALUES (null, '$fullname', '$email', '$mobileNo', '$address', '$householdIncome', '$orgID')";
mysqli_query($conn, $sql);

echo "<script>alert('You have registered successfully'); window.location.href='../pages/index.php';</script>";
?>

