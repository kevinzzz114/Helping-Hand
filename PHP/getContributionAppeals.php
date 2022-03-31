<?php 
include "config.php";
$orgID = $_SESSION['orgID'];

$sql = "SELECT * from tb_appeal WHERE orgID=$orgID AND toDate >= CAST(CURRENT_TIMESTAMP AS DATE)";
$result = $conn-> query($sql);
if (mysqli_num_rows($result) > 0){
    while ($row= $result-> fetch_assoc()){
        echo "<tr> ";
        echo "<td>" . $row['appealID'] . "</td>";
        echo "<td>" . $row['description'] . "</td>";
        echo "<td>" . $row['outcome'] . "</td>";
        echo "</tr>";
        
    }
}else{
    echo"no content";
}




?>