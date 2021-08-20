<?php
    require'../adminheader.php';
    require'../includes/auth_check.php';
?>
</div>
<!--MAIN-->

<div class="column-33">
</div>


<div class="column-33">
  <div class="mod">
      <div class="modhead" style="text-align:center">
            <h1 style="color:#000000"><i class="far fa-file-alt"></i></i> <b>Reports</b></h1>
      </div>
      <div class="modcontainer">
<form action="../includes/remove.inc.php" method="post">
          <?php
          $id = $_POST['id'];

          if (empty($id)) {
              header("Location: index.php?error=emptyfields");
              exit();
          }


            elseif(isset($_POST['id'])){

              require'../includes/dbh.inc.php';
              $idNum = $_POST['id'];
              $sql = "SELECT * FROM uploads WHERE id=".$idNum.";";
              $result = mysqli_query($conn, $sql);
              $resultCheck = mysqli_num_rows($result);
              $row = mysqli_fetch_assoc($result);





              echo '<label style="color:#000000">ID</label>
                    <input type="text" name="id" value="'.$row['id'].'"readonly/><br>
                    <input type="text" name="" value="'.$row['date'].'"hidden/><br>
                    <input type="text" name="" value="'.$row['time'].'"hidden/><br>
                    <label style="color:#000000">Document Name</label>
                    <input type="text" name="" value="'.$row['docName'].'"readonly/><br>
                    <label style="color:#000000">File Name</label>
                    <input type="text" name="fileName" value="'.$row['fileName'].'"readonly/><br>
                    <label style="color:#000000">Company</label>
                    <input type="text" name="" value="'.$row['company'].'"readonly/><br>
                    <input type="text" name="" value="'.$row['done'].'"hidden/><br>';
            }
          ?>
<button class="btn6 lnk" type='submit' name="remove">Yes - Remove</button>
<button class="btn6 lnk" name="keep">No - Back To Admin</button>
</form>
      </div>
  </div>
</div>

<div class="column-33">
</div>


<?php
  require 'footer.php';
?>
