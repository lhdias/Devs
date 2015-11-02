<?php
/**
 * Created by PhpStorm.
 * User: marcelo
 * Date: 31/10/15
 * Time: 23:23
 */
 include_once('controller/control.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="static/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="static/css/init.css" rel="stylesheet">
    <script src="static/jquery/jquery-2.1.4.min.js"></script>
</head>
<body>
    <div class="nav  navbar-fixed-top nav-color nav-implement">
        <h1 class="auto">simple login and registration in php</h1>
        <h3>
            <a href="/simplessys/" class="auto text-info pull-right">Home</a>
        </h3>
    </div>
    <?php include("$page"); ?>
    <br><br><br><br>
    <div class="footer nav-color text-center">
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>
            SHENOISZ - 2015
        </p>
    </div>
    <script src="static/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
