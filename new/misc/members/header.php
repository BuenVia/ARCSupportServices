<?php
    session_start();
?>
<!DOCTYPE html>
    <html>
        <head>
            <meta charset="utf-8">
            <meta name=viewport content="width=device-width, initial-scale=1">
            <title>ARC Members' Area</title>
            <link rel="stylesheet" type="text/css" href="css/members.php">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        </head>
        <body>
            
<header>
        <div class="container" style="background-color:#000000">
            <div class="row">
    
                <div class="column" style="text-align:left">
                    <a href="index.php"><img src="images/new_arc_logo.png" style="height:80px"></a>
                </div>       
    
                <div class="column" style="text-align:right">
                    <?php
                        if (isset($_SESSION['emailID'])) {
                           
                            echo '<p style="color:#FFFF00">You are logged in as <a style="color:white"><b><u>'.$_SESSION['emailID'].'</u></b></a></p>
                            <a href="includes/logout.inc.php"><button class="btn5 lnk"><b><u>Logout</b></u></button></a></p>';
                        }
                        else {
                            echo '<p style="color:#FFFF00">You are logged OUT</p>';
                        }
                    ?>
                    
                </div> 
    
            </div>
        </div>
</header>