<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="theme-color" content="#3498db">
        <meta property="og:image" content="https://polaris.iitbhilai.ac.in/img/2017_gymkhana.jpg" />

        <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900|Bitter:700|Dancing+Script:700" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

        <link rel="stylesheet" href="css/animate.css">
        <link rel="stylesheet" href="css/style_v3.css">

        <title>Polaris - Student Mentorship Program</title>


        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-121551593-1"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          gtag('config', 'UA-121551593-1');
        </script>


        <!-- Script for refresh button -->
        <script>
        function refresh_live_updates() {
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("live_updates").innerHTML = this.responseText;
                }
            };
            xmlhttp.open("GET", "Live_updates.php", true);
            xmlhttp.send();
        }
        </script>

    </head>

    <body>

<?php require_once('header.php'); ?>

        <div id="myModal--1" class="modal">
            <div class="modal-content">
                <div class="modal-header">
                <span class="close">&times;</span>
                <h2>Checklist for Freshers 2022</h2>
                </div>
                <div class="modal-body">
                    <ul>

                    <!-- <li><strong>Important Notice</strong> PG Orientation Schedule <a href="PG_orientation_2021.pdf" target="_blank" class="notification">Click Here!</a></li> -->
                    <li><strong>Important Notice</strong> BTech-2022 Orientation Schedule <a href="UG_orientation_2022.pdf" target="_blank" class="notification">Click Here!</a></li>

                    <!-- <li><strong>Important Notice</strong> Admission due to covid <a href="Notice on admission due to covid.pdf" target="_blank" class="notification">Click Here!</a></li>

                        <li><strong>Important Notice</strong> Registration and Orientation program for the new BTech students 2020 <a href="orientation.pdf" target="_blank" class="notification">Click Here!</a></li> -->

                        
                        <li>Please see the <a href="documents.php" class="notification">Documents</a> page for registration forms, fee structure, and updated loan details  <br>
                        

                        
                        <li>For any queries regarding IIT Bhilai and 2022-23 admissions please feel free to contact any of the <a href="mentors.php" class="notification">Mentors.</a><br>

            


                    </ul>
                </div>
            </div>

        </div>

        <div id="myModal--2" class="modal">

            <!-- Modal content -->
            <div class="modal-content">
               <div class="modal-header">
               <span class="close">&nbsp;&nbsp;&nbsp;&nbsp; &times;</span>
               <span class="close" onclick="refresh_live_updates()">&#8635;</span>
               <h2>Live Updates</h2>
               </div>
               <div class="modal-body">
                   <ul id="live_updates">
                        <li>Keep checking this page for live updates</li>
                       <li>Live Updates will be started from 22nd, 8 am</li>
                        <?php
                        $text = file_get_contents('https://docs.google.com/document/u/1/d/1RvDB_aho5oKb1-YuE_0JbTd_ApOmyXkLohNYjDJIyJQ/export?format=txt');

                        $lines=explode("\r\n",$text);

                        foreach ($lines as $one_line) {
                            echo "<li>$one_line</li>";
                        }
                        ?>
                   </ul>
               </div>
           </div>

       </div>



        <header class="header header__home">
            <div class="container">
                <div class="header__hero-box">
                    <h1 class="heading-primary">Student Mentorship Program</h1>
                    <p class="heading-subtitle">Of the Student, By the Student, For the Student</p>
                    <a href="Brochure 2022.pdf" class="btn btn-download" download>Brochure 2022&nbsp; <i class="fas fa-download"></i></a><br/>
                    <!-- <a href="#" class="btn btn-live" id="modalBtn">Live Updates &nbsp; <i class="fas fa-sync"></i></a> -->
                </div>
            </div>
        </header>

        <section class="section">
            <div class="container">
                <div class="introduction">
                    <h2 class="heading-secondary">Welcome to <br><span>Indian Institute of Technology Bhilai</span></h2>
                    <p class="introduction__text">A hearty "Congratulations!!" to all the incoming freshers as you begin an exciting and rewarding chapter in your life. Quench your curiosity by exploring this website and make yourself familiar with life at IIT Bhilai. We look forward to guide you in this journey of exploring your passion. Feel free to post any queries/doubts on "Queries" Page.</p>
                </div>
            </div>
        </section>

        <div class="line-break"></div>

        <section class="section">
            <div class="container">
                <h2 class="heading-secondary">Student Mentorship Program</h2>
                <div class="info">
                    <h3 class="heading-tertiary"><i class="far fa-dot-circle"></i> Our Objective</h3>
                    <p class="info__text">A lot of things runs into a Freshie’s mind during his initial stay at the institute. We are here to clear those clouds of apprehensiveness. Here, we aim to provide info to all the freshers and give them insight to the life @iitbhilai. If you are more intrigued, then you can simply contact us and we would have your question answered in the best possible way.</p>
                </div>
                <div class="info">
                    <h3 class="heading-tertiary"><i class="far fa-dot-circle"></i> About this website</h3>
                    <p class="info__text">This site is of the students, by the students and for the students of IIT Bhilai. Here you will get an intimate view of this institute and its people. If you are a fresher at IIT Bhilai, this site is the right place for you to know more and make yourself familiar with the institute.</p>
                </div>
                <div class="info">
                    <h3 class="heading-tertiary"><i class="far fa-dot-circle"></i> Who are the mentors?</h3>
                    <p class="info__text">They are a group of seniors who will be helping the juniors in exploring their options at the same time in progressing forward. This site is an online implementation of the mentorship scheme. An offline version of this will involve a senior being assigned as a mentor to a group of freshers to guide them in making well informed decisions through their life at IIT Bhilai.</p>
                </div>
            </div>
        </section>

        <div class="line-break"></div>

        <section class="section">
            <div class="container">
                <div class="message">
                    <h2 class="heading-secondary">Message from <br><span>Council of Student Affairs</span></h2>
                    <p class="message__text"><span>Hello everyone,</span> <br><br>
                    On behalf of the Council of Student affairs (CoSA) I would like to welcome you all to this prestigious Institute. I can understand it was not easy and the past few years have been tough for you all but trust me this place will give you ample opportunities to live up to your dreams. The journey till now was a marathon between lakhs of aspirants preparing to get into the best of colleges and I would like to congratulate you all for making it through. But from now things will change, there won’t be any marathon but you racing with your dreams. Every student of this institute is special and will excel wherever he/she goes. Upto this point, the dream was to be here. From now on, the real challenge will start to select a career stream, work for it and finally achieve it. This is a place which will build that spark inside you to live your dreams to the fullest, whether it be sports, culturals or science and technology, you won’t be missing any opportunity at this place. So at last, congratulations to all of you and welcome to IIT Bhilai.
                    </p><br>
                    <p class="message__byline">With best wishes,<br>Yash Teckchandani</p>
                    <div class="row">
                        <div class="dev">
                             <div class="col-1-of-4">
                                <figure class="dev__shape">
                                    <img src="img/President.jpg" alt="Yash Teckchandani" class="dev__img dev__img--president">
                                    <figcaption class="dev__caption">Yash Teckchandani</figcaption>
                                </figure>
                                <div class="dev__name">President, CoSA</div>
                                <a href="mailto:President_CoSA@iitbhilai.ac.in" class="dev__profile">
                                    <i class="far fa-envelope dev__profile--icon"></i>
                                </a>
                                <!--<a href="" class="dev__profile">
                                    <i class="fab fa-facebook-f dev__profile--icon"></i>
                                </a> -->
                                <!-- <div class="dev__phone">
                                    <i class="fas fa-phone dev__phone--icon"></i>&nbsp; +91 &dash; 7470448887
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="line-break"></div>

        <section class="section">
            <div class="container">
                <h2 class="heading-secondary">Campus Tour</h2>
            </div>
            <div class="row">
                <div class="col-1-of-2">
                    <div class="campus">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/ukd0R6y6lq8" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-1-of-2">
                    <div class="campus">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/25hhbQJ_NRw" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </section>

        <div class="line-break"></div>

        <section class="section">
            <div class="container">
                <h2 class="heading-secondary">Gallery</h2>
                <div class="gallery">
                    <div class="siema">
                        <img src="img/gallery/g1.JPG" alt="1-min"/>
                        <img src="img/gallery/g2.JPG" alt="2-min"/>
                        <img src="img/gallery/g3.JPG" alt="3-min"/>
                        <img src="img/gallery/g4.JPG" alt="4-min"/>
                        <img src="img/gallery/g5.jpg" alt="5-min"/>
                        <img src="img/gallery/g6.JPG" alt="6-min"/>
                        <img src="img/gallery/g7.JPG" alt="7-min"/>
                        <img src="img/gallery/g8.jpg" alt="8-min"/>
                    </div>
                    <div class="btn-siema">
                        <div class="btn-prev prev"><i class="fas fa-chevron-circle-left"></i></div>
                        <div class="btn-next next"><i class="fas fa-chevron-circle-right"></i></div>
                        <p class="warn">Best viewed in Desktops!</p>
                    </div>
                </div>
            </div>
        </section>


        <div class="line-break"></div>


        <section class="section">
            <div class="container">
                <h2 class="heading-secondary">Developers</h2>
            </div>

            <div class="row">
                <div class="dev">
                    <div class="col-1-of-3">
                        <figure class="dev__shape">
                            <img src="img/devs/sharad.jpg" alt="Sharad Roy" class="dev__img">
                            <figcaption class="dev__caption">Sharad Roy</figcaption>
                        </figure>
                        <div class="dev__name"><strong>Sharad Roy</strong><br/>Front-End Developer</div>
                        <a href="mailto:sharadr@iitbhilai.ac.in" class="dev__profile">
                            <i class="far fa-envelope dev__profile--icon"></i>
                        </a>
                        <a href="https://www.facebook.com/sharad.roy29" target="_blank" class="dev__profile">
                            <i class="fab fa-facebook-f dev__profile--icon"></i>
                        </a>
                        <div class="dev__phone">
                            &nbsp;
                        </div>
                    </div>

                    <div class="col-1-of-3">
                        <figure class="dev__shape">
                            <img src="img/devs/pramodh.jpeg" alt="Sri Pramodh" class="dev__img">
                            <figcaption class="dev__caption">Sri Pramodh</figcaption>
                        </figure>
                        <div class="dev__name"><strong>Sri Pramodh</strong><br/>Back-End Developer</div>
                        <a href="mailto:rachuris@iitbhilai.ac.in" class="dev__profile">
                            <i class="far fa-envelope dev__profile--icon"></i>
                        </a>
                        <a href="https://www.facebook.com/pramodhrachuri" target="_blank" class="dev__profile">
                            <i class="fab fa-facebook-f dev__profile--icon"></i>
                        </a>
                        <!--<div class="dev__phone">
                            &nbsp; 
                        </div>  -->
                    </div> 

                    <div class="col-1-of-3">
                        <figure class="dev__shape">
                            <img src="img/devs/ahaan.jpg" alt="Ahaan Dabholkar" class="dev__img">
                            <figcaption class="dev__caption">Ahaan Dabholkar</figcaption>
                        </figure>
                        <div class="dev__name"><strong>Ahaan Dabholkar</strong><br/>Back-End Developer</div>
                        <a href="mailto:ahaand@iitbhilai.ac.in" class="dev__profile">
                            <i class="far fa-envelope dev__profile--icon"></i>
                        </a>
                        <a href="https://www.facebook.com/ahaan.dabholkar" target="_blank" class="dev__profile">
                            <i class="fab fa-facebook-f dev__profile--icon"></i>
                        </a>
                        <div class="dev__phone">
                            <i class="fas fa-phone dev__phone--icon"></i>&nbsp; +91 &dash; 9473751641
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="dev">
                    <!-- <div class="col-1-of-4">&nbsp;</div> -->

                    <div class="col-1-of-3">
                        <figure class="dev__shape">
                            <img src="img/devs/aniket.jpg" alt="Aniket Raj" class="dev__img">
                            <figcaption class="dev__caption">Aniket Raj</figcaption>
                        </figure>
                        <div class="dev__name"><strong>Aniket Raj</strong><br/>Content Writer</div>
                        <a href="mailto:aniketr@iitbhilai.ac.in" class="dev__profile">
                            <i class="far fa-envelope dev__profile--icon"></i>
                        </a>
                        <a href="https://www.facebook.com/profile.php?id=100010720866538" target="_blank" class="dev__profile">
                            <i class="fab fa-facebook-f dev__profile--icon"></i>
                        </a>
                        <div class="dev__phone">
                            <i class="fas fa-phone dev__phone--icon"></i>&nbsp; +91 &dash; 9521205979
                        </div>
                    </div>

                    <div class="col-1-of-3">
                        <figure class="dev__shape">
                            <img src="img/devs/gaurav.jpg" alt="Gaurav Verma" class="dev__img">
                            <figcaption class="dev__caption">Gaurav Verma</figcaption>
                        </figure>
                        <div class="dev__name"><strong>Gaurav Verma</strong><br/>Content Writer</div>
                        <a href="mailto:gauravv@iitbhilai.ac.in" class="dev__profile">
                            <i class="far fa-envelope dev__profile--icon"></i>
                        </a>
                        <a href="https://www.facebook.com/gv99gv" target="_blank" class="dev__profile">
                            <i class="fab fa-facebook-f dev__profile--icon"></i>
                        </a>
                        
                    </div>

                    <div class="col-1-of-3">
                        <figure class="dev__shape">
                            <img src="img/devs/saksham.jpg" alt="Saksham Bhushan" class="dev__img">
                            <figcaption class="dev__caption">Saksham Bhushan</figcaption>
                        </figure>
                        <div class="dev__name"><strong>Saksham Bhushan</strong><br/>Website Manager - 2019</div>
                        <a href="mailto:sakshamb@iitbhilai.ac.in" class="dev__profile">
                            <i class="far fa-envelope dev__profile--icon"></i>
                        </a>
                        <a href="https://www.facebook.com/saksham291" target="_blank" class="dev__profile">
                            <i class="fab fa-facebook-f dev__profile--icon"></i>
                        </a>
                        <div class="dev__phone">
                            <i class="fas fa-phone dev__phone--icon"></i>&nbsp; +91 &dash; 8299278436
                        </div>
                    </div>
                    <!-- <div class="col-1-of-4">&nbsp;</div> -->
                </div>
            </div>

            <div class="row">
                <div class="dev">
                    <!-- <div class="col-1-of-4">&nbsp;</div> -->

                    <div class="col-1-of-2">
                        <figure class="dev__shape">
                            <img src="img/devs/prachir.jpg" alt="Prachir Agrawal" class="dev__img">
                            <figcaption class="dev__caption">Prachir Agrawal</figcaption>
                        </figure>
                        <div class="dev__name"><strong>Prachir Agrawal</strong><br/>Website Manager - 2020</div>
                        <a href="mailto:prachira@iitbhilai.ac.in" class="dev__profile">
                            <i class="far fa-envelope dev__profile--icon"></i>
                        </a>
                        <a href="https://www.facebook.com/prachir.agrawal.5" target="_blank" class="dev__profile">
                            <i class="fab fa-facebook-f dev__profile--icon"></i>
                        </a>
                        <div class="dev__phone">
                            <i class="fas fa-phone dev__phone--icon"></i>&nbsp; +91 &dash; 8826678228
                        </div>
                    </div>

                    <div class="col-1-of-2">
                        <figure class="dev__shape">
                            <img src="img/devs/prakanshul.jpg" alt="Prakanshul Saxena" class="dev__img">
                            <figcaption class="dev__caption">Prakanshul Saxena</figcaption>
                        </figure>
                        <div class="dev__name"><strong>Prakanshul Saxena</strong><br/>Website Manager - 2020</div>
                        <a href="mailto:prakanshuls@iitbhilai.ac.in" class="dev__profile">
                            <i class="far fa-envelope dev__profile--icon"></i>
                        </a>
                        <a href="https://www.facebook.com/prakanshul.saxena" target="_blank" class="dev__profile">
                            <i class="fab fa-facebook-f dev__profile--icon"></i>
                        </a>
                        <div class="dev__phone">
                            <i class="fas fa-phone dev__phone--icon"></i>&nbsp; +91 &dash; 8319446110
                        </div>
                    </div>


                    <!-- <div class="col-1-of-4">&nbsp;</div> -->
                </div>
            </div>
             
            
            
             <div class="row">
                <div class="dev">
                    <!-- <div class="col-1-of-4">&nbsp;</div> -->

                    <div class="col-1-of-2">
                        <figure class="dev__shape">
                            <img src="img/devs/nikhil.jpg" alt="Nikhil Chaudhary" class="dev__img">
                            <figcaption class="dev__caption">Nikhil Chaudhary</figcaption>
                        </figure>
                        <div class="dev__name"><strong>Nikhil Chaudhary</strong><br/>Website Manager - 2021</div>
                        <a href="mailto:nikhilch@iitbhilai.ac.in" class="dev__profile">
                            <i class="far fa-envelope dev__profile--icon"></i>
                        </a>
                    
                        <div class="dev__phone">
                            <i class="fas fa-phone dev__phone--icon"></i>&nbsp; +91 &dash; 8529781270
                        </div>
                    </div>

                    <div class="col-1-of-2">
                        <figure class="dev__shape">
                            <img src="img/devs/vanisha.jpg" alt="Vanisha Agrawal" class="dev__img">
                            <figcaption class="dev__caption">Vanisha Agrawal</figcaption>
                        </figure>
                        <div class="dev__name"><strong>Vanisha Agrawal</strong><br/>Website Manager - 2021</div>
                        <a href="mailto:vanishaagrawal@iitbhilai.ac.in" class="dev__profile">
                            <i class="far fa-envelope dev__profile--icon"></i>
                        </a>
                        <a href="https://www.facebook.com/vanisha.agrawal.3" target="_blank" class="dev__profile">
                            <i class="fab fa-facebook-f dev__profile--icon"></i>
                        </a>
                        <div class="dev__phone">
                            <i class="fas fa-phone dev__phone--icon"></i>&nbsp; +91 &dash; 9981090998
                        </div>
                    </div>


                    <!-- <div class="col-1-of-4">&nbsp;</div> -->
                </div>
            </div>

            <div class="row">
                <div class="dev">
                    <!-- <div class="col-1-of-4">&nbsp;</div> -->

                    <div class="col-1-of-2">
                        <figure class="dev__shape">
                            <img src="img/devs/aditya.jpeg" alt="Aditya Sankhla" class="dev__img">
                            <figcaption class="dev__caption">Aditya Sankhla</figcaption>
                        </figure>
                        <div class="dev__name"><strong>Aditya Sankhla</strong><br/>Website Manager - 2022</div>
                        <a href="mailto:adityasa@iitbhilai.ac.in" class="dev__profile">
                            <i class="far fa-envelope dev__profile--icon"></i>
                        </a>
                        <a href="https://www.instagram.com/adismort" target="_blank" class="dev__profile">
                            <i class="fab fa-instagram dev__profile--icon"></i>
                        </a>
                    
                        <div class="dev__phone">
                            <i class="fas fa-phone dev__phone--icon"></i>&nbsp; +91 &dash; 8369504378
                        </div>
                    </div>

                    <div class="col-1-of-2">
                        <figure class="dev__shape">
                            <img src="img/devs/ravinder.jpg" alt="Ravinder Sharma" class="dev__img">
                            <figcaption class="dev__caption">Ravinder Sharma</figcaption>
                        </figure>
                        <div class="dev__name"><strong>Ravinder Sharma</strong><br/>Website Manager - 2022</div>
                        <a href="mailto:ravindersh@iitbhilai.ac.in" class="dev__profile">
                            <i class="far fa-envelope dev__profile--icon"></i>
                        </a>
                        <a href="https://instagram.com/chief_ravinder/" target="_blank" class="dev__profile">
                            <i class="fab fa-instagram dev__profile--icon"></i>
                        </a>
                        <div class="dev__phone">
                            <i class="fas fa-phone dev__phone--icon"></i>&nbsp; +91 &dash; 9717503220
                        </div>
                    </div>


                    <!-- <div class="col-1-of-4">&nbsp;</div> -->
                </div>
            </div>
             <div class="row">
                <div class="dev">
                    <!-- <div class="col-1-of-4">&nbsp;</div> -->

                    <div class="col-1-of-2">
                        <figure class="dev__shape">
                            <img src="img/devs/rohit.jpg" alt="Rohit Ashwani" class="dev__img">
                            <figcaption class="dev__caption">Rohit Ashwani</figcaption>
                        </figure>
                        <div class="dev__name"><strong>Rohit Ashwani</strong><br/>Website Manager - 2022</div>
                        <a href="mailto:rohitas@iitbhilai.ac.in" class="dev__profile">
                            <i class="far fa-envelope dev__profile--icon"></i>
                        </a>
                        <a href="https://www.instagram.com/rohitashwani288/" target="_blank" class="dev__profile">
                            <i class="fab fa-instagram dev__profile--icon"></i>
                        </a>                    
                        <div class="dev__phone">
                            <i class="fas fa-phone dev__phone--icon"></i>&nbsp; +91 &dash; 9260961237
                        </div>
                    </div>

                    <div class="col-1-of-2">
                        <figure class="dev__shape">
                            <img src="img/devs/tushar.jpg" alt="Tushar Bansal" class="dev__img">
                            <figcaption class="dev__caption">Tushar Bansal</figcaption>
                        </figure>
                        <div class="dev__name"><strong>Tushar Bansal</strong><br/>Website Manager - 2022</div>
                        <a href="mailto:tusharbansal@iitbhilai.ac.in" class="dev__profile">
                            <i class="far fa-envelope dev__profile--icon"></i>
                        </a>
                        <div class="dev__phone">
                            <i class="fas fa-phone dev__phone--icon"></i>&nbsp; +91 &dash; 7048905680
                        </div>
                    </div>


                    <!-- <div class="col-1-of-4">&nbsp;</div> -->
                </div>
            </div>

        </section>

