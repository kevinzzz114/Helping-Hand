<?php 
include "config.php";

$sql = "SELECT * from (tb_contribution INNER JOIN tb_cash_donation ON tb_contribution.contributionID = tb_cash_donation.contributionID)";
$result = $conn-> query($sql);
if (mysqli_num_rows($result) > 0){
    while ($row= $result-> fetch_assoc()){
        echo "<tr>";
        echo "<td>" . $row['contributionID'] . "</td>";
        echo "<td>" . $row['receivedDate'] . "</td>";
        echo "<td>" . $row['amount'] . "</td>";
        echo "<td>" . $row['paymentChannel'] . "</td>";
        echo "<td>" . $row['referenceNo'] . "</td>";
        echo "</tr>";
    }
}else{
    echo"no content";
}
?>