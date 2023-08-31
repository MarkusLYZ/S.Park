<?php
session_start();

if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: login.php");
    exit;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require_once 'phpaccess.php';
    if (isset($_POST['addBtn'])) {
        $bookingDate = isset($_POST['bookingDate']) ? htmlspecialchars($_POST['bookingDate']) : "";
        $pstart = isset($_POST['pstart']) ? htmlspecialchars($_POST['pstart']) : "";
        $pend = isset($_POST['pend']) ? htmlspecialchars($_POST['pend']) : "";
        $bookingid = rand(100000, 999999);

        $sql2 = "INSERT INTO `booking` VALUES ('$bookingid', '" . ($_SESSION["id"]) . "', '" . ($_SESSION["carparkid"]) . "', '$bookingDate', '$pstart', '$pend');";

        mysqli_query($conn, $sql2);

        $_POST["email"] = $_SESSION["email"];
        $_POST["contactname"] = $_SESSION["name"];
        $_POST["emailsubject"] = "Booking Confirmation";
        $_POST["message"] = "Hello, " . $_SESSION["userid"] . "You have a booking confirmation. <br>BookingID:" . $bookingid . " on " . $bookingDate;
    }
}
?>

<html>
    <body>
        <?php include 'sendemail.php'; ?>
    </body>
</html>