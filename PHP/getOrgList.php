<?php 
include "config.php";
$sql = "SELECT * from tb_organization";
$result = $conn-> query($sql);
if (mysqli_num_rows($result) > 0){
    while ($row= $result-> fetch_assoc()){
        echo "<tr>";
        echo "<td>" . $row['orgID'] . "</td>";          
        echo "<td>" . $row['orgName'] . "</td>";          
        echo "<td>" . $row['address'] . "</td>";          
        echo "</tr>";
    }
}else{
    echo"no content";
}
?>