<?php 
include "config.php";
$sql = "SELECT * from ((tb_organization_rep INNER JOIN tb_user ON tb_organization_rep.username = tb_user.username)
INNER JOIN tb_organization ON tb_organization_rep.orgID = tb_organization.orgID)";
$result = $conn-> query($sql);
if (mysqli_num_rows($result) > 0){
    while ($row= $result-> fetch_assoc()){
        echo "<tr>";
        echo "<td>" . $row['username'] . "</td>";        
        echo "<td>" . $row['fullName'] . "</td>";
        echo "<td>" . $row['email'] . "</td>";
        echo "<td>" . $row['mobileNo'] . "</td>";        
        echo "<td>" . $row['jobTitle'] . "</td>";      
        echo "<td>" . $row['orgName'] . "</td>";       
        echo "</tr>";
    }
}else{
    echo"no content";
}
?>