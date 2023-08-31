<html>

<?php
require_once 'phpaccess.php';

$sql = "SELECT * FROM booking , driver, carpark WHERE driver.id = booking.id AND carpark.carparkid = booking.carparkid AND driver.userid = '" . ($_SESSION["userid"]) . "'";
$result = $conn->query($sql);

$database_count = 0;
foreach ($result as $value) {

    $database_count++;
}
$result = $conn->query($sql);


if ($result->num_rows > 0) {
    $count = 0;
    while ($row = $result->fetch_assoc() AND $count < 3) {
        $count++;
        $bookingid = $row["bookingid"];
        $currentUser = $row["id"];
        $carparkid = $row["carparkid"];
        $bookingDate = $row["bookingDate"];
        $carparkaddr = $row["carparkaddr"];
        $pstart = $row["pstart"];
        $pend = $row["pend"];

        if ($bookingid < ($database_count - 2)) {
            $count--;
        } else {
            echo "<center><h3>Booking ID: " . $bookingid . "</h3>
                  <p>Date: " . $bookingDate . "</p>
                  <p>Carpark Address: " . $carparkaddr . "</p>
                  <br></center>";
        }
    }
}
?>

    </html>