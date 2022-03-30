<?php 
include "config.php";
session_start();
$orgID = $_SESSION["orgID"];

function validate($data){
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

$fromDate = validate($_POST['fromDate']);
$toDate = validate($_POST['toDate']);
$description = validate($_POST['description']);


$sql = "INSERT INTO `tb_appeal` (`appealID`,`fromDate`,`toDate`, `description`, `orgID`) 
        VALUES (NULL, '$fromDate', '$toDate', '$description', $orgID)";

mysqli_query($conn, $sql);


echo "<script>alert('Appeal added successfully'); window.location.href='../pages/addAppeal.php';</script>";



?>

