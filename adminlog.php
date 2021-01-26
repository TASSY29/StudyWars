<DOCTYPE html>
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
    <p>Welcome Admin!!</p>
    <p>Log in</p>

    <form action="loginOperation.php" method="post" autocomplete="on" id="inputform">
    Username:<input type="username" name="username"><br><br>
    Password:<input type="password" name="password"><br><br>
    <button type="submit" name="login">Login</button>
    <button type="reset" name="clear">Clear</button>
    <p>
      Customer?<a href="login.php">Log In</a>
    </p>
    <p>
      Not A member? <a href="register.php">Sign Up </a>
    </p>
  </form>
</body>
</html>