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
          <p style="color:#FFFF00; text-align:center">It has been received and is being reviewed</p>
          <a href="test.pdf"><button class="btn4 toplevel">OPEN PDF</button></a>';

          }
        }
    ?>

    <P>To get the PDF recap of this webinar, please enter your name and email address.</p>
      <p> If you any questions, please let us know in the questions box.</p>


</div>
</div>
</div>

<form action="download.inc.php" method="POST">
                <div class="column-33">
                    <div class="contactcard" style="width:100%">
                        <div class="cardcontainer">

                          <label for="fname" style="color:#FFFF00">Your Name</label><br>
                          <input type="text" name="name" placeholder="Your name..." required>
                              <br>
                          <label for="fname" style="color:#FFFF00">Your Email</label><br>
                          <input type="text" name="email" placeholder="Email..." required>
                              <br>
                          <label for="fname" style="color:#FFFF00">What would be the one thing you took away from the webinar that was of value to you?</label><br>
                          <input type="text" name="q1" placeholder="..." required>
                              <br>
                          <label for="subject" style="color:#FFFF00">What would you like more of?</label><br>
                          <input type="text" name="q2" placeholder="..." required>
                              <br>
                          <label for="subject" style="color:#FFFF00">Any questions or comments...?</label><br>
                          <textarea id="subject" name="question" placeholder="Write something..." style="height:50px"></textarea>


                          <input type="checkbox" name="optin" value="yes">
                          <label for="optin" style="color:#FFFF00"> I WOULD LIKE MORE INFORMATION ABOUT VDA TRAINING & DEVELOPMENT</label><br>
                          <br><br>

                          <button type="submit" name="download-submit" class="btn4 toplevel">SUBMIT</button>

                        </div>
                    </div>
                </div>

            </div>
        </div>



</form>

<div class="column-33">
</div>

<br><br><br><br><br><br><br><br><br><br>
<!--WEBSITE DESIGNED BY MATTHEW CLIFFORD-->
<?php
  require '../footer.php';
?>
