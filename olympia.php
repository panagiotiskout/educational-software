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
                   <a href="#s1"> <button class="hbut" type="button"><span></span>START YOUR COURSE</button></a>
                    

                </div>
            </div>


        </div>

        <section id="s1" class="tog">
            <h2>ΠΡΩΤΗ ΕΝΟΤΗΤΑ</h2>
            <button class="togbutton" onclick="functionToggle()">ΓΕΝΙΚΑ</button>
            <div id="div1"  class="chapter1">
                Η Ολυμπία, υπήρξε το πιο δοξασμένο ιερό της αρχαίας Ελλάδας αφιερωμένο στον Δία. Ήταν ο τόπος διεξαγωγής των Ολυμπιακών Αγώνων οι οποίοι τελούνταν στο πλαίσιο των Ολυμπίων.

Η Ολυμπία ονομαζόταν Άλτις, δηλαδή Ιερό Άλσος. Ήταν κτισμένη στη βόρεια όχθη του ποταμού Αλφειού.
Εκεί βρισκόταν για περίπου χίλια χρόνια το χρυσελεφάντινο άγαλμα του Διός, έργο του Φειδία, το οποίο ήταν γνωστό στην αρχαιότητα ως ένα από τα επτά θαύματα του κόσμου
                <br>
                <a href="https://l.facebook.com/l.php?u=https%3A%2F%2Fdocs.google.com%2Fforms%2Fd%2Fe%2F1FAIpQLSeZixiu49GIFP1-iyl5lWP1pEpLaQ5DqbFYNgnYLghww5u1kg%2Fviewform%3Fusp%3Dsf_link%26fbclid%3DIwZXh0bgNhZW0CMTAAAR1pnNvYId_8vlujgnTLcoBNEpt-PL6AVbhT6dH2QsQPzAj4itU3Tx26iTs_aem_4MvQkoHZVdq6r2sp6j4hiQ&h=AT27TfISZr1-9qm4rMpFcNdA_6yMvW9wtjiU4H2lX050ncliNUNlkJ7gJfX-hjYEYdTq2EhJthpKtW9UK1fL33bLkFjQ-ChZzj945wPYcdhYPxMf77vZc1DQq_6qmZSyGZ98AjJzlDv1oTX-c4DI8A"> <button class="hbut" type="button"><span></span>Quiz</button></a>
                <form action="grade.php" method="post">
                <input type="text" placeholder="Βαθμός" name="grade" label="Βαθμός"> </input>
                <button  type="submit" id="submit"><span></span>Υποβολή βαθμού</button><br>
                </form>
            </div>
            <br>
            <button class="togbutton" onclick="functionToggle2()">ΑΡΧΑΙΟΛΟΓΙΚΕΣ ΑΝΑΣΚΑΦΕΣ</button>
            <div id="div2" class="chapter1">
                Η ανακάλυψη της Ολυμπίας οφείλεται στον Άγγλο Ρίτσαρντ Τσάντλερ το 1766 αλλά δεν υπήρξαν ανασκαφές, ενώ την περιοχή επεσκέφθησαν, με αρχαιολογικό ενδιαφέρον, ο Λουί Φρανσουά Σεμπαστιάν Φωβέλ  και οι Πουκεβίλ , Γκέλ , Κόκρελ  και Ληκ .Στις 10 Μαΐου 1829, ενάμιση χρόνο μετά τη ναυμαχία του Ναυαρίνου, Γάλλοι αρχαιολόγοι, η ονομαζόμενη «Επιστημονική Αποστολή του Μωριά», με επικεφαλής τον Λεόν-Ζαν-Ζοζέφ Ντυμπουά (τμήμα Αρχαιολογίας) και τον Γκιγιώμ-Αμπέλ Μπλουέ (τμήμα Αρχιτεκτονικής και Γλυπτικής) έσκαψαν το χώρο για πρώτη φορά. Η αποστολή πέρασε έξι εβδομάδες στο αρχαιολογικό χώρο.Τα περισσότερα από τα κτίρια αρχικά ήταν αόρατα, διότι, όπως σημείωσε ο Αμπέλ Μπλουέ, έπρεπε να είχαν καλυφθεί από ένα παχύ στρώμα ιζημάτων λόγω των συχνών υπερχειλίσεων των ποταμών Αλφειού και Κλαδέου.Μόνο ένα μεγάλο δωρικό κομμάτι στήλης ήταν ορατό. Είχε ήδη εντοπιστεί από προηγούμενους ταξιδιώτες επειδή οι κάτοικοι των γειτονικών χωριών είχαν σκάψει τάφους εκεί για να απελευθερώσουν την πέτρα, αλλά κανείς δεν το είχε αποδώσει με βεβαιότητα στο ναό του Δία.
                <br>
                <a href="https://l.facebook.com/l.php?u=https%3A%2F%2Fdocs.google.com%2Fforms%2Fd%2Fe%2F1FAIpQLSdkDiWoCHMETRjoS6i7BqaO0akXC1r_isJTSMV_2eiKy3w-Og%2Fviewform%3Fusp%3Dsf_link%26fbclid%3DIwZXh0bgNhZW0CMTAAAR1vmIFqqZQyuZW8YkfB9s3c1O6kmF-V9aRIonwOeF_WOxvAx2W7zuu2hR8_aem_uyYmtIlqInJCxEydY6pS_g&h=AT27TfISZr1-9qm4rMpFcNdA_6yMvW9wtjiU4H2lX050ncliNUNlkJ7gJfX-hjYEYdTq2EhJthpKtW9UK1fL33bLkFjQ-ChZzj945wPYcdhYPxMf77vZc1DQq_6qmZSyGZ98AjJzlDv1oTX-c4DI8A"> <button class="hbut" type="button"><span></span>Quiz</button></a>
                <form action="grade2.php" method="post">
                <input type="text" placeholder="Βαθμός" name="grade" label="Βαθμός"> </input>
                <button  type="submit" id="submit"><span></span>Υποβολή βαθμού</button><br>
                </form>
            </div>
            <br>    
            <button class="togbutton" onclick="functionToggle3()">ΙΣΤΟΡΙΑ</button>
            <div id="div3" class="chapter1">
                Οι απαρχές της Ολυμπίας είναι ελάχιστα γνωστές. Οι παλαιότερες ενδείξεις ανθρώπινης παρουσίας στην περιοχή, ανάγονται στην 4η χιλιετία π.Χ. εξ' αιτίας μεγάλου αριθμού οστράκων που βρέθηκαν στο βόρειο πρανές του Σταδίου. Επιπλέον, στους νότιους πρόποδες του Κρονίου λόφου, έχουν εντοπιστεί ευρήματα που δείχνουν ότι εκεί αναπτύχθηκαν τα πρώτα ιερά και οι προϊστορικές λατρείες. Για την περίοδο της 3ης χιλιετίας π.Χ., τα ευρήματα εκείνης της περιόδου, που βρέθηκαν είναι ένας μεγάλος τύμβος στα κατώτερα στρώματα του Πελοπίου (2150-2000 π.Χ.) και αψιδωτά κτήρια του οικισμού (2150-2000 π.Χ.).[2]

