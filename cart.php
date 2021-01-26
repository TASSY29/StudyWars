<?php
$conn = new mysqli($host, $username, $password, $database);
session_start();
      if(!isset($_SESSION['userId'])){

       header("Location: login.php");  // redirect to login page or index page if email and username is not set in session
  } 
?>

<!DOCTYPE html>
<html>
<head>
  <title>Cart</title>
  <link href="login.css" rel="stylesheet">
</head>

<body>
  <header>
   <div class="container">
   <img src="logo.png" alt="studywars-logo" width=300 height=300>
    

       <nav>
          <ul class="topnav">
             
             <li><a href="product.php">Product</a></li>
             <li><a href="search.php">Search</a></li>
             <li><a href="cart.php">Cart</a></li>
			 <li><a href="logout.php">Logout</a></li>
             
          </ul>
      </nav>
  </div>
  </header>
  <div class="container" style="text-align:center;";>
  <p><h1 style="text-align: center;">Cart</h1></p>
  <div id="product_box">
     
   <table border=1 style="background-color:WhiteSmoke; margin-left: auto; margin-right:auto;">
    <tr>
      <th colspan=8>All Cart Item</th>
    </tr>

    <tr>
      <th></th>
      <th>Name</th>
      <th>ID</th>
      <th>Price</th>
      <th>Quantity</th>
      <th>Total Price</th>
    </tr>

 <?php
		$userId=$_SESSION['userId'];
       $sql="SELECT * FROM cart_product WHERE userID='$userId'";
       
        $result= $db->query($sql);

        $totalPrice=0;
       while ($row_product=mysqli_fetch_array($result)){
             $cartID=$row_product [0];
             $pro_name=$row_product [1];
             $pro_id=$row_product [2];
             $pro_price=$row_product [3];
             $pro_quantity=$row_product [4];
             $total=$row_product[3]*$row_product[4]; 
             $totalPrice+=$row_product[3]*$row_product[4];
?>
        <tr>
          <form action="update_delete.php" method="post" onsubmit="return confirm('Are you sure to Update/Delete/Check Out?');">
          <td><input type="checkbox" name="delete_cart" value="<?php echo $cartID;?>" multiple/></td>
          <td><p><?php echo $pro_name;?><p></td>
          <td><p><?php echo $pro_id;?></p></td>
          <td><p><?php echo $pro_price;?></p></td>
          <td><input type="number" name="quantity" value="<?php echo $pro_quantity;?>" multiple/></td>
          <td><p><?php echo $total;?></p></td>
        </tr>

 <?php            
       }
       $db->close()
?>
        <tr>
          <tr><th colspan=8>
            <p><strong>TOTAL PRICE:<?php echo $totalPrice;?></p></strong></P>
            <input style="background-color: #FAFAD2;" type="submit" name="update" value="Update">
             <input style="background-color: tomato; color:white;" type="submit" name="delete" value="Delete">
              <input style="background-color: skyBlue;" type="submit" name="checkOut" value="Check Out">
            </th>
        </tr>
  
      </table>


</body>
</html>
