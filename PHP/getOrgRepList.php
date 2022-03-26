<?php 
include "config.php";
$sql = "SELECT * from tb_organization_rep";
$result = $conn-> query($sql);
if (mysqli_num_rows($result) > 0){
    while ($row= $result-> fetch_assoc()){
        $username = isset($rows['username'])?count($rows['username']):0;
        $orgID = isset($rows['orgID'])?count($rows['orgID']):0;
        
        

        echo "<tr>";
        echo "<td>" . $row['username'] . "</td>";
        
        $sql2 = "SELECT * from tb_user WHERE username = $username";
        $result2 = $conn-> query($sql2);
        while ($row2= $result2-> fetch_assoc()){
            echo "<td>" . $row2['fullName'] . "</td>";
            echo "<td>" . $row2['email'] . "</td>";
            echo "<td>" . $row2['mobileNo'] . "</td>";

            


        }
        echo "<td>" . $row['jobTitle'] . "</td>";          
         
        $sql3 = "SELECT * from tb_organization WHERE orgID = $orgID";
        $result3 = $conn-> query($sql3);
        while ($row3= $result3-> fetch_assoc()){
            echo "<td>" . $row3['orgName'] . "</td>";
        }         
        echo "</tr>";
    }
}else{
    echo"no content";
}
?>