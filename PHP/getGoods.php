<?php 
include "config.php";
$appealID = $_SESSION['appealID'];
$sql = "SELECT * from (tb_contribution INNER JOIN tb_goods ON tb_contribution.contributionID = tb_goods.contributionID)
 WHERE appealID = $appealID";
$result = $conn-> query($sql);
if (mysqli_num_rows($result) > 0){
    while ($row= $result-> fetch_assoc()){
        echo "<tr>";
        echo "<td>" . $row['contributionID'] . "</td>";
        echo "<td>" . $row['receivedDate'] . "</td>";
        echo "<td>" . $row['estimatedValue'] . "</td>";
        echo "<td>" . $row['description'] . "</td>";
        echo "</tr>";
    }
}else{
    echo"no content";
}
?>