Τον 10ο αιώνα π.Χ. με 9ο αιώνα π.Χ. διαμορφώνεται ο ιερός χώρος της Άλτεως με την καθιέρωση της λατρείας του Δία. Την περίοδο αυτή, η Ολυμπία γίνεται ένας ιερός τόπος που προσείλκυε πολλούς προσκυνητές. Αυτό το πυκνό ρεύμα των επισκεπτών μαρτυρείται από το μεγάλο πλήθος αναθημάτων που έφταναν στη Ολυμπία όχι μόνο από τη γύρω περιοχή αλλά και από τόπους της Πελοποννήσου και Στερεάς Ελλάδας.[2] Τον 8ο αιώνα η φήμη της Ολυμπίας μεγάλωσε τόσο ώσπου έφτασε μέχρι την Ανατολή και Μεσοποταμία και μέχρι τη Δύση και κάτω Ιταλία. Σημαντικότατη τομή στην ιστορία της Ολυμπίας αποτέλεσε το έτος 776 π.Χ. όπου τότε κατά την παράδοση, ο Σπαρτιάτης Λυκούργος, πρέπει να πραγματοποίησε συμφωνία με τον βασιλιά της Ήλιδος, Ίφιτο,και τον βασιλιά της Πίσας Κλεοσθένη για την τέλεση λατρευτικών εορτών στην Ολυμπία. Μέρος της συμφωνίας ήταν ότι κατά τις εορτές θα επικρατούσε εκεχειρία σε ολόκληρη την Ελλάδα.
                <br>
                <a href="https://l.facebook.com/l.php?u=https%3A%2F%2Fdocs.google.com%2Fforms%2Fd%2Fe%2F1FAIpQLSc7ypg6R4Jp7FRK05PmRjMJVEeVZUqjYixou8TSoB5sbzDOVg%2Fviewform%3Fusp%3Dsf_link%26fbclid%3DIwZXh0bgNhZW0CMTAAAR1hKWW7a9skQObesZwRR_TsTBIwPJ-DtmXsE8hOyita5FFNg0dnWL4x_P0_aem_S1shZHoPwSKmf_Zkudnp0A&h=AT27TfISZr1-9qm4rMpFcNdA_6yMvW9wtjiU4H2lX050ncliNUNlkJ7gJfX-hjYEYdTq2EhJthpKtW9UK1fL33bLkFjQ-ChZzj945wPYcdhYPxMf77vZc1DQq_6qmZSyGZ98AjJzlDv1oTX-c4DI8A"> <button class="hbut" type="button"><span></span>Quiz</button></a>
                <form action="grade3.php" method="post">
                <input type="text" placeholder="Βαθμός" name="grade" label="Βαθμός"> </input>
                <button  type="submit" id="submit"><span></span>Υποβολή βαθμού</button><br>
                </form>
            </div>
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