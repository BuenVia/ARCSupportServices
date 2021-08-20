<?php
    require'adminheader.php';
    require'includes/auth_check.php';
    require'includes/customer.inc.php';


?>


<!--HEADER-->
<div style="background:#000000">


<!--MAIN-->
<div class="row">
<div class="column-33">
  <div class="mod">
      <div class="modhead" style="text-align:center">
            <h1 style="color:#FFFF00"><i class="far fa-file-alt"></i></i> <b>Review</b></h1>
          </div>
          <div class="modcontainer">

            <?php

                require 'includes/dbh.inc.php';

                $sql = "SELECT * FROM uploads WHERE done='no';";
                $result = mysqli_query($conn, $sql);
                $resultCheck = mysqli_num_rows($result);

                  echo '<a style="color:#FFFF00">Uploads waiting for review: <a style="color:red">'.$resultCheck.'</a></a>';

                ?><br><br>
            <a href="uploads/index.php"><button class="btn9 vda">Uploads</button></a>
              <br><br>

              <?php

                  require 'includes/dbh.inc.php';

                  $sql = "SELECT * FROM download WHERE done='0';";
                  $result = mysqli_query($conn, $sql);
                  $resultCheck = mysqli_num_rows($result);

                    echo '<a style="color:#FFFF00">Downloads waiting for review: <a style="color:red">'.$resultCheck.'</a></a>';

                  ?>
                  <br><br>
            <a href="thecostofprocess/costprocessadmin.php"><button class="btn9 vda">Downloads</button></a>
              <br><br>
            </div>
        </div>
    </div>

    <div class="column-33">
      <div class="mod">
          <div class="modhead" style="text-align:center">
                <h1 style="color:#FFFF00"><i class="far fa-file-alt"></i></i> <b>Manage</b></h1>
          </div>
            <div class="modcontainer">


              <?php
              require'includes/dbh.inc.php';
                  $sql = "SELECT * FROM customer";
                  $result = mysqli_query($conn, $sql);
                  $resultCheck = mysqli_num_rows($result);

                  if ($resultCheck > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {

                      $bsid = $row['bodyshopId'];

                      echo
                      '<a href="manage/bsprofile.php?bsid='.$bsid.'"><button class="btn8 bsho">'.$row['bodyshopId'].'</button></a>
                      <a style="color:#FFFF00">'.$row['bodyshop'].'</a>
                      <a style="color:white">'.$row['town'].'</td></a><br>';
                    }
                  }
              ?>


              <br><br>


            </div>
          </div>
    </div>

    <div class="column-33">
      <div class="mod">
          <div class="modhead" style="text-align:center">
                <h1 style="color:#FFFF00"><i class="far fa-file-alt"></i></i> <b>Create</b></h1>
          </div>
            <div class="modcontainer">

              <a href="create/createad.php"><button class="btn5 vda">Create Admin</button></a>
              <a href="create/createinsp.php"><button class="btn5 vda">Create Inspection</button></a>
              <br><br>
              <a href="create/createbs.php"><button class="btn5 vda">Create Bodyshop</button></a>
              <br><br>
              <a href="create/createus.php"><button class="btn5 vda">Create User</button></a>
              <br><br>

            </div>
          </div>
        </div>


</div>
</div>
<br><br>
<?php
  require '../footer.php';
?>
