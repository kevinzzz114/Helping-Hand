<?php 

include "config.php";

function validate($data){
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

$username = validate($_POST['username']);
$password = "password123";
$jobtitle = validate($_POST['jobtitle']);
$orgID = validate($_POST['orgID']);
$fullname = validate($_POST['fullname']);
$mobileNo = validate($_POST['mobileNo']);

if (empty($username)){
    echo "username is required";
    header("Refresh:5; url= ../pages/register_organization.php");
}
if (empty($jobtitle)){
    echo "job title is required";
    header("Refresh:5; url= ../pages/register_organization.php");
}
if (empty($orgID)){
    echo "organization ID is required";
    header("Refresh:5; url= ../pages/register_organization.php");
}
if (empty($fullname)){
    echo "fullnameis required";
    header("Refresh:5; url= ../pages/register_organization.php");
}
if (empty($mobileNo)){
    echo "mobileNo is required";
    header("Refresh:5; url= ../pages/register_organization.php");
}

$sql = "INSERT INTO `organizationrep` (`ID`, `username`, `password`, `jobtitle`, `orgID`, `fullname`, `mobileNo`)
 VALUES (null, '$username', '$password', '$jobtitle', '$orgID', '$fullname', '$mobileNo')";
mysqli_query($conn, $sql);
echo "organization representative registered";
header("Refresh:5; url= ../pages/register_organization.php");
?>

