<!doctype html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>S.park</title>
        <!--Font awesome CDN-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
        <link rel="stylesheet" href="styles.css">
        <link rel="stylesheet" href="css/tlmcss.css">
    </head>
    <body>
        <header class="header">
            <div class="container">
                <nav class="nav">
                    <a href="index.php" class="logo">
                        <img src="./images/sparklogo.png" alt="">                
                    </a>
                    <div class="hamburger-menu">
                        <i class="fas fa-bars"></i>
                        <i class="fas fa-times"></i>
                    </div>
                    <ul class="nav-list">
                        <li class="nav-item">
                            <a href="home.php" class="nav-link">Profile</a>
                        </li>
                        <li class="nav-item">
                            <a href="booking.php" class="nav-link">Booking</a>
                        </li>

                        <li class="nav-item">
                            <a href="aboutus.php" class="nav-link">About</a>
                        </li>
                        <?php if (isset($_SESSION["userid"])) { ?>
                            <li class="nav-item">
                                <a href="logout.php" class="nav-link">Logout</a></li>
                            <li class="nav-item">
                                <a href="home.php" class="nav-link"><img src=images/yandao.png alt=ProfilePic id="profilepic" style=width:25%></a></li>
                        <?php } else { ?>
                            <li class="nav-item">
                                <a href="register.php" class="nav-link">Register</a>
                            </li>
                            <li class="nav-item">
                                <a href="login.php" class="nav-link">Login</a></li>
                            <?php } ?>
                    </ul>
                </nav>
            </div>  
        </header>