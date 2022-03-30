<?php 
include "config.php";
session_start();
$orgID = $_SESSION['orgID'];
$appealID = $_POST['appealID'];
$checkID = "SELECT * FROM tb_temp_applicant WHERE appealID ='$appealID' AND orgID = '$orgID'";
$ID = mysqli_query($conn, $checkID);
if (mysqli_num_rows($ID) != 1){
    echo "<script>alert('Invalid Appeal ID'); window.location.href='../pages/recordDisbursement.php';</script>";
}else{
    $_SESSION['appealID'] = $appealID;
    if (isset($_POST['showContribution'])){
        echo "<script>window.location.href='../pages/viewContribution.php';</script>";
    }else{
        echo "<script>window.location.href='../pages/disbursement.php';</script>";
    }
}
?>