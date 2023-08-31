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

<?php
// check to see if the form was submitted
if (isset($_POST['addBtn'])) {
    // get all the form data
    $carparkid = isset($_POST['carparkid']) ? htmlspecialchars($_POST['carparkid']) : "";
    $region = isset($_POST['region']) ? htmlspecialchars($_POST['region']) : "";
}
?>
<html>
            <section class="booking">
                <div class="container">
     
                <?php include 'header.inc'; ?>
                  <link rel="stylesheet" href="booking.css">
                <bbody>
                      <div action= "">
                        <div class="bpagecenter">
                            <form action="booking2.php" method="post">
                                <div class="input-group">
                                    <label for="destination" class="input-label">Carpark ID</label> 
                                    <input type = "text" name = "carparkid" class="input">
                                </div>
                                <div class="input-group">
                                    <label for="destination" class="input-label">Region</label> 
                                    <input type = "text" name = "region" class="input">
                                </div>

                                <input type ="submit" name="addBtn" value ="search" class="btn form-btn btn-purple">
                                <span <i class="fas fa-ellipsis-h"></i></span>

                                <br><br>
                            </form>
                        </div>
                    </div>
                    
                        </bbody>

                </div>
            </section>
    <?php include 'footer.inc'; ?>
</html>
