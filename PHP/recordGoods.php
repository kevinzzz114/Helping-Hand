<?php 
include "config.php";
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
$orgName = ($_POST['orgName']);



$check = "SELECT * FROM tb_contribution WHERE appealID='$appealID'";
$result = mysqli_query($conn, $check);
if (mysqli_num_rows($result) > 0){
    echo "<script>alert('appealID: $appealID is already recorded'); window.location.href='../pages/recordGoodsCash.php';</script>";
}else{
   
    $sql = "INSERT INTO `tb_contribution` (`contributionID`, `receivedDate`, `appealID`)
    VALUES (NULL, '$receivedDate', '$appealID')";
    mysqli_query($conn, $sql);

    $sql2 = "INSERT INTO `tb_goods` (`contributionID`, `description`, `estimatedValue`)
    VALUES (NULL, '$description', '$estimatedValue')";
    mysqli_query($conn, $sql2);

    echo "<script>alert('Goods recorded successfully'); window.location.href='../pages/recordGoodsCash.php';</script>";


}


?>

