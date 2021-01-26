<?php
	
    include 'connect.php'; 
session_start();
$inactive = 1800;
if(isset($_SESSION['timeout']) ) {
$session_life = time() - $_SESSION['timeout'];
if($session_life > $inactive)
   { session_destroy(); header("Location: login.php"); }
}
if(!isset($_SESSION['u_id'])){

  header("Location: login.php");}
   $u_id=$_SESSION['u_id'];

   if($_SERVER['REQUEST_METHOD'] == 'POST')	
   {
       if (isset($_POST['update']))
       {
           $mobile_number = $_POST['mobile_number'];
           $email = $_POST['email'];
           $office_location = $_POST['office_location'];
           $project_field = $_POST['project_field'];
           $password = password_hash($_POST['password'], PASSWORD_DEFAULT) ;

           $sql="update users set u_mobile ='$mobile_number',u_email= '$email',u_field='$project_field',sv_office='$office_location',u_password='$password' where u_id = '$u_iD'";
           
           $result= $db->query($sql);
           if($result){
           $message = "Record successfully Updated";
           echo "<script type='text/javascript'>alert('$message');
                       window.location.href='supervisor_profile_display';</script>";
           }else{
           $message = "Oops Record not Update";
           echo "<script type='text/javascript'>alert('$message');
                       ";
                   }
       }
   
}


$db->close();
?>