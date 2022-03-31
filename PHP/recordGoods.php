<?php 
include "config.php";
session_start();
$appealID = $_SESSION["appealID"];

function validate($data){
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

$receivedDate = date('y-m-d');

$description = validate($_POST['description']);
$estimatedValue = validate($_POST['estimatedValue']);




$sql = "INSERT INTO `tb_contribution` (`contributionID`, `receivedDate`, `appealID`)
VALUES (NULL, '$receivedDate', '$appealID')";
mysqli_query($conn, $sql);



$getContributionID = "SELECT contributionID FROM tb_contribution ORDER BY contributionID DESC LIMIT 1";
$result = mysqli_query($conn, $getContributionID);
$rows = $result->fetch_assoc();
$contributionID = $rows['contributionID'];


$sql2 = "INSERT INTO `tb_goods` (`contributionID`, `description`, `estimatedValue`)
VALUES ('$contributionID', '$description', '$estimatedValue')";
mysqli_query($conn, $sql2);

echo "<script>alert('Goods recorded successfully'); window.location.href='../pages/recordContribution.php';</script>";





?>

