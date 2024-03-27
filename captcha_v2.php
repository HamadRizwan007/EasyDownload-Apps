<?php
    error_reporting(0);
    if (isset($_POST['submit']) && !empty($_POST['submit'])) {
    if (isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])) {
    //Below is your secret key
    $secret = '6LfTPlUUAAAAANgJTPa67hlDAXu4ppK2FgSbSOO6';
    //get verify response data
    $captchaResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret=' . $secret . '&response=' . $_POST['g-recaptcha-response']);
    $responseData = json_decode($captchaResponse );
    if ($responseData->success) {
    //Registration form submission code
    $name = !empty($_POST['name']) ? $_POST['name'] : "";
    $email = !empty($_POST['email']) ? $_POST['email'] : "";
    $password = !empty($_POST['pwd']) ? $_POST['pwd'] : "";

    $htmlContent = "
    <h1>Registration details</h1>
    <p><b>Name: </b>" . $name . "</p>
    <p><b>Email: </b>" . $email . "</p>
    <p><b>Message: </b>" . $password . "</p>
    ";
    } else {
    $errMsg = 'Captcha verification failed, please try again.';
    echo "<script>alert('" . $errMsg . "');</script>";
    }
    } else {
    $errMsg = 'Please click on the reCAPTCHA box.';
    echo "<script>alert('" . $errMsg . "');</script>";
    }
    } else {
    $errMsg = "";
    echo "<script>alert('Please fill data');</script>";
    }
    ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Google reCaptcha Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> <script
        src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"> </script> <script
        src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"> </script> <script
        src="https://www.google.com/recaptcha/api.js" async defer>
    </script>
</head>

<body>

    <div class="container">
        <?php
    if (!empty($htmlContent)) {
    echo $htmlContent;
    } else {
    echo "";
    }
    ?>
        <h2>Registration form</h2>
        <form action="" method="post">
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
            </div>
            <div class="form-group">
                <label for="pwd">Password:</label>
                <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
            </div>
            <div class="form-group">
                <label for="pwd">Name:</label>
                <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name">
            </div>
            <div class="g-recaptcha" data-sitekey="6LfTPlUUAAAAAGSUt1_LqpJXQpatx7_BzTDcU9On"></div>
            <input type="submit" class="btn btn-default" id="submit" name="submit" value="Submit" />
        </form>
    </div>

</body>

</html>