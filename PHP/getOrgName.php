<?php 
include "config.php";

$getOrg = "SELECT orgName FROM tb_organization";
$result = mysqli_query($conn, $getOrg);

while($rows = $result->fetch_assoc()){
    $orgName = $rows['orgName'];
    echo "<option value='$orgName'>$orgName</option>";
}
?>