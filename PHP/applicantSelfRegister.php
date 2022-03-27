<?php 
include "config.php";

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
$orgName = ($_POST['orgName']);

$getOrg = "SELECT orgID FROM tb_organization WHERE orgName='$orgName'";
$result = mysqli_query($conn, $getOrg);
$rows = $result->fetch_assoc();
$orgID = $rows['orgID'];
    
$sql = "INSERT INTO `tb_temp_applicant` (`IDno`, `email`, `fullName`, `mobileNo`, `address`, `householdIncome`, `orgID`)
VALUES (null, '$email', '$fullname', '$mobileNo', '$address', '$householdIncome', '$orgID')";
mysqli_query($conn, $sql);

echo "<script>alert('You have registered successfully'); window.location.href='../pages/index.php';</script>";


?>

