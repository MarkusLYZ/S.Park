<?php
session_start();
?>

<html lang="en">

    <?php include 'header.inc'; ?>

<body>


        <div class="hero">
            <div class="container">
                <div class="main-heading">
                    <h1 class="title">Discover</h1><!-- comment -->
                    <h2 class="subtitle">Parking Spaces</h2>
                </div>
                <a href="#searchbar" class="btn btn-gradient">Quick Find
                    <span class="dots"><i class="fas fa-ellipsis-h"></i></span>
                </a>
            </div>
        </div>

        <section class="booking" id="searchbar">
            <div class="container">
                <form action="" class="form">
                    <div class="input-group">
                        <h5 class="section-head">
                            <span class="heading">Quick Search</span>
                            <span style="color:#fff;">Dont have time? Try this</span>
                        </h5>
                        <label for="destination" class="input-label">Destination</label><!-- comment -->
                        <input type="text" class="input" id="destination" >
                    </div>
                    <button class="btn form-btn btn-purple"><a id="mapsearch" href="#" target="_blank">Search</a>

                   <script type="text/javascript"><!-- comment -->                           
                            let addr = "tampines+carpark";                                         
                            var link = document.getElementById('mapsearch');
                          link.href = "http://maps.google.com/maps?q=" + addr;         
                        </script>
                        <span class="dots"><i class="fas fa-ellipsis-h"></i></span>
                        </button>
                    </form>
                </div>
            </section>
            <section class="carparks">
                <div class="container">
                    <h5 class="section-head">
                        <span class="heading">Client Reviews</span>
                        <span class="sub-heading">Your support is important to us</span>
                    </h5>
                    <div class="grid">
                       <div class="grid-item topcarparks">
                            <img src="./images/t_female1.jpg" alt="" class="carpark-image">
                            <h5 class="carpark-name">Annabelle Huang</h5>
                            <span class="carpark-price">S.Park is a parking service that I trust</span>
                            <div class="carpark-rating">
                                <i class="fas fa-star rating"></i>
                                <i class="fas fa-star rating"></i>
                                <i class="fas fa-star rating"></i>
                                <i class="fas fa-star rating"></i>
                                <i class="fas fa-star rating"></i>
                            </div>
                            <a href="booking.php" class="btn btn-gradient">Book Now
                                <span class="dots"><i class="fas fa-ellipsis-h"></i></span>
                            </a>
                        </div>

                        <div class="grid-item topcarparks">
                            <img src="./images/t_female.jpg" alt="" class="carpark-image">
                            <h5 class="carpark-name">Koh Hui Min</h5>
                            <span class="carpark-price">My Life has never been easier</span>
                            <div class="carpark-rating">
                                <i class="fas fa-star rating"></i>
                                <i class="fas fa-star rating"></i>
                                <i class="fas fa-star rating"></i>
                                <i class="fas fa-star rating"></i>
                                <i class="fas fa-star rating"></i>
                            </div>
                            <a href="booking.php" class="btn btn-gradient" target="_blank">Book Now
                                <span class="dots"><i class="fas fa-ellipsis-h"></i></span>
                            </a>
                        </div>

                    </div>
                </div>
            </section>
            <section class="offer">
                <div class="container">
                    
                    <div class="offer-content">
                        <div class ="discount">
                            50% off
                        </div>
                        <h5 class="carpark-name">50% OFF YOUR NEXT RIDE</h5>
                        <div class="carpark-rating">
                            <i class="fas fa-star rating"></i>
                            <i class="fas fa-star rating"></i>
                            <i class="fas fa-star rating"></i>
                            <i class="fas fa-star rating"></i>
                            <i class="fas fa-star-half rating"></i>
                        </div>
                        <p class="paragraph">
                            In Collaboration with Grab
                        </p>
                        <a href="https://www.grab.com/sg/" class="btn btn-gradient">Redeem offer
                            <span class="dots"><i class="fas fa-ellipsis-h"></i></span>
                        </a>
                    </div>
                </div>
            </section>

        <section class="rooms">
            <div class="container">
                <h5 class="section-head">
                    <span class="heading">News</span><!-- comment -->
                    <span class="sub-heading">Latest update in Singapore</span><!-- comment -->
                </h5>
                <div class="grid rooms-grid">
                    <div class="grid-item featured-rooms">
                        <div class="image-wrap">
                            <img class="room-image" src="./images/woodlands.jpg" alt="">
                            <h5 class="room-name">Woodlands</h5>
                        </div>
                        <div class="room-info-wrap">
                            <span class="room-price">CarPark <br>Closure <span class="per-night"><br>5th Oct 2025</span></span>
                            <p class="paragraph">
                                onwards
                            </p>
                            <a href="https://www.lta.gov.sg/content/ltagov/en/who_we_are/our_work/land_transport_master_plan_2040.html" class="btn rooms-btn">LTA Website &rarr;</a>
                        </div>
                    </div>
                    <div class="grid-item featured-rooms">
                        <div class="image-wrap">
                            <img class="room-image" src="./images/sengkang.jpg" alt="">
                            <h5 class="room-name">Seng Kang</h5>
                        </div>
                        <div class="room-info-wrap">
                            <span class="room-price">CarPark <br> Maintenance<span class="per-night"><br>12th Dec 2023</span></span>
                            <p class="paragraph">
                                starts
                            </p>
                            <a href="https://www.hdb.gov.sg/car-parks" class="btn rooms-btn">HDB Website &rarr;</a>
                        </div>
                    </div>
                    <div class="grid-item featured-rooms">
                        <div class="image-wrap">
                            <img class="room-image" src="./images/f1.jpg" alt="">
                            <h5 class="room-name">Formula 1</h5>
                        </div>
                        <div class="room-info-wrap">
                            <span class="room-price">Road <br>Closure<span class="per-night"><br>5th May 2024</span></span>
                            <p class="paragraph">
                                18:00 to 00:00
                            </p>
                            <a href="https://www.formula1.com/" class="btn rooms-btn">News &rarr;</a>
                        </div>
                    </div>
                    <div class="grid-item featured-rooms">
                        <div class="image-wrap">
                            <img class="room-image" src="./images/sitp.jpg" alt="">
                            <h5 class="room-name">Punggol SIT</h5>
                        </div>
                        <div class="room-info-wrap">
                            <span class="room-price">Upgrade <br> Facilities<span class="per-night"><br>100+ Charging<br>Stations</span></span>
                            <p class="paragraph">
                                coming soon.
                            </p>
                            <a href="https://www.singaporetech.edu.sg/" class="btn rooms-btn">SIT Website &rarr;</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

