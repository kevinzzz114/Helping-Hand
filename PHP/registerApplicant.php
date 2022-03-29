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
        echo "<script>alert('Mobile number is already used'); window.location.href='../pages/registerApplicant.php';</script>";
    }else{
        $getrow = "SELECT * FROM tb_user";
        $result3 = mysqli_query($conn, $getrow);
        $newusername = "user". (mysqli_num_rows($result3) + 1);
        $sql2 = "INSERT INTO `tb_user` (`username`, `password`, `fullName`, `email`, `mobileNo`)
        VALUES ('$newusername', '$newusername', '$fullname', '$email', '$mobileNo')";
        $sql3 = "INSERT INTO `tb_applicant` (`username`, `IDno`, `address`, `householdIncome`, `orgID`)
        VALUES ('$newusername', null, '$address', '$householdIncome', '$orgID')";
        mysqli_query($conn, $sql2);
        mysqli_query($conn, $sql3);
        echo "<script>alert('Applicant $fullname registered successfully'); window.location.href='../pages/registerApplicant.php';</script>";
    }
}
?>

