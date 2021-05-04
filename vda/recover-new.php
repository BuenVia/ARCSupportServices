<?php
    require 'header.php';
 ?>

<main>

  <div class="row" style="margin-top: 80px;">

    <div class="column-33">
    </div>

    <div class="column-33" style="text-align:center">
        <h1 style="color:#00dddd"><b>Welcome to Cielo.</b></h1>
            <div class="contactcard2" style="padding:25px">

                  <h1 style="color:#00dddd"><b>Enter New Password</b></h1>
                                    <br><br>

                  <?php
                      $selector = $_GET['selector'];
                      $validator = $_GET['validator'];

                      if (empty($selector) || empty($validator)) {
                          echo 'We could not validato your request!';
                      }
                      else {
                        if (ctype_xdigit($selector) !== false & ctype_xdigit($validator) !== false) {
                          ?>

                          <form action="includes/create.inc.php" method="POST">
                            <input type="hidden" name="selector" value="<?php echo $selector ?>">
                            <input type="hidden" name="validator" value="<?php echo $validator ?>">
                            <input type="password" name="psw" placeholder="New Password"><br>
                            <input type="password" name="rpsw" placeholder="Repeat New Password"><br>
                            <button type="submit" name="updatepsw-submit">Update</button>
                          </form>

                          <?php

                        }
                      }
                   ?>


              </div>
        <p><a href="../index"><i class="fas fa-arrow-alt-circle-left" style="color:#00dddd; font-size:20px"></i></a> Back to Home page</p>
    </div>

    <div class="column-33">
    </div>
  </div>

                          </main>


</div>
  <script src="https://kit.fontawesome.com/ac3ba74ae6.js" crossorigin="anonymous"></script>

      </body>
  </html>
