<?php
session_start();
require_once 'phpaccess.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userid = $_POST["userid"];
    $userpw = $_POST["userpw"];
    $sel = mysqli_query($conn, "SELECT id FROM driver WHERE userid = '" . $_POST['userid'] . "'");

    if (mysqli_num_rows($sel)) {
        $select = mysqli_query($conn, "SELECT id, name, email FROM driver WHERE userid = '" . $_POST['userid'] . "' AND userpw = '" . $_POST['userpw'] . "'");
        if (mysqli_num_rows($select)) {
            while ($value = $select->fetch_assoc()) {
                $_SESSION["id"] = $value["id"];
                $_SESSION["name"] = $value["name"];
                $_SESSION["email"] = $value["email"];
            }
            $_SESSION["loggedin"] = true;
            $_SESSION["userid"] = $userid;

            $cookie = "sdcookie";
            $cookie_name = $username;
            $cookie_value = $userid;
            setcookie($cookie_name, $cookie_value, time() + 600);
//            if(!isset($_COOKIE[$cookie_name])){
//                echo "Cookie named '" . $cookie_name . "' is not set!";
//            } else {
//                echo "Cookie '" . $cookie_name . "' is set!<br>";
            $file = fopen("visitorlog.txt", "a") or die("Unable to open file!");
            $ip = $_SERVER['REMOTE_ADDR'];
            $record = "\n" . $ip . " " . date("Y/m/d") . " " . date("h:i:sa") . " " . $_SESSION["id"];
            fwrite($file, $record);
            fclose($file);
//            }
            // echo "<h3>S.Park</h3>";
            //send email here <?php 'sendemail.php
            header("Refresh:1; url=home.php", true, 303);
        } else {
            exit('wrong password');
        }
    } else {
        exit('Username not found');
    }
}
?>


<html>
<?php include 'header.inc'; ?>
    <head>
        <link rel="stylesheet" href="register.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>

        <div class="container">
            <dive class="formWrap">

                <!-- Left section of responsive registration form -->

                <div class="formDiv">
                    <h2>Create Account</h2>

                    <p class="text">Sign Up with Email Address</p>
                    <div class="formGroup">
                        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                            <input type = "text" name = "userid" placeholder="Enter your userid..."><br></br>

                    </div>
                    <div class="formGroup">
                        <input type = "text" name = "userpw" placeholder="Enter your password..." ><br></br>

                    </div>
                    <input type ="submit" name="submit" value ="Login" class="btn">
                    <br></br>
                    <p><a href="register.php"><span class="link">Do not have an account? Register here</a>.</span></p>
                    <input type="hidden" name="emailsubject" value="contactform" >
                    </form>
                </div>
                <div class="guide">

                    <body>
                        <video width= "100%" height= "550px" autoplay loop controls="false" >
                            <source src="./videos/hehe.mp4" type="video/mp4">
                        </video>
                    </body>
                </div>
            </dive>
        </div>
<?php include 'contactform.inc'; ?>  
        <?php include 'footer.inc'; ?>
    </body>

</html>

