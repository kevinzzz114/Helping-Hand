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

$amount = validate($_POST['amount']);
$paymentChannel = validate($_POST['paymentChannel']);
$referenceNo = validate($_POST['referenceNo']);



    
$sql = "INSERT INTO `tb_contribution` (`contributionID`, `receivedDate`, `appealID`)
VALUES (NULL, '$receivedDate', '$appealID')";
mysqli_query($conn, $sql);

$getContributionID = "SELECT contributionID FROM tb_contribution ORDER BY contributionID DESC LIMIT 1";
$result = mysqli_query($conn, $getContributionID);
$rows = $result->fetch_assoc();
$contributionID = $rows['contributionID'];



$sql2 = "INSERT INTO `tb_cash_donation` (`contributionID`, `amount`, `paymentChannel`, `referenceNo`)
VALUES ('$contributionID', '$amount', '$paymentChannel','$referenceNo')";
mysqli_query($conn, $sql2);

echo "<script>alert('Cash Donation recorded successfully'); window.location.href='../pages/recordContribution.php';</script>";





?>

