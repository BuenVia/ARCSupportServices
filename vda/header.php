<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/resetstyle.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/ac3ba74ae6.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Play&display=swap" rel="stylesheet">
    <title>Online VDA</title>
</head>

<body>
<div class="row">


    <!--Header/ Navbar-->
    <header>
    <div class="column-sm" style="text-align:centre">
            <a href="index.php"><img src="../images/new_arc_logo.png" style="height:80px"></a>
        </div>

        <div class="column-sm" style="text-align:right">
        <?php
            if (isset($_SESSION['id'])) {

                echo '<p style="color:white">You are logged in as <a style="color:white"><b><u>'.$_SESSION['id'].'</u></b></a></p>
                       <p><a href="includes/logoutus.inc.php"><button class="btn1"><b><u>Logout</b></u></button></a></p>';
            }
            else {
                echo '<p style="color:white"><b>You are <u>LOGGED OUT</u></b></p>';
            }
        ?>

    </div>

    </header>


</div>
