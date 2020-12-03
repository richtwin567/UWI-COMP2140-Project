<?php
include("../global/data_classes/session.php");
$session = new Session();
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Register</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="styles/register.css">
    <link rel="shortcut icon" href="../../favicon.ico" type="image/x-icon">
    <link rel='stylesheet' href="../global/styles/global.css">
    <script src="../../aggregation/accounts/login.js" type="module" defer></script>
    <script src="../../aggregation/data_classes/user.js" type="module"></script>
</head>

<body>
    <?php include("../global/templates/header.php"); ?>
    <main>
        <img id="feature-img" src="../global/images/signup2.jpg" alt="sign up">
        <div id="sign-up-div">
            <h1 id="page-title">Sign Up</h1>
            <!-- Dynamic Content goes here-->
            <form id="Registerform" action="" method="post">
                <div id="realname">
                    <div>
                        <label for="fname">First name</label>
                        <input type="text" name="fname" id="fname" aria-required="true" pattern="[A-Za-z]+">
                    </div>
                    <div>
                        <label for="lname">Last name</label>
                        <input type="text" name="lname" id="lname"aria-required="true" pattern="[A-Za-z]+">
                    </div>
                </div>
                <label>UserName</label>
                <input type="text" id="username" name="username" required aria-required="true" pattern="[A-Za-z0-9]+">
                <label>Email</label>
                <input type="email" id="email" name="email" required aria-required="true" pattern="^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}">
                <label>Password</label>
                <input type="password" id="password" name="password" required aria-required="true">

                <label>Default Delivery Address</label>
                <textarea name="address" id="address" cols="30" rows="10"></textarea>

                <h4>Card Details</h4>
                <div id="card-num-cvv-group">
                    <div>
                        <label for="card-num">Card number</label>
                        <input type="number" name="card-num" id="card-num">
                    </div>
                    <div>
                        <label for="cvv">CVV</label>
                        <input type="number" name="cvv" id="cvv">
                    </div>
                </div>
                <div id="name-expiry-date-group">
                    <div>
                        <label for="name-on-card">Name on Card</label>
                        <input type="text" name="name-on-card" id="name-on-card">
                    </div>
                    <div>
                        <label for="expiry-date">Expiry Date</label>
                        <input type="date" me="expiry-date" id="expiry-date">
                    </div>
                </div>
                <input type="submit" id="submit" value="Sign up" class="btn btn-regular">
                <hr>
                <div id="has-account">
                    <p>Already have an account? </p>
                    <a id="to-login-link" href="login.php">Login</a>
                </div>
            </form>
        </div>

    </main>
    <?php include("../global/templates/footer.php"); ?>
</body>

</html>