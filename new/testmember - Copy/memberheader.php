<?php
    session_start();
    require'includes/user.inc.php';
?>
<!--WEBSITE DESIGNED BY MATTHEW CLIFFORD-->
<!DOCTYPE html>
<html lang="en">
<head>
    <title>ARC Support Services</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/design/new.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" href="/design/images/ARC_Logo_Final-01.png" type="image/png" sizes="16x16">
</head>

<!--HEADER-->
  <div style="background:#000000">
    <div class="container">

      <div class="row">
          <div class="column-33" style="text-align:centre">
              <a href="/testmember/member.php?usid=<?php echo $usid ?>&bsid=<?php echo $bsid ?>"><img src="/design/images/new_arc_logo.png" style="height:80px"></a>
          </div>

      <div class="column-66" style="text-align:right">
        <?php
            if (isset($_SESSION['email'])) {

                echo '<p style="color:white">You are logged in as <a style="color:white"><b><u>'.$_SESSION['email'].'</u></b></a></p>
                        <a href="/testmember/includes/logoutus.inc.php"><button class="btn7 lnk"><b><u>Logout</b></u></button></a></p>';
            }
            else {
                echo '<p style="color:white"><b>You are <u>LOGGED OUT</u></b></p>';
            }
        ?>
        <p style="color:white"><b>Member Area</b></p>
      </div>

    </div>
  </div>
