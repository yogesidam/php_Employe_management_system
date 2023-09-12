<?php
   $serverside = "localhost";
   $username = "root";
   $password = "";
   $dbname = "php_employee_managment";

   $connection = mysqli_connect($serverside, $username, $password, $dbname);
   if($connection){
    echo "Connection ok";
   }
?>