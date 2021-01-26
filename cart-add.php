<?php

	try{
		require_once 'connect.php';
			
	}catch(Exception $e){
		$error = $e->getMessage();
	}
	session_start();
	      if(!isset($_SESSION['userId'])){

       header("Location: login.php");  // redirect to login page or index page if email and username is not set in session
  } 

		
if($_SERVER['REQUEST_METHOD'] == 'POST')

	{		
				$userID=$_SESSION['userId'];
				if(!empty($_POST['proid'])){ $carT= $_POST['proid'];}else { $carT= "";}
			
				$sql = "INSERT INTO `cart` (productID, userID) VALUES ('$carT','$userID')";
				
				//echo $sql;
				
				$insert_result = $db->query($sql);
					if($insert_result){
						$message ="Successfully Add to Cart";
						echo "<script type='text/javascript'>alert('$message');
						window.location.href='product.php';</script>";
						//echo "<script type='text/javascript'>alert('$message');
						//";
					}else{
						echo "Unsuccess Add to Cart";
						//echo "<script type='text/javascript'>alert('$message');
						//";
						}	
			
			
			
	}
$db->close(); 
?>