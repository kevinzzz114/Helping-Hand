<?php 
include "config.php";

function validate($data){
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

$orgName = validate($_POST['orgName']);
$address = validate($_POST['address']);

$check = "SELECT * FROM tb_organization WHERE orgName='$orgName'";
$result = mysqli_query($conn, $check);

if (mysqli_num_rows($result) > 0){
    echo "<script>alert('Organization name: $orgName is already used'); window.location.href='../pages/registerOrg.php';</script>";
}else{
    $sql = "INSERT INTO `tb_organization` (`orgID`, `orgName`, `address`) VALUES (NULL, '$orgName', '$address')";
    mysqli_query($conn, $sql);
    echo "<script>alert('Organization $orgName registered successfully'); window.location.href='../pages/registerOrg.php';</script>";
}
?>

