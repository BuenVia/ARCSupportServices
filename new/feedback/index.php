<!--WEBSITE DESIGNED BY MATTHEW CLIFFORD-->
<!--WEBSITE DESIGNED BY MATTHEW CLIFFORD-->
<!DOCTYPE html>
<html lang="en">
<head>
    <title>ARC Support Services</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../design/new.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
<!--HEADER-->
<div class="container" style="background-color:#000000">
    <div class="row">

        <div class="column" style="text-align:left">
            <a href="index.php"><img src="../design/images/new_arc_logo.png" style="height:80px"></a>
        </div>



    </div>
</div>

<!--INBETWEEN-->
        <div class="container" style="background-color:#000000;text-align:center">
    <div class="row">

            <a style="color:#FFFF00;font-size:xxx-large;">The Cost Of Process</a>
            <br>

    </div>
        </div>

<!--MAIN BODY-->
    <div class="background4">
        <div class="container" id="vda">
            <div class="row">

<div class="column-33">
  <div class="contactcard" style="width:100%">
      <div class="cardcontainer">
  <?php
    if (isset($_GET['submit'])) {
        if ($_GET['submit'] == "success") {

          echo '<h1 style="color:#FFFF00; text-align:center"><b><u>Thank You For Your Communication</b></u></h1>
          <p style="color:#FFFF00; text-align:center">It has been received and is being reviewed</p>';

          }
        }
        if (isset($_GET['error'])) {
            if ($_GET['error'] == "sqlerror") {
                echo '<p style="color:#FF0000"><b><u>There was an error!!!</b></u><br>
                Please contact james@arcsupportservices.co.uk</p>';
            }
            else if ($_GET['error'] == "sqlerror1") {
                echo '<p style="color:#FF0000"><b><u>There was an error!!!</b></u><br>
                Please contact james@arcsupportservices.co.uk</p>';
            }
        }
    ?>



</div>
</div>
</div>

<form action="feedback.inc.php" method="POST">
                <div class="column-33">
                    <div class="contactcard" style="width:100%">
                        <div class="cardcontainer">
                                        <h1 style="color:#FFFF00"><b>Feedback</b></h1>
                          <label for="fname" style="color:#FFFF00">Your Name</label><br>
                          <input type="text" name="name" placeholder="Your name.." required>
                              <br><br>
                          <label for="fname" style="color:#FFFF00">What would be the one thing you took away from the webinar that was of value to you?</label><br>
                          <input type="text" name="q1" placeholder="..." required>
                              <br><br>
                          <label for="subject" style="color:#FFFF00">What would you like more of?</label><br>
                          <input type="text" name="q2" placeholder="..." required>
                              <br><br><br>
                          <button type="submit" name="feedback-submit" class="btn4 toplevel">SUBMIT</button>

                        </div>
                    </div>
                </div>




</form>

<div class="column-33">
  <div class="contactcard" style="width:100%">
            <div class="cardcontainer">
              <h1 style="color:#FFFF00"><b>Contact</b></h1>
                <p style="color:#FFFF00">Phone:<br>
                  <a style="color:white">01638 715503</a></p><br>
                <p style="color:#FFFF00">Mobile:<br>
                  <a style="color:white">07956 202722</a></p><br>
                <p style="color:#FFFF00">Email:<br>
                  <a style="color:white">james@arcsupportservices.co.uk</a></p><br>
                <h4 style="color:#FFFF00">Social Media:<br><br>
                                  <button onclick="window.open('https://www.facebook.com/arcsupportservices/', '_blank')" class="btn3 social">
                    <i class="fab fa-facebook"></i></button>
                  <button onclick="window.open('https://twitter.com/ARCSupport', '_blank')" class="btn3 social">
                    <i class="fab fa-twitter"></i></button>
                  <button onclick="window.open('https://www.linkedin.com/in/james-clifford-vda-imi-mimi-15ba1b25/', '_blank')" class="btn3 social">
                    <i class="fab fa-linkedin"></i></button>
                  <button onclick="window.open('https://instagram.com/arcsupport?igshid=525d636u8bhj', '_blank')" class="btn3 social">
                    <i class="fab fa-instagram"></i></button>
                  <button onclick="window.open('https://www.youtube.com/user/ARCSupport/', '_blank')" class="btn3 social">
                    <i class="fab fa-youtube"></i></button></h4>
                <img src="../design/images/new_arc_logo.png" style="width:100px;margin-left:auto;margin-right:auto">
                <br><br>
            </div>
          </div>
</div>

</div>
</div>

<br><br><br><br><br><br><br><br><br><br><br><br>
<!--WEBSITE DESIGNED BY MATTHEW CLIFFORD-->
<?php
  require '../footer.php';
?>
