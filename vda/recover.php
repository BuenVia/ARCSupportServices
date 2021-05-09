<?php
    require 'header.php';
 ?>

<main>

  <div class="row" style="margin-top: 80px;">

    <div class="column-33">
    </div>

    <div class="column-33" style="text-align:center">
        <h1 style="color:#00dddd"><b>Welcome to ARC Online.</b></h1>
            <div class="contactcard2" style="padding:25px">

                  <h1 style="color:#00dddd"><b>Recover Password</b></h1>

                  <?php
                  if (isset($_GET['recover'])) {
                  if ($_GET['recover'] == "success") {
                  echo '<p style="color:#00dddd"><b><u>Recovery Successul!</b></u><br>
                  Please check your email.</p>
                  <p>Please note this can take up to 5 minutes to arrive. Also, please check your junk email.</p>';
                  }
                  }
                  ?>

                  <form action="includes/vda.inc.php" method="POST">
                    <a>An email with a temporary password will be sent to you.</a>
                    <br><br>
                  <label style="color:#00dddd">Your Email</label><br>
                  <input type="text" name="email" placeholder="Email...">
                  <br>
                  <button class="btn2 lnk" type="submit" name="recover-submit" style="width:25%">Recover</button>
                  </form>


              </div>
        <p><a href="index.php"><i class="fas fa-arrow-alt-circle-left" style="color:#00dddd; font-size:20px"></i></a> Back to Login page</p>
    </div>

    <div class="column-33">
    </div>
  </div>

                          </main>


</div>
  <script src="https://kit.fontawesome.com/ac3ba74ae6.js" crossorigin="anonymous"></script>

      </body>
  </html>
