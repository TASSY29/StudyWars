<?php
$db= new mysqli('localhost','root','');
		mysqli_select_db ( $db , 'studywars' );

session_start();
 

    if(isset($_SESSION['userId'])){

     unset($_SESSION["userId"]);
     session_destroy();
     session_unset();    
     header('Location: login.php');

      }
    

?>