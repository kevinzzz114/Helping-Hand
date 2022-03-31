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
$filename = validate($_POST['filename']);
$description = validate($_POST['description']);

$checkEmail = "SELECT * FROM tb_applicant WHERE username='$username'";
$result = mysqli_query($conn, $checkEmail);
if (mysqli_num_rows($result) != 1){
    echo "<script>alert('Invald username'); window.location.href='../pages/registerApplicant.php';</script>";
}else{
    $row= $result-> fetch_assoc();
    $ID = $row['IDno'];

    $file = $_FILES['file'];
    $fileName = $_FILES['file']['name'];
    $fileTmpName = $_FILES['file']['tmp_name'];

    $fileExt = explode('.',$fileName);
    $fileActualExt = strtolower(end($fileExt));
    $fileNameNew = $username.$filename.'.'.$fileActualExt;
    $fileDestination = '../uploads/'.$fileNameNew;
    move_uploaded_file($fileTmpName, $fileDestination);

    $sql = "INSERT INTO `tb_document`(`IDno`, `documentID`, `filename`, `description`)
    VALUES ('$ID', null, '$filename', '$description')";
    mysqli_query($conn, $sql);

    echo "<script>alert('$username document uploaded successfully'); window.location.href='../pages/registerApplicant.php';</script>";
}
?>