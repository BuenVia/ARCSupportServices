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
              <h1 style="color:#FFFF00"><i class="far fa-file-alt"></i></i> <b>7. Reception</b></h1>
        </div>
          <div class="modcontainer">

            <label style="color:white">7.1 Where is the reception located?</label><br>
            <input type="text" style="width:75%" name="recepLoc" value="<?php echo $recepLoc ?>"><br>

            <label style="color:white">7.2 Reception area is tidy and free from any significant risks?</label><br>
            <select type="text" style="width:10%" name="recepRisk">
              <option><?php echo $recepRisk ?></option>
              <option>Yes</option>
              <option>No</option>
            </select><br>

            <label style="color:white">Additional Comments.</label><br>
            <textarea id="subject" name="recepCom" placeholder="<?php echo $recepCom ?>" style="width: 50%; height:50px"><?php echo $recepCom ?></textarea><br>

            <button formaction="../../includes/questions.inc.php?bsid=<?php echo $bsid?>&inspid=<?php echo $inspId?>" class="btn88 cl8" name="7recep-submit">Submit</button>
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
