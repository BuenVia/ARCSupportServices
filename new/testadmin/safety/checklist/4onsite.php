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
              <h1 style="color:#FFFF00"><i class="far fa-file-alt"></i></i> <b>4. On-Site Activities</b></h1>
        </div>
          <div class="modcontainer">

  <div class="mod" style="border:2px solid #FFFF00; border-radius:10px; padding:10px">

            <label style="color:white">4.1 Number of buildings?</label><br>
            <input type="text" style="width:50%" name="build" value="<?php echo $build ?>"><br>

            <label style="color:white">4.2 Description of site</label><br>
            <textarea id="subject" name="des" placeholder="<?php echo $des ?>" style="width: 50%; height:50px"></textarea><br>

            <label style="color:white">4.3 Designated reception area?</label><br>
            <select type="text" style="width:10%" name="recep">
              <option><?php echo $recep ?></option>
              <option>Yes</option>
              <option>No</option>
            </select><br>

            <label style="color:white">4.4 Number of office areas?</label><br>
            <input type="text" style="width:50%" name="office" value="<?php echo $office ?>"><br>

            <label style="color:white">4.5 Number of toilet areas?</label><br>
            <input type="text" style="width:50%" name="toilet" value="<?php echo $toilet ?>"><br>

            <label style="color:white">4.6 Number of break rooms?</label><br>
            <input type="text" style="width:50%" name="break" value="<?php echo $break ?>"><br>

            <label style="color:white">4.7 Number of workshops?</label><br>
            <input type="text" style="width:50%" name="workshop" value="<?php echo $workshop ?>"><br>

            <label style="color:white">4.8 Number of washaby areas?</label><br>
            <input type="text" style="width:50%" name="washbay" value="<?php echo $washbay ?>"><br>

            <label style="color:white">4.9 Yard on site?</label><br>
            <select type="text" style="width:10%" name="yard">
              <option><?php echo $yard ?></option>
              <option>Yes</option>
              <option>No</option>
            </select><br>

            <label style="color:white">4.10 Designated smoking area?</label><br>
            <select type="text" style="width:10%" name="smoke">
              <option><?php echo $smoke ?></option>
              <option>Yes</option>
              <option>No</option>
            </select><br>

            <textarea id="subject" name="facCom" placeholder="<?php echo $facCom ?>" style="width: 50%; height:50px"><?php echo $facCom ?></textarea><br>
</div><br>

          <br>
          <button formaction="../../includes/questions.inc.php?bsid=<?php echo $bsid?>&inspid=<?php echo $inspId?>" class="btn88 cl8" name="4onsite-submit">Submit</button>
          <button formaction="checklist.php?bsid=<?php echo $bsid?>&inspid=<?php echo $inspId?>" class="btn88 cl8" name="checklist-submit">Back</button>

          </form>
            <br><br>
          </div>
        </div>
  </div>



</div>
<br><br>
<?php
  require '../../../footer.php';
?>
