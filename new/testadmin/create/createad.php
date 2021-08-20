<?php
    require'../adminheader.php';
    require'../includes/auth_check.php';
?>

<main>

    <div class="row">

      <div class="column-33">
      </div>

      <div class="column-33">
        <div class="contactcard" style="margin:50px; width:400px">
                    <div class="cardcontainer" style="text-align:center">

                        <h1 style="color:#00dddd"><b>Create Admin</b></h1>

                        <?php
                            if (isset($_GET['error'])) {
                                if ($_GET['error'] == "emptyfields") {
                                    echo '<p style="color:#FF0000"><b><u>Missing Information</b></u><br>
                                    Please ensure all fields are filled in.</p>';
                                }
                                else if ($_GET['error'] == "emailtaken") {
                                    echo '<p style="color:#FF0000"><b><u>User Already Exists</b></u><br>
                                    Please login or use forgotten password link to reset password.</p>';
                                }
                            }

                            else if (isset($_GET['signup'])) {
                                if ($_GET['signup'] == "success") {

                                    echo '<p style="color:white"><b><u>New User Creation Successful!</b></u></p>';

                            }
                            }

                        ?>

                            <form action="../includes/create.inc.php" method="post">

                                <label style="color:#00dddd">User</label><br>
                                <input type="text" name="user" placeholder="User...">
                                    <br>
                                <label style="color:#00dddd">Password</label><br>
                                <input type="password" name="psw" placeholder="Password...">
                                    <br>
                                <label style="color:#00dddd">Re-Enter Password</label><br>
                                <input type="password" name="rpsw" placeholder="Re-enter Password...">
                                    <br>
                                    <br>
                                <button class="btn5 vda" type="submit" name="createad-submit" style="width:25%">Register</button>

                            </form>
                          </div>

                    </div>
                </div>
    <br><br><br>

    <div class="column-33">

      <div class="mod">
          <div class="modhead" style="text-align:center">
              <h1 style="color:#FFFF00"><i class="far fa-file-alt"></i></i> <b>Current Admin</b></h1>
            </div>
                <div class="modcontainer">

                  <table style="background:white">
                    <tr style="background:#FFFF00">
                      <th style="font-size: 15px; width:50px">ID:</th>
                        <th style="font-size: 15px; width:150px">Email:</th>
                    </tr>

                    <tr>
      <?php


      require'../includes/dbh.inc.php';

      $sql = "SELECT * FROM admin";
      $result = mysqli_query($conn, $sql);
      $resultCheck = mysqli_num_rows($result);

      if ($resultCheck > 0) {
      while ($row = mysqli_fetch_assoc($result)) {

      echo
      '
      <tr>
      <td>'.$row['id'].'</td>
      <td>'.$row['user'].'</td>
      ';
      }
      }
      ?>

      </tr>
      </table>

      </div>
      </div>

    </div>

        </div>


</main>
