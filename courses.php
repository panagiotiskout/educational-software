<?php
session_start();
if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You have to log in first";
    header('location: loginpage.html');
}

if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location:  loginpage.html");
}
?>
<!DOCTYPE html>

<style>
  <?php include "cours.css" ?>
</style>
<head>
    <title>Courses</title>
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/c5f1eac028.js" crossorigin="anonymous"></script>

</head>
<body>
    <div class="banner">
        <div class=" navbar">
            <img src="logopro.png" class="logo">
            <ul>
            <li><a href="arxiki.php" >Home</a></li>
                    <li><a href="#information" >About Us</a></li>
                    <li><a href="#courses.php" >Courses</a></li>
                    <li><a href="#contact" >Contact</a></li>
                    <li><a href="loginpage.html"><i class="fa fa-user" style="font-size:36px"></i></a></li>
            </ul>
        </div>

        
       
          
         
       <?php if (isset($_SESSION['username'])) : ?>
             
        <div class="Wel">
             <p>
                             <h1>Welcome </h1>
                             <strong>
                                 <h1><?php echo $_SESSION['username']; ?></h1>
                             </strong>
                         </p>
        </div>
        <?php endif ?>
    </div>

    

    <section class="courses">

        <h3>YOUR COURSES</h3>

        <p>
            Here are your available courses!Choose your prefered course now and let's begin!
        </p>
        
            <div class="text-box">
                <h3>ANCIENT OLYMPIA</h3>
                <p>
                INTRODUCTION <br>
                LOCATION<BR>
                HISTORY<BR>
                BROWSE LOCATION
                  <BR>
                  <a href="olympia.php" > <button class="det">JOIN COURSE</button></a>

                </p>
            </div>
            
        
    </section>

    

    <section class="footer">
            
        <h1 class="footerH1">UNIPI TELECOM</h1>
        <div class="footerAM">
            <ul>
                <li><a href="#" >P20105</a></li>
                <li><a href="#" >P20xxx</a></li>
                <li><a href="#" >P20xxx</a></li>
            </ul>

        </div>
       

    </section>


    
</body>
</html>