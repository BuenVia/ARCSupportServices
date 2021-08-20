<?php
    require'../../adminheader.php';
    require'../../includes/auth_check.php';
    require'../../includes/insp.inc.php';
?>
<div style="background-color:#999999">
<form action="" method="POST">

  <div class="column-33">
      <?php require'../inspsidepanel.php'; ?>
  </div>

  <div class="column-66">
    <div class="mod" style="border:2px solid #FFFF00; border-radius:10px; padding:10px">
        <div class="modhead" style="text-align:center">
              <h1 style="color:#FFFF00"><i class="far fa-file-alt"></i></i> <b>6. Staff Training</b></h1>
        </div>
          <div class="modcontainer">

            <label style="color:white">6.1 All staff have been trained in fire safety and training documented?</label><br>
            <select type="text" style="width:10%" name="fireTrain">
              <option><?php echo $fireTrain ?></option>
              <option>Yes</option>
              <option>No</option>
            </select><br>

            <label style="color:white">6.2 All staff have been trained in general safety and training documented?</label><br>
            <select type="text" style="width:10%" name="genTrain">
              <option><?php echo $genTrain ?></option>
              <option>Yes</option>
              <option>No</option>
            </select><br>

            <label style="color:white">6.3 All staff have been trained in using equipment correctly and training documented?</label><br>
            <select type="text" style="width:10%" name="equipTrain">
              <option><?php echo $equipTrain ?></option>
              <option>Yes</option>
              <option>No</option>
            </select><br>

            <label style="color:white">Additional Comments.</label><br>
            <textarea id="subject" name="trainCom" placeholder="<?php echo $trainCom ?>" style="width: 50%; height:50px"><?php echo $trainCom ?></textarea><br>

            <button formaction="../../includes/questions.inc.php?bsid=<?php echo $bsid?>&inspid=<?php echo $inspId?>" class="btn88 cl8" name="6train-submit">Submit</button>
            <button formaction="checklist.php?bsid=<?php echo $bsid?>&inspid=<?php echo $inspId?>" class="btn88 cl8" name="checklist-submit">Back</button>


          </div>
        </div>
  </div>
</form>
</main>

</div>
<?php
  require '../../../footer.php';
?>
