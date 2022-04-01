<?php 
include "config.php";

$sql = "SELECT * from (tb_appeal INNER JOIN tb_organization ON tb_appeal.orgID = tb_organization.orgID)
 WHERE toDate < CAST(CURRENT_TIMESTAMP AS DATE)";
$result = $conn-> query($sql);
if (mysqli_num_rows($result) > 0){
    while ($row= $result-> fetch_assoc()){
        echo "<tr>";
        echo "<td>" . $row['appealID'] . "</td>";
        echo "<td>" . $row['orgName'] . "</td>";
        echo "<td>" . $row['fromDate'] . "</td>";
        echo "<td>" . $row['toDate'] . "</td>";
        echo "<td>" . $row['description'] . "</td>";
        echo "<td>" . $row['outcome'] . "</td>";
        echo "</tr>";
    }
}else{
    echo"no content";
}
?>