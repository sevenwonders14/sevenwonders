<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
?>
 
 

<!DOCTYPE html>
<html>
    <head>
        <title>User Dashboard</title>
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
         

         
                   <div class='container'>
                     <center>
                     <h3 style='color: green;margin-top: 50px;'>Hey, <?php echo $_SESSION['username']; ?>!</h3><br/>

                      <p>You are in user dashboard page.</p>
                      <p><a href="logout.php">Logout</a></p>
                    </div>
                  </center>

                   <div class="form">
        
   
           

        </body>
    </head>
</html>
