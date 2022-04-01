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

$ID = validate($_POST['ID']);
$date = $_POST['disbursementDate'];
$cashAmount = validate($_POST['cashAmount']);
$goodsDisbursed = validate($_POST['goodsDisbursed']);
$outcome = validate($_POST['outcome']);

$checkID = "SELECT * FROM tb_applicant WHERE IDno='$ID'";
$result = mysqli_query($conn, $checkID);
if (mysqli_num_rows($result) < 1){
    echo "<script>alert('Invalid applicant ID'); window.location.href='../pages/recordDisbursement2.php';</script>";
}else{
    $sql = "INSERT INTO `tb_disbursement` (`IDno`, `disbursementDate`, `cashAmount`, `goodsDisbursed`, `appealID`)
    VALUES ('$ID', '$date', '$cashAmount', '$goodsDisbursed', '$appealID')";    
    mysqli_query($conn, $sql);

    $sql2 = "UPDATE `tb_appeal` SET `outcome`='$outcome' WHERE appealID = $appealID";
    mysqli_query($conn, $sql2);
    echo "<script>alert('Disbursement recorded successfully'); window.location.href='../pages/recordDisbursement2.php';</script>";
}
?>