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

$receivedDate = date('d-m-y');

$description = validate($_POST['description']);
$estimatedValue = validate($_POST['estimatedValue']);



$check = "SELECT * FROM tb_contribution WHERE appealID='$appealID'";
$result = mysqli_query($conn, $check);
if (mysqli_num_rows($result) > 0){
    echo "<script>alert('appealID: $appealID is already recorded'); window.location.href='../pages/recordGoodsCash.php';</script>";
}else{
    
    $sql = "INSERT INTO `tb_contribution` (`contributionID`, `receivedDate`, `appealID`)
    VALUES (NULL, '$receivedDate', '$appealID')";
    mysqli_query($conn, $sql);

    // $getContributionID = "SELECT contributionID FROM tb_contribution WHERE contributionID='$contributionID'";
    // $result = mysqli_query($conn, $getContributionID);
    // $rows = $result->fetch_assoc();
    // $contributionID = $rows['contributionID'];

    $getContributionID = "SELECT contributionID FROM tb_contribution ORDER BY contributionID DESC LIMIT 1;"
    $result = mysqli_query($conn, $getContributionID);
    

    $sql2 = "INSERT INTO `tb_goods` (`contributionID`, `description`, `estimatedValue`)
    VALUES ('$getContributionID', '$description', '$estimatedValue')";
    mysqli_query($conn, $sql2);

    echo "<script>alert('Goods recorded successfully'); window.location.href='../pages/recordGoodsCash.php';</script>";


}


?>

