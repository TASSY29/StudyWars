<?php
$db= new mysqli('localhost','root','');
mysqli_select_db( $db, 'studywars' );
session_start();
      if(!isset($_SESSION['userId'])){

       header("Location: login.php");  // redirect to login page or index page if email and username is not set in session
  } 
?>

<!DOCTYPE html>
<html>
<head>
  <title>Product</title>
  <link href="main.css" rel="stylesheet">
</head>

<body>
  <header>
   <div class="container">
   <img src="logo.png" alt="studywars-logo" width=300 height=300>
    

       <nav>
          <ul class="topnav">
             
             <li><a href="product.php">Product</a></li>
             <li><a href="product_search.php">Search</a></li>
             <li><a href="cart.php">Cart</a></li>
			 <li><a href="logout.php">Logout</a></li>
             
          </ul>
      </nav>
  </div>
  </header>
   <p><h1 style="text-align: center;">Product</h1></p>
   
	<div class="container" style="text-align:center;";>
		<h2>Cookies and Cake</h2>
    <div id="product_box">
      <?php
       $sql="SELECT * FROM product";
       
        $result= $db->query($sql);
        
       while ($row_product=mysqli_fetch_array($result)){
             $pro_id=$row_product [0];
             $pro_name=$row_product [1];
             $pro_img=$row_product [2];
             $pro_type=$row_product [3];
             $pro_desc=$row_product [4];
             $pro_price=$row_product [5];
            
            echo"
            <div id='single_product'>
            <h3>$pro_name</h3>
            <img src='$pro_img'>
            <h3>$pro_type</h3>
            <h4>$pro_desc</h4>
            <h3><strong>RM $pro_price</strong></h3>
            <form action='cart_add.php' method='post'>
            <p>Add to Cart<br>
                |<br>
                \/<br>
            <input type='submit' name='proid' value='$pro_id'></p>
            
            </div>
            ";


       }
       $db->close()
      ?>
    </div>



  </div>

</body>
</html>