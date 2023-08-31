

<?php
session_start();
require_once 'phpaccess.php';

$nameErr = $emailErr = $useridErr = $userpwErr = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $emailsubject = $_POST["emailsubject"];
    $name = test_input($_POST["name"]);
    $email = test_input($_POST["email"]);
    $userid = test_input($_POST["userid"]);
    $userpw = test_input($_POST["userpw"]);
    $OTP = rand(100000, 999999); //generate a random 6 digit OTP
    if (empty($_POST["name"])) {
        $nameErr = "Name is required";
    } else {
        $name = test_input($_POST["name"]);
        if (!preg_match("/^[a-zA-Z1-9 ]*$/", $name)) {
            $nameErr = "Only letters, numbers and white space allowed";
        } else {
            $nameErr = "";
        }
    }

    if ((!filter_var($email, FILTER_VALIDATE_EMAIL))) {
        $emailErr = "Invalid email format";
    } else {
        $emailErr = "";
    }


    if (empty($_POST["userid"])) {
        $useridErr = "Username is required";
    } else {
        $userid = test_input($_POST["userid"]);
        if (!preg_match("/^[a-zA-Z0-9]*$/", $userid)) {
            $useridErr = "Only letters and numbers allowed";
        } else {
            $useridErr = "";
        }
    }

    if (empty($_POST["userpw"])) {
        $userpwErr = "Password is required";
    } else {
        $userpw = test_input($_POST["userpw"]);
        if (!preg_match("/^[a-zA-Z0-9]*$/", $userpw)) {
            $userpwErr = "Only letters and numbers allowed";
        } else {
            $userpwErr = "";
        }
    }


    if ($nameErr == "" && $emailErr == "" && $useridErr == "" && $userpw) {
        $sql = "INSERT INTO `driver` (`id`, `userid`, `name`, `email`, `userpw`, `OTP`)
            VALUES (NULL,'$userid','$name','$email','$userpw','$OTP')"; //insert 2fa value into database 
        $select = mysqli_query($conn, "SELECT * FROM driver WHERE userid = '" . $_POST['userid'] . "'");
        if (mysqli_num_rows($select)) {
            exit('User name taken');
        } else {
            $conn->query($sql); //Running of the query
            $_POST["message"] = "Hello, " . $name . $OTP;
            $_POST["contactname"] = "Hello" . $name . $OTP;
            //echo "<h1>Thank you!</h1>";
            //echo "<h3>You have successfully registered as a member.</h3>";
            include 'sendemail.php';
            header("Refresh:1; url=OTP.php", true, 303);
        }
    }
}

function test_input($data) {

    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
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
                            <input type = "text" name = "name" placeholder="Enter your name..."><br></br>
                            <span class="error"> <?php echo $nameErr; ?></span>
                    </div>
                    <div class="formGroup">
                        <input type = "text" name = "email" placeholder="Enter your email..." ><br></br>
                        <span class="error"> <?php echo $emailErr; ?></span>
                    </div>
                    <div class="formGroup">
                        <input type = "text" name = "userid" placeholder="Enter your username..."><br></br>
                        <span class="error"> <?php echo $useridErr; ?></span>
                    </div>
                    <div class="formGroup">
                        <input type = "text" name = "userpw" placeholder="Enter your password..."><br></br>
                        <span class="error"> <?php echo $userpwErr; ?></span>
                    </div>
                    <div class="checkBox">
                        <span class="text">I Agree with</span> <a href = 'https://justpark.capitaland.com/TermCondition' target="_blank" ><span class = "link">Term & Conditions.</span></a>
                        <input type="checkbox" name="checkbox" id="checkbox">
                    </div>
                    <input type ="submit" name="submit" value ="Register" class="btn">
                    <br></br>
                    <p><a href="login.php"><span class="link">Already have an account? Login here</a>.</span></p>
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


