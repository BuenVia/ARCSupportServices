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
              <h1 style="color:#FFFF00"><i class="far fa-file-alt"></i></i> <b>8. Rest Facilities</b></h1>
        </div>
          <div class="modcontainer">

            <label style="color:white">8.1 W/C location(s)?</label><br>
            <input type="text" style="width:75%" name="wcLoc" value="<?php echo $wcLoc ?>"><br>

            <label style="color:white">8.2 W/C well kept?</label><br>
            <select type="text" style="width:10%" name="wcKept">
              <option><?php echo $wcKept ?></option>
              <option>Yes</option>
              <option>No</option>
            </select><br>

            <label style="color:white">8.3 W/C cleaning records available?</label><br>
            <select type="text" style="width:10%" name="wcRec">
              <option><?php echo $wcRec ?></option>
              <option>Yes</option>
              <option>No</option>
            </select><br>

            <label style="color:white">8.4 Break Room location(s)?</label><br>
            <input type="text" style="width:75%" name="brLoc" value="<?php echo $brLoc ?>"><br>

            <label style="color:white">8.5 Break Room well kept?</label><br>
            <select type="text" style="width:10%" name="brKept">
              <option><?php echo $brKept ?></option>
              <option>Yes</option>
              <option>No</option>
            </select><br>

            <label style="color:white">8.6 Break Room cleaning records available?</label><br>
            <select type="text" style="width:10%" name="brRec">
              <option><?php echo $brRec ?></option>
              <option>Yes</option>
              <option>No</option>
            </select><br>

            <label style="color:white">8.7 Drinking water available?</label><br>
            <select type="text" style="width:10%" name="water">
              <option><?php echo $water ?></option>
              <option>Yes</option>
              <option>No</option>
            </select><br>

            <label style="color:white">Additional Comments.</label><br>
            <textarea id="subject" name="restCom" placeholder="<?php echo $restCom ?>" style="width: 50%; height:50px"><?php echo $restCom ?></textarea><br>

            <button formaction="../../includes/questions.inc.php?bsid=<?php echo $bsid?>&inspid=<?php echo $inspId?>" class="btn88 cl8" name="8rest-submit">Submit</button>
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
