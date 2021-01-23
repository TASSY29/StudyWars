<DOCTYPE hmtl>
<html>
<head>
    <title> STUDYWARS BAKERY </title>
    <link href="/STUDYWARS/login.css" rel="stylesheet">
</head>
<body>
    <header>
        <div class="container">
            <img src="logo.png" alt="studywars-logo" width=300 height=300>
        </div>
    </header>
    <p><h1>StudyWars Bakery</h1></p>
    <p>Welcome!!</p>
    <p>Log in</p>

    <form action="loginOperation.php" method="post" autocomplete="on" id="inputform">
    First Name:<input type="text" name="firstname"><br><br>
    Last Name:<input type="text" name="lastname"><br><br>
    Email:<input type="text" name="email"><br><br>
    Password:<input type="text" name="password"><br><br>
    <button type="submit" name="register">Register</button>
    <button type="reset" name="clear">Clear</button>
    <p>
      Already a member?<a href="login.php">Sign in</a>
    </p>
    </p>
  </form>
</body>
</html>