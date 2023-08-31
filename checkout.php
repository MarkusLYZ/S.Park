<?php
session_start();

if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: login.php");
    exit;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $userid = $_SESSION["userid"];
    $_SESSION["carparkid"] = $_POST["carparkid"];
}
?>




<html>
    <body>
    <?php include 'header.inc';?>
    <?php require_once 'phpaccess.php';?>
    
    
<section class="booking">
            <div class="container">
                <form action="bookingconfirm.php" method="post" class="form">
                    <div class="bpagecenter">
                        
                    <div class="input-group">
                        <h1 class="Checkout">CheckOut</h1>
                        <label for="destination" class="input-label">Booking Date</label>
                        <input type="date" name="bookingDate" class="input" id="destination">
                    </div>
                    <div class="input-group">
                        <label for="check-in" class="input-label">Start Time</label>
                        <input type="time" class="input" id="check-in" name="pstart">
                    </div>
                    <div class="input-group">
                        <label for="check-out" class="input-label">End Time</label>
                        <input type="time" class="input" id="check-out" name="pend">
                    </div>
                    <button class="btn form-btn btn-purple" name="addBtn">Confirm
                        <span class="dots"><i class="fas fa-ellipsis-h"></i></span>
                    </button>
                </form>
            </div>
            </div>
        </section>
    
    
        <?php include 'contactform.inc'; ?>  
        <?php include 'footer.inc'; ?>
</body>
</html>