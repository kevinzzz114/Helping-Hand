<?php 
include "config.php";
session_start();
$orgID = $_SESSION['orgID'];

function validate($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;   
}


$appealID = validate($_POST['appealID']);

$check = "SELECT * FROM tb_appeal WHERE appealID ='$appealID' AND orgID = '$orgID'";
$result = mysqli_query($conn, $check);

if (mysqli_num_rows($result) != 1){
    echo "<script>alert('Invalid Appeal ID'); window.location.href='../pages/recordContribution.php';</script>";
}else{
    $_SESSION['appealID'] = $appealID;
    if (isset($_POST['enter'])){
        echo "<script>window.location.href='../pages/recordGoodsCash.php';</script>";
    }
}
?>