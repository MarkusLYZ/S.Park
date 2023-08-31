<?php
session_start();

if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: login.php");
    exit;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require_once 'phpaccess.php';
    if (isset($_POST['delBtn'])) {
        $bookingid = $_POST['delBtn'];
        echo $bookingid;
        $sql2 = "DELETE FROM `booking` WHERE booking.bookingid = '" . $bookingid . "';";
        mysqli_query($conn, $sql2);

        $_POST["email"] = $_SESSION["email"];
        $_POST["contactname"] = $_SESSION["name"];
        $_POST["emailsubject"] = "Booking Cancellation";
        $_POST["message"] = "Hello, " . $_SESSION["userid"] . "You have a booking cancellation. <br>BookingID:" . $bookingid . " on " . $bookingDate;
    }
}
?>

<html>
    <body>
        <?php include 'sendemail.php'; ?>
    </body>
</html>