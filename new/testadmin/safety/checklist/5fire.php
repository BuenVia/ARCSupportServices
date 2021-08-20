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
              <h1 style="color:#FFFF00"><i class="far fa-file-alt"></i></i> <b>5. Fire Safety</b></h1>
        </div>
          <div class="modcontainer">

            <label style="color:white">5.1 Is there a fire alarm for the site?</label><br>
            <select type="text" style="width:10%" name="fAlarm">
              <option><?php echo $fAlarm ?></option>
              <option>Yes</option>
              <option>No</option>
            </select><br>

            <label style="color:white">5.2 Does the fire alarm have sounders?</label><br>
            <select type="text" style="width:10%" name="fSound">
              <option><?php echo $fSound ?></option>
              <option>Yes</option>
              <option>No</option>
            </select><br>

            <label style="color:white">5.3 Does the fire alarm have detection?</label><br>
            <select type="text" style="width:10%" name="fDet">
              <option><?php echo $fDet ?></option>
              <option>Yes</option>
              <option>No</option>
            </select><br>

            <label style="color:white">5.4 Where is the detection located?</label><br>
            <input type="text" style="width:75%" name="detLoc" value="<?php echo $detLoc ?>"><br>

            <label style="color:white">5.5 Are there manual call points on site?</label><br>
            <select type="text" style="width:10%" name="manCall">
              <option><?php echo $manCall ?></option>
              <option>Yes</option>
              <option>No</option>
            </select><br>

            <label style="color:white">5.6 Where is the main control panel located?</label><br>
            <input type="text" style="width:75%" name="conPan" value="<?php echo $conPan ?>"><br>

            <label style="color:white">5.7 Do they perform an internal test at least once per month?</label><br>
            <select type="text" style="width:10%" name="inTest">
              <option><?php echo $inTest ?></option>
              <option>Yes</option>
              <option>No</option>
            </select><br>

            <label style="color:white">5.8 Date of last internal test.</label><br>
            <input type="date"  name="testDate" value="<?php echo $testDate ?>"><br><br>

            <label style="color:white">5.9 Is there an annual service by a 3rd party company?</label><br>
            <select type="text" style="width:10%" name="service">
              <option><?php echo $service ?></option>
              <option>Yes</option>
              <option>No</option>
            </select><br>

            <label style="color:white">5.10 Date of service.</label><br>
            <input type="date"  name="servDate" value="<?php echo $servDate ?>"><br><br>

            <label style="color:white">Additional Comments.</label><br>
            <textarea id="subject" name="fireCom" placeholder="<?php echo $fireCom ?>" style="width: 50%; height:50px"><?php echo $fireCom ?></textarea><br>

            <button formaction="../../includes/questions.inc.php?bsid=<?php echo $bsid?>&inspid=<?php echo $inspId?>" class="btn88 cl8" name="5fire-submit">Submit</button>
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
