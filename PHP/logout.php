<?php
session_start();
session_destroy();
header("Location: http://localhost/Helping-Hand/pages/index.php");
exit();
?>