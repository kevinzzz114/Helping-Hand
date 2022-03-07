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

if (empty($username)){

    echo "username is required";
    header("Refresh:5; url= ../pages/orgRep_login.html");

}else if(empty($password)){

    echo "password is required";
    header("Refresh:5; url= ../pages/orgRep_login.html");

}else{

    $sql = "SELECT * FROM organizationrep WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) === 1){

        $row = mysqli_fetch_assoc($result);

        if ($row['username'] === $username && $row['password'] === $password) {

            echo "Logged in!";
            $_SESSION['orgID'] = $row['orgID'];
            header("Refresh:3; url= ../pages/applicant_registration.php");

        }else{

            echo "incorrect username or password2";
            header("Refresh:5; url= ../pages/orgRep_login.html");

        }

    }else{

        echo "incorrect username or password3";
        header("Refresh:5; url= ../pages/orgRep_login.html");
    }
}
?>
