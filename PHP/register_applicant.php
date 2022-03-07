<?php 

include "config.php";
session_start();
function validate($data){
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

$username = "user123";
$password = "password123";
$orgID = $_SESSION['orgID'];

$fullname = validate($_POST['fullname']);
$mobileNo = validate($_POST['mobileNo']);
$address = validate($_POST['address']);
$income = validate($_POST['income']);
$filename = validate($_POST['filename']);
$description = validate($_POST['description']);


if (empty($fullname)){
    echo "fullname required";
    header("Refresh:5; url= ../pages/register_applicant.php");
}
if (empty($mobileNo)){
    echo "mobileNo required";
    header("Refresh:5; url= ../pages/register_applicant.php");
}
if (empty($address)){
    echo "address required";
    header("Refresh:5; url= ../pages/register_applicant.php");
}
if (empty($income)){
    echo "income required";
    header("Refresh:5; url= ../pages/register_applicant.php");
}
if (empty($filename)){
    echo "filename required";
    header("Refresh:5; url= ../pages/register_applicant.php");
}
if (empty($description)){
    echo "description required";
    header("Refresh:5; url= ../pages/register_applicant.php");
}

$sql = "INSERT INTO `applicant` (`ID`, `username`, `password`, `fullname`, `income`, `address`, `filename`, `description`, `mobileNo`, `orgID`)
 VALUES (null, '$username', '$password', '$fullname', '$income', '$address', '$filename', '$description', '$mobileNo', '$orgID')";
mysqli_query($conn, $sql);


$userid = $conn->insert_id;
$newusername = "user". $userid;
$newpass = "password". $userid;
$update = "UPDATE `applicant` SET `username` = '$newusername', `password` = '$newpass' WHERE `applicant`.`ID` = $userid";
mysqli_query($conn, $update);

echo "Aid applicant registered";
header("Refresh:5; url= ../pages/applicant_registration.php");
?>

