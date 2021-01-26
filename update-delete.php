<?php
	
    $conn = new mysqli($host, $username, $password, $database);
    session_start();
          if(!isset($_SESSION['userId'])){

   header("Location: login.php");  // redirect to login page or index page if email and username is not set in session
} 
    if($_SERVER['REQUEST_METHOD'] == 'POST')	
    {
        if (isset($_POST['update']))
        {
            $quantity = $_POST['quantity'];
            $cartID = $_POST['delete_cart'];

            $sql="update cart set qty = '$quantity'  where cartID = '$cartID'";
            
            $result= $db->query($sql);
            if($result){
            $message = "Record successfully Updated";
            echo "<script type='text/javascript'>alert('$message');
                        window.location.href='cart.php';</script>";
            }else{
            $message = "Oops Record not Update";
            echo "<script type='text/javascript'>alert('$message');
                        ";
                    }
        }else if(isset($_POST['delete']))
        {
            $cartID = $_POST['delete_cart'];
            
            $sql="delete from cart where cartID = $cartID";
            $result= $db->query($sql);
            if($result){
            $message = "Record successfully Deleted";
            echo "<script type='text/javascript'>alert('$message');
                    window.location.href='cart.php';</script>";
            }else{
            $message = "Oops Record not Deleted";
            echo "<script type='text/javascript'>alert('$message');
                    ";
                }

        }else if(isset($_POST['checkOut'])){

            $cartID = $_POST['delete_cart'];
            $sql="select * from cart where cartID=$cartID";
          
            $result= $db->query($sql);
        

            $row_product=mysqli_fetch_array($result);
            $CartID=$row_product [0];
            $proID=$row_product [1];
            $qty=$row_product [2];
            $userID=$row_product [3];

        $userID=$_SESSION['userId'];
         $sqli="insert into orders (productID,userID, qty) values ('$proID',$userID,$qty)";
         $db->query($sqli);

        $sqlii="delete from cart where cartID=$CartID";
         $db->query($sqlii);


         $result= $db->query($sqlii);
            if($result){
            $message = "Payment Success!";
            echo "<script type='text/javascript'>alert('$message');
                    window.location.href='cart.php';</script>";
            }else{
            $message = "Oops Payment Unsuccessful!";
            echo "<script type='text/javascript'>alert('$message');
                    ";
                }
    
}
}

$db->close();
?>