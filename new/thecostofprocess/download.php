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
<div class="row">
    <div class="container" style="background-color:#000000;text-align:center">
        <div class="row">
            <a style="color:#FFFF00;font-size:xxx-large;">The Cost Of Process</a>
            <br>
            <?php
              if (isset($_GET['dlsubmit'])) {
                  if ($_GET['dlsubmit'] == "success") {

                    echo '<h1 style="color:white; text-align:center"><b><u>Thank You For Your Communication</b></u></h1>
                    <p style="color:white; text-align:center">It has been received and is being reviewed</p>';

                    }
                  }
              ?>
        </div>
    </div>
</div>
        <!--FIRST SECTION-->

      <!--SECOND SECTION-->

        <!--THIRD SECTION-->
    <div class="background4">
                        <div class="container">
    <div class="row">

            <div class="column-66">
<div class="contactcard" style="width:100%">
          <div class="cardcontainer">
            <h1 style="color:#FFFF00"><b>Recap</b></h1>
            <p>Right click on document below and click 'Save As'</p>
              <iframe src="thecostofprocess.pdf#toolbar=0" style="width:90%;height:500px"></iframe><br><br>
              <br><br>
          </div>
        </div>
            </div>

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

      <!--WEBSITE DESIGNED BY MATTHEW CLIFFORD-->
<?php
  require '../footer.php';
?>
