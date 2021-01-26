<?php

	try{
		require_once 'C:/xampp/htdocs/STUDYWARS/connect.php';
			
	}catch(Exception $e){
		$error = $e->getMessage();
	}
?>
<?php
		
if($_SERVER['REQUEST_METHOD'] == 'POST')
	{
		if(!empty($_POST['firstname'])){ $first_name= $_POST['firstname'];}else { $first_name= "";}
		if(!empty($_POST['lastname'])){ $last_name= $_POST['lastname'];}else { $last_name= "";}
		if(!empty($_POST['email'])){ $email= $_POST['email'];}else { $email= "";}
		if(!empty($_POST['password'])){ $password= $_POST['password'];}else { $password= "";}
	
			
				$sql = "INSERT INTO `users` (fname, lname, email,uPassword) VALUES (";
				$sql.= " '$first_name','$last_name','$email','$password')";
				
				//echo $sql;
				
				$insert_result = $db->query($sql);
					if($insert_result){
						$message = "Record successfully Saved";
						echo "<script type='text/javascript'>alert('$message');
						window.location.href='login.php';</script>";
					}else{
						$message = "Oops Record not Saved";
						echo "<script type='text/javascript'>alert('$message');
						";
						}	
			
			
		}	
	
$db->close(); 
?>