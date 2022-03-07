<?php
   $DB_SERVER = "localhost";
   $DB_USERNAME = "root";
   $DB_PASSWORD = "";
   $DB_DATABASE = "helpinghand";
   $conn = new mysqli($DB_SERVER,$DB_USERNAME,$DB_PASSWORD,$DB_DATABASE) or die("unable to connect");

   if(!$conn) {
      echo "Connection failed!"; 
   }
?>