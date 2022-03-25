<?php 

session_start(); 
include "config.php";

function validate($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$username = validate($_POST['username']);
$password = validate($_POST['password']);

$sql = "SELECT * FROM tb_user WHERE username='$username' AND password='$password'";
$result = mysqli_query($conn, $sql);
   
if (mysqli_num_rows($result) === 1){
     
    $row = mysqli_fetch_assoc($result);
    
    if ($row['username'] === $username && $row['password'] === $password) {

        $getOrg = "SELECT orgID FROM tb_organization_rep WHERE username='$username'";
        $orgID = mysqli_query($conn, $getOrg);
            
        $_SESSION['username'] = $row['username'];
        $_SESSION['orgID'] = $orgID;

        header("Location: http://localhost/Helping-Hand/pages/registerApplicant.php");
        exit();
    }else{

        echo "<script>alert('Invalid username or password');
        window.location.href='../pages/loginOrgRep.php';</script>";            
    }
}else{
    echo "<script>alert('Invalid username or password');
    window.location.href='../pages/loginOrgRep.php';</script>";
}
?>