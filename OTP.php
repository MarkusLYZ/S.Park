<?php
//confirmation page to check if the 2fa is entered correctly
session_start();
include 'phpaccess.php';

if (isset($_POST['addBtn'])) {
    $user_OTP = isset($_POST['user_OTP']) ? htmlspecialchars($_POST['user_OTP']) : "";

//make sure entry was created
    if (mysqli_num_rows(mysqli_query($conn, "SELECT * FROM `driver` WHERE OTP='{$user_OTP}'"))) {
        echo 'Registration Successful.';
//clear form entry after creation
        mysqli_query($conn, "UPDATE `driver` SET OTP = NULL WHERE OTP='{$user_OTP}'");
//delete OTP if user is created successfully
        header("Refresh:3; url=login.php", true, 303);
    } else {
        echo 'An error occured. OTP Failed.';
        header("Refresh:2; url=OTP.php", true, 303);
    }
//delete user if OTP is entered wrongly
}
?>

<html>
    <?php include 'header.inc'; ?>
    <head>
        <link rel="stylesheet" href="otp.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>

        <div class="container">
            <div class="formWrap">

                <!-- Left section of responsive registration form -->

                <div class="formDiv">
                    <h2>Verification code</h2>
                    <div class="2FA-wrap">
                        <img src="./images/2FA.png" width="70%" alt="">
                    </div>


                    <div class="formGroup">

                        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                            <input type = "text" name = "user_OTP" placeholder="Enter the OTP">
                            <input type ="submit" name="addBtn" value ="verify">
                        </form>
                    </div>
                </div>

            </div>
        </div>
        <?php include 'footer.inc'; ?>
    </body>

</html>