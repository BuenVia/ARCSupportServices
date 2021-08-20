<?php
    require'adminheader.php';

    if (isset($_SESSION['user'])) {
        header("Location: admin.php");
    }
?>

<!--MAIN-->

<div style="background:#000000">
<div class="row">

<div class="column-33">
  <?php
  if (isset($_GET['error'])) {
      if ($_GET['error'] == "emptyfields") {
          echo '<p style="color:#FF0000"><b><u>Missing Information</b></u><br>
          Please ensure all fields are filled in.</p>';
      }
    }
    else if (isset($_GET['signup'])) {
        if ($_GET['signup'] == "success") {

            echo '<br><br><br><br><br><p style="color:white"><b><u>New User Creation Successful!</b></u></p>';

    }
    }
      ?>
</div>


  <form action="includes/loginad.inc.php" method="POST">
    <div class="column-33">
        <div class="contactcard">
            <div class="cardcontainer">
                            <h1 style="color:#FFFF00"><b>Admin Area</b></h1>
              <label for="fname" style="color:#FFFF00">Username</label><br>
              <input type="text" name="user" placeholder="..." required>
                  <br><br>
              <label for="psw" style="color:#FFFF00">Password</label><br>
              <input type="password" name="psw" placeholder="..." required>
                  <br><br>
              <button type="submit" name="login-submit" class="btn4 toplevel">SUBMIT</button>

            </div>
        </div>
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    </div>
  </form>


<div class="column-33">
</div>

</div>
</div>
