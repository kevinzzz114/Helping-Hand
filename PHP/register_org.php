<?php 

include "config.php";

function validate($data){
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

$orgName = validate($_POST['orgName']);
$address = validate($_POST['address']);

if (empty($orgName)){

  echo "organization name is required";
  header("Refresh:5; url= ../pages/register_organization.php");

}else if(empty($address)){

  echo "address is required";
  header("Refresh:5; url= ../pages/register_organization.php");

}else{

  $sql = "INSERT INTO `organization` (`orgID`, `orgName`, `address`) VALUES (NULL, '$orgName', '$address')";
  mysqli_query($conn, $sql);
  echo "organization registered";
  header("Refresh:5; url= ../pages/register_organization.php");

}
?>

