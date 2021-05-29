<?php
    session_start();
    if(isset($_SESSION["username"])) {
        header("Location: dashboard.php");
        exit();
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>User Login Page</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <style>
            body {height: 100vh;
  background-image: url(images/Fullandfinal.png);
  background-position: center;
  background-size: cover;
  font-family: sans-serif;
}
.login-box {
  width: 320px;
  height: 420px;
  background: #fff;
  color: rgb(29, 28, 28);
  top: 50%;
  left: 50%;
  position: absolute;
  transform: translate(-50%, -50%);
  box-sizing: border-box;
  padding: 70px 30px;
}
.download {
  width: 100px;
  height: 100px;
  border-radius: 50%;
  position: absolute;
  top: -50px;
  left: calc(50% - 50px);
}
h1 {
  margin: 0;
  padding: 0 0 20px;
  text-align: center;
  font-size: 22px;
}
.login-box p {
  margin: 0;
  padding: 0;
  font-weight: bold;
}
.login-box input {
  width: 100%;
  margin-bottom: 20px;
}
.login-box input[type="text"],
input[type="password"] {
  border: none;
  border-bottom: 1px solid rgb(0, 0, 0);
  background: transparent;
  outline: none;
  height: 40px;
  color: rgb(7, 7, 7);
  font-size: 16px;
}
.login-box input[type="submit"] {
  border: none;
  outline: none;
  height: 40px;
  background: #ccf004;
  color: #fff;
  font-size: 18px;
  border-radius: 20px;
}
.login-box input[type="submit"]:hover {
  cursor: pointer;
  background: #fff;
  color: #000;
}
.login-box a {
  text-decoration: none;
  font-size: 12px;
  line-height: 20px;
  color: darkgrey;
}
.login-box a:hover {
  color: rgb(243, 10, 10);
}
</style>
        <body>
         

         <?php
    require('db.php');
  
    // When form submitted, check and create user session.
    if (isset($_POST['username'])) {
        $username = stripslashes($_REQUEST['username']);    // removes backslashes
        $username = mysqli_real_escape_string($con, $username);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        // Check user is exist in the database
        $query    = "SELECT * FROM `users` WHERE email='$username'
                     AND password='" . $password . "'";
        $result = mysqli_query($con, $query) or die(mysql_error());
        $rows = mysqli_num_rows($result);
        if ($rows >= 1) {
            $_SESSION['username'] = $username;
            // Redirect to user dashboard page
            header("Location: dashboard.php");
        } else {
            echo "<div class='container'>
                     <center>
                     <h3 style='color: red;'>Incorrect Username/password.</h3><br/>
                  </div>
                  </center>";
        }
    } 
?>

            <div class="login-box">
                <img src="Images/download.jpg" class="download">


                <h1>User Login Here</h1>
                  <form method="post" name="login">
                    <p>Username</p>
                    <input type="text" required name="username" placeholder="Enter Username">
                    <p>Password</p>
                     
                      <input type="Password" required name="password" placeholder="Enter Password">
                      <input type="submit" name="" value="login">

                    </form>
                    
                    <a href="#">Forget your passowrd?</a><br>
                    <a href="index.php#login">Open an account</a>

                </form>
            </div>

        </body>
    </head>
</html>
