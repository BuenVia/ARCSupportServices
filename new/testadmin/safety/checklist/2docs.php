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
              <h1 style="color:#FFFF00"><i class="far fa-file-alt"></i></i> <b>2. Documentation</b></h1>
        </div>
          <div class="modcontainer">

  <div class="mod" style="border:2px solid #FFFF00; border-radius:10px; padding:10px">


            <label style="color:white">2.1 Employers Liability Insurance in date?</label><br>
            <select type="text" style="width:10%" name="eli">
              <option><?php echo $eli ?></option>
              <option>Yes</option>
              <option>No</option>
            </select><br>

            <label style="color:white">2.2 Expiry Date</label><br>
            <input type="date" name="eliexp" value="<?php echo $eliExp ?>"><br><br>

</div><br>
  <div class="mod" style="border:2px solid #FFFF00; border-radius:10px; padding:10px">

            <label style="color:white">2.3 Public Liability Insurance in date?</label><br>
            <select type="text" style="width:10%" name="pli">
              <option><?php echo $pli ?></option>
              <option>Yes</option>
              <option>No</option>
            </select><br>

            <label style="color:white">2.4 Expiry Date</label><br>
            <input type="date" name="pliexp" value="<?php echo $pliExp ?>"><br><br>

</div><br>
  <div class="mod" style="border:2px solid #FFFF00; border-radius:10px; padding:10px">
            <label style="color:white">2.5 Road Risks Insurance in date?</label><br>
            <select type="text" style="width:10%" name="rri">
              <option><?php echo $rri ?></option>
              <option>Yes</option>
              <option>No</option>
            </select><br>

            <label style="color:white">2.6 Expiry Date</label><br>
            <input type="date" name="rriexp" value="<?php echo $rriExp ?>"><br><br>

</div><br>
  <div class="mod" style="border:2px solid #FFFF00; border-radius:10px; padding:10px">
            <label style="color:white">2.7 Accidents/ Incidents Log Book available?</label><br>
            <select type="text" style="width:10%" name="air">
              <option><?php echo $air ?></option>
              <option>Yes</option>
              <option>No</option>
            </select><br>

          </div><br>

            <label style="color:white">Additional Comments?</label><br>
            <textarea id="subject" name="docCom" placeholder="<?php echo $docCom ?>" style="width: 50%; height:50px"><?php echo $docCom ?></textarea><br>

          <button formaction="../../includes/questions.inc.php?bsid=<?php echo $bsid; ?>&inspid=<?php echo $inspId; ?>" class="btn88 cl8" name="2docs-submit">Submit</button>
          <button formaction="checklist.php?bsid=<?php echo $bsid; ?>&inspid=<?php echo $inspId; ?>" class="btn88 cl8" name="checklist-submit">Back</button>

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
