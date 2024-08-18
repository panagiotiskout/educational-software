<?php
session_start(); // Start the session
if (!isset($_SESSION['username'])) {
    header('Location: loginpage.html'); // Redirect to login page if not logged in
    exit();
}

$username = $_SESSION['username']; // Retrieve the username from the session
?>
<!DOCTYPE html>
    <head>
        <title>Education</title>
        <link rel="stylesheet" href="arx-css.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>

    <body>

        <div class="banner">
            <div class=" navbar">
                <img src="logopro.png" class="logo">
                <ul>
                <li><a href="arxiki.php" >Home</a></li>
                    <li><a href="#information" >About Us</a></li>
                    <li><a href="courses.php" >Courses</a></li>
                    <li><a href="#contact" >Contact</a></li>
                    <li><a href="loginpage.html"><i class="fa fa-user" style="font-size:36px"></i></a></li>
                </ul>
            </div>


            <div class="content">
                <h1>WELCOME TO EDUCATION PRO ||</h1>
                <p>LET'S START</p>

                <div>
                <a href="sundesi.html" >  <button type="button"><span></span>BECOME A USER</button></a>
                    <a href="#information" ><button type="button"><span></span>MORE INFO</button></a>

                </div>
            </div>
        </div>

       <section class="info">  
        <div class="inf" id="information"> 
            <h3> A FEW WORDS</h3>
            <hr>

            <p >
                Education pro || .This unique class aims to provide students with a comprehensive education in both programming and culture.
                  The programming component will cover fundamental languages like Python and JavaScript, algorithms, data structures,
                   and software development practices,
                   ensuring students gain a strong foundation in coding and problem-solving. 
                   Simultaneously, the cultural studies segment will delve into global cultural histories,
                    contemporary cultural dynamics, and the impact of technology on society. 
                    Through comparative analysis, students will explore how cultural narratives shape and are shaped by technological advancements.
                     By integrating these disciplines,
                 the class fosters a holistic educational experience, preparing students to navigate and influence a technologically-driven, culturally-rich world. 
                
            </p>

            <button type="button"><span></span>MORE INFO</button>
        </div>
       </section>

        <section class="footer">
            
            <h1 class="footerH1">EDUCATION PRO 2</h1>
            <div class="footerAM">
                <ul>
                    <li><a href="#" >P20105</a></li>
                    <li><a href="#" >P20xxx</a></li>
                    <li><a href="#" >P20xxx</a></li>
                </ul>

                <br>

                <h3>Contact Info</h3>
            <p id="contact">
            Email:pkoutsoud@gmai.com<br>

            Tel:2102324232<br>

            Tel:2103245453
            

            </p>
               

            </div>
           

        </section>

    </body>
</html>