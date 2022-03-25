<?php 



function validate($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$username = validate($_POST['username']);
$password = validate($_POST['password']);

if ($username = "admin"&& $password = "admin"){
    header("window.location.href='/pages/index.php'");

}else{
    myFunction();
    
}

?>

<script type="text/javascript">
    function myFunction() {
        alert("Incorrect username or password");
    }
</script>