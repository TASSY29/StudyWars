<?php
$db= new mysqli('localhost','root','');
  mysqli_select_db( $db, 'studywars' );
  session_start();
        if(!isset($_SESSION['userId'])){

       header("Location: login.php");  // redirect to login page or index page if email and username is not set in session
  } 
  if($_SERVER['REQUEST_METHOD'] == 'POST')
  {
  $product= $_POST['product_name']; 
   
  $sql= "select * from product where `ProName` like '$product%'";
  //echo $sql;
    $result= $db->query($sql);
    $numrows = $result->num_rows;
    
  if($numrows){
        $row = $result->fetch_row();  
  }else{
       $message = "Record not found";
       echo "<script type='text/javascript'>alert('$message')";
    }
}
$db->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>STUDYWARS BAKERY</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="main.css" rel="stylesheet">
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top header-transparent">
    <div class="container d-flex align-items-center">

      <h1 class="logo"><a href="main.php">StudyWars Bakery</a></h1>
      <a href="main.php" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="main.php">Home</a></li>
          <li><a href="#about">Product</a></li>
          <li><a href="#services">Services</a></li>
          <li><a href="#portfolio">Cart</a></li>
          <li><a href="#team">Team</a></li>
          <li><a href="#pricing">FAQ</a></li>
          <li class="drop-down"><a href="">More</a>
            <ul>
              <li><a href="#">About Us</a></li>
              <li class="drop-down"><a href="#">Team Name</a>
                <ul>
                  <li><a href="#">PRISSILLA TASSY</a></li>
                  <li><a href="#">RASILAWATI</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li>
          <li><a href="#contact">Contact</a></li>

        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->