<!--        <section class="contact">
            <div class="container">
                <h5 class="section-head">
                    <span class="heading">Contact</span> comment 
                    <span class="sub-heading">Get in touch with us</span>
                </h5>
                <div class="contact-content">
                    <div class="travler-wrap">
                        <img src="./images/traveler.png" alt=""> comment 
                    </div>
                    <form action="" class="form contact-form">
                        <div class="input-group-wrap"> comment 
                            <div class="input-group"> comment 
                                <input type="text" class="input" placeholder="Name" required>
                                <span class="bar"></span>
                            </div>
                            <div class="input-group">
                                <input type="email" class="input" placeholder="E-mail" required>
                                <span class="bar"></span>
                            </div>
                        </div>
                        <div class="input-group">
                            <input type="text" class="input" placeholder="Subject" required>
                            <span class="bar"></span>
                        </div>
                        <div class="input-group">
                            <textarea class="input" cols="30" rows="8" placeholder="E-mail" required></textarea>
                            <span class="bar"></span>
                        </div>
                        <button type="submit" class="btn form-btn btn-purple">Send Message
                            <span class="dot"><i class="fas fa-ellipsis-h"></i></span>
                        </button>
                    </form>
                </div>
            </div>
        </section>-->
    </main>

    <script src="main.js"></script>
    <?php include 'contactform.inc'; ?>  
    <?php include 'footer.inc'; ?>
</body>

</html>
