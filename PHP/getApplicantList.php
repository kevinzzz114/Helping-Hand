<?php 
include "config.php";
session_start();

$orgID = $_SESSION["orgID"];
$sql = "SELECT * from (tb_user INNER JOIN tb_applicant ON tb_user.username = tb_applicant.username) WHERE orgID = $orgID";
$result = $conn-> query($sql);
if (mysqli_num_rows($result) > 0){
    while ($row= $result-> fetch_assoc()){
        echo "<tr>";
        echo "<td>" . $row['username'] . "</td>";        
        echo "<td>" . $row['fullName'] . "</td>";
        echo "<td>" . $row['email'] . "</td>";
        echo "<td>" . $row['mobileNo'] . "</td>";        
        echo "<td>" . $row['address'] . "</td>";      
        echo "<td>" . $row['householdIncome'] . "</td>";       
        echo "</tr>";
    }
}else{
    echo"no content";
}
?>