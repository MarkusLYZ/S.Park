<html>
    <body>     
        <h3>Booking History</h3>
        <table>
            <style>
                table,
                th,
                td {
                    padding: 10px;
                    border: 1px solid black;
                    border-collapse: collapse;
                }
                tr
                {
                  text-align: left;  
                }
            </style>
        <table class="t">
            <thead>
                <tr>
                    <th>Bookingid</th>
                    <th>Carparkid</th>
                    <th>Carparkaddr<p></th>
                    <th>BookingDate</th>
                    <th>ParkingStart</th>
                    <th>ParkingEnd</th>
                    <th>Booked by: </th>
                    <th>Action</th>
                     
                </tr>
            </thead>
       <ubody>
        <?php
        $id = $_SESSION['id'];
        $result = mysqli_query($conn, "SELECT * FROM booking, carpark, driver WHERE driver.id = booking.id AND booking.carparkid = carpark.carparkid AND booking.id = '" . "$id" . "'");

        $count = 1;

        while ($value = $result->fetch_assoc()) {
            $count++;
            $bookingid = $value["bookingid"];
            $carparkid = $value["carparkid"];
            $carparkaddr = $value["carparkaddr"];
            $bookingDate = $value["bookingDate"];
            $pstart = $value["pstart"];
            $pend = $value["pend"];
            $name = $value["name"];

            echo "<form method='post' action='bookingdelete.php'>";
            echo"<td>" . $value['bookingid'] . "</td>";
            echo"<td>" . $value['carparkid'] . "</td>";
            echo"<td>" . $value['carparkaddr'] . "</td>";
            echo"<td>" . $value['bookingDate'] . "</td>";
            echo"<td>" . $value['pstart'] . "</td>";
            echo"<td>" . $value['pend'] . "</td>";
            echo"<td>" . $value['name'] . "</td>";
            echo"<td><button name='delBtn' value='$bookingid' type='submit'>Delete</button></td>";
            echo"<input type='hidden' name='carparkid' value='$bookingid' />";
            echo "</tr>";
            echo"</form>";
            
              if ($count > 10) {
                  $count = 0;
                  break;
        }
       }
        ?>
           
           </ubody>
    </body>
    </table>
</html>