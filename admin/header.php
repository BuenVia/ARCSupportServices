<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ARC Admin</title>
    <link rel="stylesheet" href="../css/resetstyle.css">
    <link rel="stylesheet" href="../css/admin.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Play&display=swap" rel="stylesheet">
    
    <script src="https://kit.fontawesome.com/ac3ba74ae6.js" crossorigin="anonymous"></script>
</head>
<body>
    
<div class="container">

    <div class="row">
        <div class="column-33" style="text-align:centre">
            <a href="/admin/index.php"><img src="/design/images/new_arc_logo.png" style="height:80px"></a>
        </div>

        <div class="column-66" style="text-align:right">
        <?php
            if (isset($_SESSION['user'])) {

                echo '<p style="color:white">You are logged in as <a style="color:white"><b><u>'.$_SESSION['user'].'</u></b></a></p>
                        <a href="/admin/includes/logoutad.inc.php"><button class="btn7 lnk"><b><u>Logout</b></u></button></a></p>';
            }
            else {
                echo '<p style="color:white"><b>You are <u>LOGGED OUT</u></b></p>';
            }
        ?>
        <p style="color:white"><b>Admin Area</b></p>
    </div>

</div>