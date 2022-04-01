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

if(strtotime($fromDate) > strtotime($toDate)){
    echo "<script>alert('Start date must not be bigger than End date, Retry again!'); window.location.href='../pages/addAppeal.php';</script>";
}else{
    $sql = "INSERT INTO `tb_appeal` (`appealID`,`fromDate`,`toDate`, `description`, `orgID`) 
        VALUES (NULL, '$fromDate', '$toDate', '$description', $orgID)";
    mysqli_query($conn, $sql);
    echo "<script>alert('Appeal added successfully'); window.location.href='../pages/addAppeal.php';</script>";
}

?>

