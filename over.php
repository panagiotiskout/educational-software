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
    <head>
        <title>ANCIENT OLYMPIA</title>
        <link rel="stylesheet" href="olymp.css">
        
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
                <h1>ANCIENT OLYMPIA</h1>
                

                <div>
                   <a href="#s1"> <button class="hbut" type="button"><span></span>Ο ΜΕΣΟΣ ΟΡΟΣ ΣΟΥ ΕΙΝΑΙ ΠΑΝΩ ΑΠΟ 6</button></a>
                    

                </div>
            </div>


        </div>

        <section id="s1" class="tog">
            <h2>ΣΥΓΧΑΡΗΤΗΡΙΑ</h2>
            <button class="togbutton" onclick="functionToggle()">ΕΡΩΤΗΣΗ ΑΝΑΠΤΥΞΗΣ ΠΡΩΤΗ</button>
            <div id="div1"  class="chapter1">
               Αναπτύξτε παρακάτω όσα γνωρίζετε για την λειτουργία της αρχαίας Ολυμπίας κατα την περίοδο του 8ου και 7ου αιώνα π.Χ.
                <br>
                <form action="gradef.php" method="post">
                <textarea id="w3review" name="w3review" rows="4" cols="50"></textarea>
                <button  type="submit" id="submit"><span></span>Υποβολή απάντησης</button><br>
                </form>
            </div>
            <br>
            <button class="togbutton" onclick="functionToggle2()">ΕΡΩΤΗΣΗ ΑΝΑΠΤΥΞΗΣ ΔΕΥΤΕΡΗ</button>
            <div id="div2" class="chapter1">
            Αναπτύξτε παρακάτω τις σημαντικότερες ανασκαφές που έχουν γίνει στην περιοχή της Αρχαίας Ολυμπίας.
            <br>
                <form action="gradef.php" method="post">
                <textarea id="w3review" name="w3review" rows="4" cols="50"></textarea>
                <button  type="submit" id="submit"><span></span>Υποβολή βαθμού</button><br>
                </form>
            </div>
            <br>    
           
        </section>

        <section class="exp">
           <div class="info">
                <h2>ΠΕΡΙΣΣΟΤΕΡΑ ΓΙΑ ΤΗΝ ΑΡΧΑΙΑ ΟΛΥΜΠΙΑ</h2>
                
                <p>
                    
                    Ο Δήμος Αρχαίας Ολυμπίας στο πλαίσιο του εορτασμού της Ολυμπιακής ημέρας, που έχει καθιερωθεί και εορτάζεται κάθε χρόνο στις 23 Ιουνίου σε παγκόσμιο επίπεδο, με στόχο την προβολή των ολυμπιακών αξιών και του ολυμπιακού κινήματος γενικότερα, οργανώνει σχετικές εκδηλώσεις αφιερωμένες πάντοτε στον πρώτο Πρόεδρο της Διεθνούς Ολυμπιακής Επιτροπής Δημήτριο Βικέλα, ο οποίος συνέβαλλε καθοριστικά στην επιτυχημένη αναβίωση των Ολυμπιακών Αγώνων, αλλά και στην μετέπειτα παγίωση του θεσμού.
                </p>

                <a href="https://docs.google.com/forms/d/e/1FAIpQLScwXgqixb5K5leMdcCLOWtoTlrogSTXS2UwRrVKBpFPhHvh6g/viewform?usp=sf_link"> <button class="hbut" type="button"><span></span>Quiz</button></a>
                <form action="grade4.php" method="post">
                <input type="text" placeholder="Βαθμός" name="grade" label="Βαθμός"> </input>
                <button  type="submit" id="submit"><span></span>Υποβολή βαθμού</button><br>
                </form>
                <h3>FINAL TEST</h3>
                You are requested to solve one final quiz, including questions about everythng you were taught in this course.<br>
                <a href="https://docs.google.com/forms/d/e/1FAIpQLSfNQTjaZejdTT20rfV_aEcWm_Vaf6KdJchrTcJcnXFmxPZ1tw/viewform?usp=sf_link"> <button class="hbut" type="button"><span></span>Quiz</button></a>
                <form action="grade5.php" method="post">
                <input type="text" placeholder="Βαθμός" name="grade" label="Βαθμός"> </input>
                <button  type="submit" id="submit"><span></span>Υποβολή βαθμού</button><br>
                </form>
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

        

        <script>
            function functionToggle(){
                var x = document.getElementById("div1");
                var y = document.getElementById("div2");
                var z = document.getElementById("div3");
                if (x.style.display === "none"){
                    x.style.display = "block";
                    if(y.style.display==="block"){
                        y.style.display="none";
                    }

                    if(z.style.display="block"){
                        z.style.display="none";
                    }
                }else{
                    x.style.display = "none";
                }
            }

            function functionToggle2(){
                var x = document.getElementById("div2");
                var y = document.getElementById("div1");
                var z = document.getElementById("div3");
                if (x.style.display === "none"){
                    x.style.display = "block";
                    if(y.style.display==="block"){
                        y.style.display="none";
                    }

                    if(z.style.display="block"){
                        z.style.display="none";
                    }
                }else{
                    x.style.display = "none";
                }
            }

            function functionToggle3(){
                var x = document.getElementById("div3");
                var y = document.getElementById("div2");
                var z = document.getElementById("div1");
                if (x.style.display === "none"){
                    x.style.display = "block";
                    if(y.style.display==="block"){
                        y.style.display="none";
                    }

                    if(z.style.display="block"){
                        z.style.display="none";
                    }
                }else{
                    x.style.display = "none";
                }
            }
        </script>

    </body>
    </html>