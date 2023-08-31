<?php
session_start();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
        <link rel="stylesheet" href="aboutuscss.css">
        <link rel="stylesheet" href="css/tlmcss.css">
    </head>
    <body>
        <?php include 'header.inc'; ?> 
                <section>
            <div class="container">
                <h1 class="heading">Meet the team</h1>
                <div class="card-wrapper">


                    <div class="card">
                        <img src="images/SIT.PNG" alt="card background" class="card-img">
                        <img src="images/ugly1.png" alt="profile image" class="profile-img">
                        <h1>John Doe</h1>
                        <p class="job-title">Professional Eater</p>
                        <p class="about">
                            I Design, I Code, I Eat. Clean Code
                        </p>
                        <a href="#" class="btn">Contact</a>
                        <ul class="social-media">
                            <li><a href="https://www.facebook.com/jjunsheng.ong/"><i class="fab fa-facebook-square"></i></a></li>
                            <li><a href="https://www.twitter.com/jjunsheng"><i class="fab fa-twitter-square"></i></a></li>
                            <li><a href="https://www.instagram.com/jjunsheng"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>

                    <div class="card">
                        <img src="images/SIT.PNG" alt="card background" class="card-img">
                        <img src="images/ugly2.png" alt="profile image" class="profile-img">
                        <h1>JiunYew</h1>
                        <p class="job-title">Front-End Web Developer</p>
                        <p class="about">
                            Development of Graphical user interface of a website, through the user of HTML,CSS,JavaScript
                        </p>
                        <a href="#" class="btn">Contact</a>
                        <ul class="social-media">
                            <li><a href="https://www.facebook.com/jiunyew.lim/"><i class="fab fa-facebook-square"></i></a></li>
                            <li><a href="https://www.twitter.com/jiunyew"><i class="fab fa-twitter-square"></i></a></li>
                            <li><a href="https://www.instagram.com/jiunyew183"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>



                    <div class="card">
                        <img src="images/SIT.PNG" alt="card background" class="card-img">
                        <img src="images/ugly3.png" alt="profile image" class="profile-img">
                        <h1>John Doe</h1>
                        <p class="job-title">Lead Designer</p>
                        <p class="about">
                            Unique Writer Unanimous Seeking Underdog Games And Repositories
                        </p>
                        <a href="#" class="btn">Contact</a>
                        <ul class="social-media">
                            <li><a href="https://www.facebook.com/AaronNg0412/"><i class="fab fa-facebook-square"></i></a></li>
                            <li><a href="https://www.twitter.com/Aaronng888"><i class="fab fa-twitter-square"></i></a></li>
                            <li><a href="https://www.instagram.com/aaronng888"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>

                    <div class="card">
                        <img src="images/SIT.PNG" alt="card background" class="card-img">
                        <img src="images/ugly4.png" alt="profile image" class="profile-img">
                        <h1>Li Yunzhi</h1>
                        <p class="job-title">Resident Sleeper</p>
                        <p class="about">
                            Giving emotional support and suggesting what to eat for the team
                        </p>
                        <a href="#" class="btn">Contact</a>
                        <ul class="social-media">
                            <li><a href="https://www.facebook.com/yunzhi.li/"><i class="fab fa-facebook-square"></i></a></li>
                            <li><a href="https://www.twitter.com/Ricee230"><i class="fab fa-twitter-square"></i></a></li>
                            <li><a href="https://www.instagram.com/Rice2_30"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>

                    <div class="card">
                        <img src="images/SIT.PNG" alt="card background" class="card-img">
                        <img src="images/ugly5.png" alt="profile image" class="profile-img">
                        <h1>John Doe</h1>
                        <p class="job-title">World Champion Gymnastics</p>
                        <p class="about">
                            I am able to make a difference in the world of sport where height matter.
                        </p>
                        <a href="#" class="btn">Contact</a>
                        <ul class="social-media">
                            <li><a href="https://www.facebook.com/xavtobiastan"><i class="fab fa-facebook-square"></i></a></li>
                            <li><a href="https://www.instagram.com/xavtobias/"><i class="fab fa-twitter-square"></i></a></li>
                            <li><a href="https://www.instagram.com/xavtobias"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>

                    <div class="card">
                        <img src="images/SIT.PNG" alt="card background" class="card-img">
                        <img src="images/ugly6.png" alt="profile image" class="profile-img">
                        <h1>Keith Yeo</h1>
                        <p class="job-title">Intern</p>
                        <p class="about">
                            Intern at S.Park 
                        </p>
                        <a href="#" class="btn">Contact</a>
                        <ul class="social-media">
                            <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter-square"></i></a></li>
                            <li><a href="https://www.instagram.com/keithyzy/"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>

                </div>
            </div>
        </section>
        <h1>Our Address</h1>
        <div id="googleMap" style="width:100%;height:400px;"></div>

        <script>
            function myMap() {
                var myLatlng = new google.maps.LatLng(1.307733213513702, 103.77808942186459);
                var mapProp = {
                    center: myLatlng,
                    zoom: 15,
                };
                var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);
                var marker = new google.maps.Marker({
                    position: myLatlng,
                    map: map,
                    title: "SIT"
                });
            }
        </script>

        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBKhIeHS1L1zycUW2ngDHfLkOGmCvS3Gs0&callback=myMap"></script>
        <h2>Singapore Institute of Technology</h2>
        <br>
        <h3>Address:</h3> <h4>10 Dover Dr, Singapore 138683</h4>
        <?php include 'contactform.inc'; ?>  
        <?php include 'footer.inc'; ?>
    </body>
</html>