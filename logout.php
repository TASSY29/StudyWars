<?php
$conn = new mysqli($host, $username, $password, $database);

session_start();
 

    if(isset($_SESSION['userId'])){

     unset($_SESSION["userId"]);
     session_destroy();
     session_unset();    
     header('Location: login.php');

      }
    

?>