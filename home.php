<?php
session_start();

if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: login.php");
    exit;
}
?>

<html>
    <head>       
        <link rel="stylesheet" href="css/tlmcss.css">
        <link rel="stylesheet" href="home.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
                    <img src="./images/background2.jpg" id="homebanner" alt="" class="carpark-image">
        <div class="home">

            <div class="bottom">Welcome back</div>
        </div> 
        <?php include 'header.inc'; ?>
        <div class="profilebg">
            <div class="heading">
                <h3 class="head">Booking History</h3>
                    </div>
                    
        <?php include 'latestbooking.php'; ?>
        <?php include 'userhistory.php'; ?>  
        <?php include 'contactform.inc'; ?>  
        <?php echo"<bpagecenter>"; ?>
        <?php include 'footer.inc'; ?>
   </div>
    </body>
</html>
