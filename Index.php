  
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Social Awareness</title>
    <link rel="stylesheet" href="style.css">
    <!--Bootstrap Link-->
    <!--For the menulink-->
    <script src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>
</head>
<body>

    <?php
    require('db.php');
    
    if (isset($_REQUEST['btnRegister'])) {
        $email    = stripslashes($_REQUEST['email']);
        $email    = mysqli_real_escape_string($con, $email);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);

         $c_password = stripslashes($_REQUEST['c_password']);
        $c_password = mysqli_real_escape_string($con, $c_password);


     
        $query    = "INSERT into `users` (password, email)
                     VALUES ('" . $password . "', '$email')";
        $result   = mysqli_query($con, $query);
        if ($result && $password==$c_password) {
            echo "<div class='container'>
                  <center>
               <h3 style='color: green;'>You are Registered successfully.</h3><br/>
               <p class='link'>Click here to <a href='login.php'>Login</a></p>
              </center>
              </div>";
        } else {
              echo "<div class='container'>
                 <center>
                  <h3>Password Not Match.</h3><br/>
                  <p class='link'>Click here to <a href='#login'>Registration</a></p>
                  </center>
                  </div>";
        }
   
    }  ?>   
              

<section id="header">
        <div class="container">


        <img src="images/Logoredwhitepic2.png" class="logo">
            <div class="header-text">
                <h1>Social <em>Awareness</em></h1>
                <span class="square"></span>
                <p>Raise awareness about social causes and bring about the change in the world! You wish to see</p>
                <a href="#login">
                    <button class="common-btn">REGISTER</button><br>
                </a>
                <script>
                    console.log("Click here to register for the new account");
                </script>
                <div class="line">
                    <span class="line-1"></span><br>
                    <span class="line-2"></span><br>
                    <span class="line-3"></span>
                </div>
            </div>
        </div>
    </section>


    <nav id="sideNav">
        <ul>
            <li><a href="#header">HOME</a></li>
            <li><a href="#participate">PARTICIPATE</a></li>
            <li><a href="#postcreate">POST AND CREATE</a></li>
            <li><a href="#advertise">ADVERTISE</a></li>
            <li><a href="login.php">User LOGIN</a></li>
            <li><a href="adminlogin.php">Admin LOGIN</a></li>
             
        </ul>
    </nav>
    <img src="images/Menuiconwhitebpic1.jpg" id="menuBtn">

<!--participate-->
<section id="participate">
    <div class="participate-left-col">
        <img src="images/Partcioatered18pic2.png">
    </div>
    <div class="participate-right-col">
        <div class="participate-text">
            <h1>Participate</em></h1>
            <span class="square2"></span>
            <p>Our purpose is to provide our end users the platform
                <br>where they participate in the causes which are close to their heart.<br>
                Meet different people, show gratitude and respect.</p><br><br>
            <div class="lineparticipate">
                <span class="line--1"></span><br>
                <span class="line--2"></span><br>
                <span class="line--3"></span>
            </div>
             <h2>Peace cannot be kept by force<br>it can only be achieved by understanding</h2>
            <h3>----Albert Einstein</h3>
        </div>
    </div>
</section>

<!--postcreate-->
<section id="postcreate">
    <div class="postcreate-row">
        <div class="postcreate-col">
            <img src="images/Campaing1.png">
            <h4>Protect</h4>
            <p>Protect your loved one's by being self awared</p>
        </div>
        <div class="postcreate-col">
            <img src="images/Campaign4.png">
            <h4>Providers</h4>
            <p>Join our community services and participate in social causes</p>
        </div>
        <div class="postcreate-col">
            <img src="images/Campaign3.png">
            <h4>Professional Circle</h4>
            <p>A good leader always have a faith in his team</p>
        </div> 
    </div>
    <div class="postcreate-btn">
        <div class="linepostcreate">
            <span class="line---1"></span><br>
            <span class="line---2"></span><br>
            <span class="line---3"></span>
        </div>
        <a href="#login">
            <button class="common-btn">PARTICIPATE</button><br>
        </a>
    </div>
