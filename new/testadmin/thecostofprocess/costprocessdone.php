<?php
    require'../adminheader.php';
    require'../includes/auth_check.php';
?>

<!--HEADER-->
<div style="background-color:#999999">
<!--MAIN-->

<div class="column-33">
</div>


<div class="column-33">
  <div class="mod">
      <div class="modhead" style="text-align:center">
            <h1 style="color:#000000"><i class="far fa-file-alt"></i></i> <b>Reports</b></h1>
      </div>
      <div class="modcontainer">
<form action="includes/cpremove.inc.php" method="post">
          <?php
          $id = $_POST['id'];

          if (empty($id)) {
              header("Location: costprocessadmin.php?error=emptyfields");
              exit();
          }


            elseif(isset($_POST['id'])){

              require'../includes/dbh.inc.php';
              $idNum = $_POST['id'];
              $sql = "SELECT * FROM download WHERE id=".$idNum.";";
              $result = mysqli_query($conn, $sql);
              $resultCheck = mysqli_num_rows($result);
              $row = mysqli_fetch_assoc($result);





              echo '<label style="color:#000000">ID</label>
                    <input type="text" name="id" value="'.$row['id'].'"readonly/><br>
                    <label style="color:#000000">Date</label>
                    <input type="text" name="" value="'.$row['date'].'"readonly/><br>
                    <label style="color:#000000">Email</label>
                    <input type="text" name="" value="'.$row['email'].'"readonly/><br>
                    <label style="color:#000000">Name</label>
                    <input type="text" name="" value="'.$row['name'].'"readonly/><br>
                    <label style="color:#000000">Question</label>
                    <input type="text" name="fileName" value="'.$row['question'].'"readonly/><br>
                    <label style="color:#000000">Opt-In</label>
                    <input type="text" name="" value="'.$row['optin'].'"readonly/><br>';
            }
          ?>
<button class="btn6 lnk" type='submit' name="remove">Yes - Remove</button>
<button class="btn6 lnk" name="keep">No - Back To Admin</button>
</form>
<br><br><br>
      </div>
  </div>
</div>

<div class="column-33">
</div>

<?php
  require '../../footer.php';
?>
