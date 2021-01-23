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
            if(!empty($_POST['username'])){ $username= $_POST['email'];}else { $username= "";}
            if(!empty($_POST['password'])){ $password= $_POST['password'];}else { $password= "";}
                        
                $sql = "SELECT * FROM  users WHERE uUsername = '$username' OR uPassword = '$password'";
                        
                $result = $db->query($sql);
                //run the query
                    
                //if the number of rows are more than 0	
                $numrows = $result->num_rows;
                    if($numrows){
                    $row = $result->fetch_row();
                            
                        if( $username!=$row[3] ){
                        $message = "Incorrect Username.";
                        echo "<script type='text/javascript'>alert('$message');
                        window.location.href='login.php';</script>";
                        }
                            
                        if( $password!=$row[4]){
                        $message = "Incorrect Password.";
                        echo "<script type='text/javascript'>alert('$message');
                        window.location.href='login.php';</script>";
                        }
                        
                        if( $row[5]=="admin"){
                            $message = "Welcome Admin $row[1].";
                            echo "<script type='text/javascript'>alert('$message');
                            window.location.href='index.php';</script>";
                            session_start();
                            $_SESSION['userId']=$row[0];
                        }else{
                            $message = "Login Succesfully. Welcome $row[1]";
                            echo "<script type='text/javascript'>alert('$message');
                            window.location.href='index.php';</script>";
                            session_start();
                            $_SESSION['userId']=$row[0];
                            }
                            
                        }else {
                            $message = "Incorrect Email and Password. <br> If You Are New User, Please Sign Up to Continue.";
                            echo "<script type='text/javascript'>alert('$message');
                            window.location.href='register.php';</script>";
                            }   
                }	
            
    $db->close(); 
?>