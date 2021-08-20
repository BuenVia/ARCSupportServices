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

            <label style="color:white">14.1 Pressure washer used?</label><br>
            <select type="text" style="width:10%" name="washPressure">
              <option><?php echo $washPressure ?></option>
              <option>Yes</option>
              <option>No</option>
            </select><br>

            <label style="color:white">14.2 Washbay is clean and tidy?</label><br>
            <select type="text" style="width:10%" name="washClean">
              <option><?php echo $washClean ?></option>
              <option>Yes</option>
              <option>No</option>
            </select><br>

            <label style="color:#00dddd">14.3 Cleaning chemicals lidded and stored?</label><br>
            <select type="text" style="width:10%" name="washChem">
              <option><?php echo $washChem ?></option>
              <option>Yes</option>
              <option>No</option>
            </select><br>

            <label style="color:#00dddd">14.4 Washbay cleaning items are in good condition?</label><br>
            <select type="text" style="width:10%" name="washItems">
              <option><?php echo $washItems ?></option>
              <option>Yes</option>
              <option>No</option>
            </select><br>

            <label style="color:white">14.5 Lighting is suitable?</label><br>
            <select type="text" style="width:10%" name="washLight">
              <option><?php echo $washLight ?></option>
              <option>Yes</option>
              <option>No</option>
            </select><br>

            <label style="color:white">Additional Comments.</label><br>
            <textarea id="subject" name="washCom" placeholder="<?php echo $washCom ?>" style="width: 50%; height:50px"><?php echo $washCom ?></textarea><br>

            <button formaction="../../includes/questions.inc.php?bsid=<?php echo $bsid?>&inspid=<?php echo $inspId?>" class="btn88 cl8" name="14wash-submit">Submit</button>
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
