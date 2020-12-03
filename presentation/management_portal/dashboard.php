<?php
session_start();
include_once("../../aggregation/data_classes/user.php");
$user = unserialize($_SESSION["user"]);
?>
<?php if($user!=null && $user->getType()=="Admin"):?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Management Portal</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="../../favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="./styles/portal.css">
    <link rel="stylesheet" href="./styles/dashboard.css">
</head>

<body>
    <?php include("../global/templates/portal_header.php") ?>
    <?php include("../global/templates/portal_sidebar.php") ?>
    <section id='dashboard'>
    </section>
</body>

</html>
<?php endif;?>

<?php 

if($user==null || $user->getType()=="Customer"){
    include("../global/templates/access_denied.php");
}

?>