</section>

<!--postandcreate-->
<section id="postandcreate">
    <div class="container postandcreate-row">
        <div class="postandcreate-left-col">
            <div class="postandcreate-text">
                <h1>Post and Make</h1>
                <span class="square3"></span>
                <p>Raise any social issues that are close to your heart by posting it. <br>A platform where you can even make the compaigns</p>
                <a href="Usermanual/User-ManualFinaledi.pdf" download>
                    <button class="common-btn">USER MANUAL</button>
                </a>
                <div class="linepostandcreate">
                    <span class="line---1"></span><br>
                    <span class="line---2"></span><br>
                    <span class="line---3"></span>
                </div>
            </div>
        </div>
        <div class="postandcreate-right-col">
            <img src="images/Postandcreatepic2.png">
        </div>
        </div>
</section>

<!--advertise-->
<section id="advertise">
    <div class="advertise-left-col">
        <img src="images/Advertisetrolleypic1 (2).png">
    </div>
    <div class="advertise-right-col">
        <div class="advertise-text">
            <h1>Advertise</em></h1>
            <span class="square4"></span>
            <p>Our aim is to provide our clients the platform
                <br>where they advertise their business and get leads.</p><br><br>
            <div class="lineadvertise">
                <span class="line----1"></span><br>
                <span class="line----2"></span><br>
                <span class="line----3"></span>
            </div>
             <h2>A good advertisement is one which sells the product without drawing attention to itself.</h2>
            <h3>----David Ogilvy</h3>
        </div>
    </div>
</section>
<!--login-->
<section id="login">
    <div class="container login-row">
        <div class="login-left-col">    

   
     <h1>Register for a new account</h1>
         <form  action="index.php" method="POST" enctype="multipart/form-data">
            <input type="email" name="email" required placeholder="Enter email address">
            <input type="password" name="password" required placeholder="Enter password">
            <input type="password"  name="c_password" required placeholder="Confirm password">
            <div class="btn-box">
                <button type="submit" name="btnRegister" class="common-btn">REGISTER</button>
            </div>
        </form>
 
            
            <div class="lineadvertise">
                <span class="line----1"></span><br>
                <span class="line----2"></span><br>
                <span class="line----3"></span>
            </div>
        </div>
        <div class="login-right-col">
            <img src="images/Loginpage.png">
        </div>
    </div>
</section>

<!--footer-->
<section id="footer">
    <div class="container footer-row">
        <hr>
        <div class="footer-left-col">
            <div class="footer-links">
                <div class="link-title">
                    <h5>CONTACT</h5>
                </div>
                <div class="link-title">
                    <h5>DISCLAIMER</h5>
                    
                </div>
                <div class="link-title">
                    <h5>PRIVATE POLICY</h5>
                    </div>
            </div>
        </div>
        <div class="footer-right-col">
            <div class="footer-info">
                <div class="copyright-text">
                    <small>@copyright 2021 <em>7Wonders</em></small>
                </div>
                <div class="footer-logo">
                    <img src="images/Logoredwhitepic2.png">
                </div>
            </div>
        </div>
    </div>
</section>

<!--social-icons-->
<div class="social-icons">
    <img src="images/facebook.png">
    <img src="images/instagram.png">
    <img src="images/twitter.png">
    <img src="images/linkedin.png">
</div>

<script>
        var menuBtn = document.getElementById("menuBtn");
        var sideNav = document.getElementById("sideNav");

        sideNav.style.right = "-250px";
        menuBtn.onclick = function() {
            if (sideNav.style.right == "-250px"){
                sideNav.style.right = "0";
                }
                else{
                    sideNav.style.right = "-250px";
                }
            }
            var scroll = new SmoothScroll('a[href*="#"]', {speed: 1000, speedAsDuration: true});
        </script>



    
</body>
</html>