<?php require_once('footer.php'); ?>
        <script src="js/siema.min.js"></script>
        <script>
            const mySiema = new Siema({
                duration: 600,
                easing: 'ease-out',
                loop: true
            });

            document.querySelector('.prev').addEventListener('click', () => mySiema.prev());
            document.querySelector('.next').addEventListener('click', () => mySiema.next());

            //Modal for Live updates
            var live = document.getElementById('myModal--2');
            //var btn = document.getElementById("modalBtn");
            var span = document.getElementsByClassName("close")[1];
            // btn.onclick = function() {
            //     live.style.display = "block";
            // }
            span.onclick = function() {
                live.style.display = "none";
            }
            window.onclick = function(event) {
                if (event.target == live) {
                    live.style.display = "none";
                }
            }

            //Modal for Checklist
            $(window).load(function(){
                $('.page-loader').fadeOut();
                var modal = document.getElementById('myModal--1');
                var span = document.getElementsByClassName("close")[0];
                setTimeout(function(){
                    modal.style.display = "block";
                }, 2000)
                span.onclick = function() {
                    modal.style.display = "none";
                }
                // When the user clicks anywhere outside of the modal, close it
                window.onclick = function(event) {
                    if (event.target == modal) {
                        modal.style.display = "none";
                    }
                }
            });
        </script>


    </body>

</html>
