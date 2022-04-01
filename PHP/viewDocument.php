<?php 
include "config.php";
session_start();

function validate($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$ID = validate($_POST['ID']);
$checkID = "SELECT * FROM (tb_document INNER JOIN tb_applicant ON tb_applicant.IDno = tb_document.IDno)
 WHERE tb_document.IDno='$ID'";
$result = mysqli_query($conn, $checkID);
if (mysqli_num_rows($result) < 1){
    //echo "<script>window.open('http://localhost/Helping-Hand/uploads/user8hh.png');</script>";
    echo "<script>alert('Invald applicant ID or applicant has no documents'); window.location.href='../pages/recordDisbursement2.php';</script>";
}else{
    while ($row= $result-> fetch_assoc()){
        $username = $row['username'];
        $filename = $row['filename'];
        $path = "../uploads/$username"."$filename"."*";
        $fileInfo = glob($path);
        $fileActualname = $fileInfo[0];
        echo "<script>window.open('http://localhost/Helping-Hand/uploads/$fileActualname');</script>";
    }
    echo "<script>window.location.href='../pages/recordDisbursement2.php';</script>";
}
?>