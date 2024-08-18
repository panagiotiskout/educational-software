<!DOCTYPE html>
    <head>
        <title>JAVASCRIPT</title>
        <link rel="stylesheet" href="java.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>

    <body>

        <div class="banner">
            <div class=" navbar">
                <img src="logopro.png" class="logo">
                <ul>
                    <li><a href="#" >Home</a></li>
                    <li><a href="#" >About Us</a></li>
                    <li><a href="#" >Courses</a></li>
                    <li><a href="#" >Contact</a></li>
                    <li><a href="#"><i class="fa fa-user" style="font-size:36px"></i></a></li>

                </ul>
            </div>


            <div class="content">
                <h1>WELCOME TO JAVASCRIPT</h1>
                

                <div>
                   <a href="#s1"> <button class="hbut" type="button"><span></span>START YOUR COURSE</button></a>
                    

                </div>
            </div>


        </div>

        <section id="s1" class="tog">
            <h2>ΠΡΩΤΗ ΕΝΟΤΗΤΑ</h2>
            <button class="togbutton" onclick="functionToggle()">ΕΙΣΑΓΩΓΗ ΣΤΗΝ JAVASCRIPT</button>
            <div id="div1"  class="chapter1">
                asdfasdfasdfasdf
                <br>
                <a href="#quiz"> <button class="hbut" type="button"><span></span>Quiz</button></a>
            </div>
            <br>
            <button class="togbutton" onclick="functionToggle2()">AMATUER CODING</button>
            <div id="div2" class="chapter1">
                asdfasdfasdfasdf
                <br>
                <a href="#quiz"> <button class="hbut" type="button"><span></span>Quiz</button></a>
            </div>
            <br>    
            <button class="togbutton" onclick="functionToggle3()">EXPERT CODING</button>
            <div id="div3" class="chapter1">
                asdfasdfasdfasdf
                <br>
                <a href="#quiz"> <button class="hbut" type="button"><span></span>Quiz</button></a>
            </div>
        </section>

        <section class="exp">
           <div class="info">
                <h2>EXPERT CODING</h2>
                
                <p>
                    afdiausdgfiuagsduifgauys
                    <br>
                    adfsuaysgdufygasdufguaysgdfuyagsudfg
                    <br>
                    asodfhuiasgdfiugasuid
                </p>

                <a href="#quiz"> <button class="hbut" type="button"><span></span>Quiz</button></a>
            </div>

           
            <div class="info">
                <h2>PROFESSIONAL CODING</h2>
                <p>
                    afdiausdgfiuagsduifgauys
                    <br>
                    adfsuaysgdufygasdufguaysgdfuyagsudfg
                    <br>
                    asodfhuiasgdfiugasuid
                </p>

                <a href="#quiz"> <button class="hbut" type="button"><span></span>Quiz</button></a>
            </div>

            <div class="final">
                <h3>FINAL TEST</h3>
                You are requested to solve one final quiz, including questions about everythng you were taught in this course.<br>
                <a href="#quiz"> <button class="hbut" type="button"><span></span>Quiz</button></a>
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