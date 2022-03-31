<?php 
include "config.php";
session_start();

function validate($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$username = validate($_POST['username']);
$checkUsername = "SELECT * FROM (tb_applicant INNER JOIN tb_document ON tb_applicant.IDno = tb_document.IDno)
 WHERE username='$username'";
$result = mysqli_query($conn, $checkEmail);
if (mysqli_num_rows($result) != 1){
    echo "<script>alert('Invald username'); window.location.href='../pages/recordDisbursement2.php';</script>";
}else{
    $row= $result-> fetch_assoc();
    while ($row= $result-> fetch_assoc()){
        $filename = $row['filename'];
        $path = "uploads/$filename"."*";
        $fileInfo = glob($path);
        $fileActualname = $fileInfo[0];
        echo "<script>window.open(http://localhost/Helping-Hand/uploads/$fileActualname)';</script>";
    }
}
?>