<?php 
include "config.php";
session_start();
$orgID = $_SESSION["orgID"];

$applicantID = $_POST['applicantID'];
$checkID = "SELECT * FROM tb_temp_applicant WHERE IDno ='$applicantID'";
$ID = mysqli_query($conn, $checkID);
if (mysqli_num_rows($ID) != 1){
    echo "<script>alert('Invalid ID'); window.location.href='../pages/registerApplicant.php';</script>";
}else{
    $removeRequest = "DELETE FROM tb_temp_applicant WHERE IDno='$applicantID'";
    mysqli_query($conn, $removeRequest);
    echo "<script>alert('Applicant $fullname rejected successfully'); window.location.href='../pages/registerApplicant.php';</script>";
}
?>