<html>
    <section class="booking">
        <div class="container">
            <?php include 'header.inc'; ?>

            <link rel="stylesheet" href="booking.css">

            <table class="t">
                <thead>
                    <tr>
                        <th>Carpark_ID</th>
                        <th>Carpark Address</th>
                        <th>Region<p></th>
                        <th>Capacity</th>
                        <th>Price</th>
                        <th>Verify</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <?php
                        session_start();

                        if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
                            header("location: login.php");
                            exit;
                        }
                        require_once 'phpaccess.php';

                        if ($_SERVER["REQUEST_METHOD"] == "POST") {


                            $carparkid = $_POST["carparkid"];
                            $region = $_POST["region"];

                            echo "<querytable><h1> $region Booking Availability</h1> </querytable>";

                            $result = mysqli_query($conn, "SELECT * FROM carpark WHERE region = '" . "$region" . "' OR carparkid = '" . "$carparkid" . "'");
                            $count = 1;

                            while ($value = $result->fetch_assoc()) {
                                $count++;
                                $carparkid = $value["carparkid"];
                                $carparkaddr = $value["carparkaddr"];
                                $region = $value["region"];
                                $capacity = $value["capacity"];
                                $price = $value["price"];

                                echo "<form method='post' action='checkout.php'>";
                                echo"<td>" . $value['carparkid'] . "</td>";
                                echo"<td>" . $value['carparkaddr'] . "</td>";
                                echo"<td>" . $value['region'] . "</td>";
                                echo"<td>" . $value['capacity'] . "</td>";
                                echo"<td>" . $value['price'] . "</td>";

                                echo"<td><button name='submit' value='$carparkid' type='submit'>Book</button></td>";
                                
                                echo "</tr>";
                                echo "<input type='hidden' name='carparkid' value='$carparkid'/>";

                                if ($count > 10) {
                                    $count = 0;
                                    break;
                                }
                            }
                        }
                        ?>
                </tbody>
            </table>
        </div>
    </section>
</html>

<?php include 'footer.inc'; ?>