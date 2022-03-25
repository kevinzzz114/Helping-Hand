<?php 

function validate($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$username = validate($_POST['username']);
$password = validate($_POST['password']);

if ($username  == "admin" && $password == "admin"){
    header("Location: http://localhost/Helping-Hand/pages/index.php");
    exit();

}else{
    echo "<script>alert('Invalid username or password'); window.location.href='../pages/loginAdmin.php';</script>";
}

?>

