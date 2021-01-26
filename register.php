<html>
<head>
  <title>StudyWars Bakery</title>
  <link href="login.css" rel="stylesheet">
</head>


<body>


<header>
  <div class="container">

    <img src="images/logo.jpeg" alt="ArtPhone Logo" width="130" height="130">
    

       <nav>
          <ul class="nav">
             
         
             
          </ul>
      </nav>
  </div>
</header>

 <p><h1>StudyWars Bakery</h1></p>
 <p>Welcome to our page:)</p>
 <p>Please create an account or login to your account before you start shopping in our website:)</p>

  <form action="insert.php" method="post" autocomplete="on" id="inputform">
    Username:<input type="text" name="username"><br><br>
  First Name:<input type="text" name="firstname"><br><br>
   Last Name:<input type="text" name="lastname"><br><br>
   Email:<input type="text" name="email"><br><br>
   Password:<input type="text" name="password"><br><br>
    <button type="submit" name="register">Register</button>
    <button type="reset" name="clear">Clear</button>
    <p>
      Already a member?<a href="login.php">Sign in</a>
    </p>
  </form>
</body>
</html>