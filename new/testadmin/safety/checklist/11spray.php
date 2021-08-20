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
              <h1 style="color:#FFFF00"><i class="far fa-file-alt"></i></i> <b>10. Paint Mix</b></h1>
        </div>
          <div class="modcontainer">

            <label style="color:white">11.1 Number of spray booths?</label><br>
            <input type="text" style="width:75%" name="noSpray" value="<?php echo $noSpray ?>"><br>

            <label style="color:white">11.2 Extraction system in place an operating?</label><br>
            <select type="text" style="width:10%" name="sprayExt">
              <option><?php echo $sprayExt ?></option>
              <option>Yes</option>
              <option>No</option>
            </select><br>

            <label style="color:#00dddd">11.3 Last LEV test.</label><br>
            <input type="date"  name="sprayLEV" value="<?php echo $sprayLEV ?>"><br><br>

            <label style="color:white">11.4 Spray booth is enclosd, with doors always shut?</label><br>
            <select type="text" style="width:10%" name="encSpray">
              <option><?php echo $encSpray ?></option>
              <option>Yes</option>
              <option>No</option>
            </select><br>

            <label style="color:white">11.5 Doors open and close correctly?</label><br>
            <select type="text" style="width:10%" name="doorsSpray">
              <option><?php echo $doorsSpray ?></option>
              <option>Yes</option>
              <option>No</option>
            </select><br>

            <label style="color:white">11.6 Suitable PPE provided for staff?</label><br>
            <select type="text" style="width:10%" name="ppeSpray">
              <option><?php echo $ppeSpray ?></option>
              <option>Yes</option>
              <option>No</option>
            </select><br>

            <label style="color:white">11.7 List PPE provided?</label><br>
            <input type="text" style="width:75%" name="ppeProvSpray" value="<?php echo $ppeProvSpray ?>"><br>

            <label style="color:white">11.8 Are staff wearing PPE correctly?</label><br>
            <select type="text" style="width:10%" name="ppeWearSpray">
              <option><?php echo $ppeWearSpray ?></option>
              <option>Yes</option>
              <option>No</option>
            </select><br>

            <label style="color:white">11.9 Lighting is suitable?</label><br>
            <select type="text" style="width:10%" name="lightSpray">
              <option><?php echo $lightSpray ?></option>
              <option>Yes</option>
              <option>No</option>
            </select><br>

            <label style="color:white">Additional Comments.</label><br>
            <textarea id="subject" name="sprayCom" placeholder="<?php echo $sprayCom ?>" style="width: 50%; height:50px"><?php echo $sprayCom ?></textarea><br>

            <button formaction="../../includes/questions.inc.php?bsid=<?php echo $bsid?>&inspid=<?php echo $inspId?>" class="btn88 cl8" name="11spray-submit">Submit</button>
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
