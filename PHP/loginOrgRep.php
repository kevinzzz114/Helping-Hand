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

        $getOrg = "SELECT * FROM (tb_organization_rep INNER JOIN tb_organization ON tb_organization_rep.orgID=tb_organization.orgID)
        WHERE username='$username'";
        $org = mysqli_query($conn, $getOrg);
        $orgID = mysqli_fetch_assoc($org);
            
        $_SESSION['username'] = $row['username'];
        $_SESSION['orgID'] = $orgID['orgID'];
        $_SESSION['orgName'] = $orgID['orgName'];

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