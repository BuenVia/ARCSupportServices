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

            <label style="color:white">13.1 Type of surface?</label><br>
            <input type="text" style="width:75%" name="yardSurface" value="<?php echo $yardSurface ?>"><br>

            <label style="color:white">13.2 Is surface sufficently even and free of potholes?</label><br>
            <select type="text" style="width:10%" name="yardEven">
              <option><?php echo $yardEven ?></option>
              <option>Yes</option>
              <option>No</option>
            </select><br>

            <label style="color:white">13.3 What is stored in the yard?</label><br>
            <input type="text" style="width:75%" name="yardStore" value="<?php echo $yardStore ?>"><br>

            <label style="color:#00dddd">13.4 Free from unnecessary combustibles?</label><br>
            <select type="text" style="width:10%" name="yardCombust">
              <option><?php echo $yardCombust ?></option>
              <option>Yes</option>
              <option>No</option>
            </select><br>

            <label style="color:white">13.5 How many gates leading off-site?</label><br>
            <input type="text" style="width:75%" name="yardGates" value="<?php echo $yardGates ?>"><br>

            <label style="color:white">13.6 Gates are unlocked during the day?</label><br>
            <select type="text" style="width:10%" name="yardUnlocked">
              <option><?php echo $yardUnlocked ?></option>
              <option>Yes</option>
              <option>No</option>
            </select><br>

            <label style="color:white">13.7 Access and egress is unblocked?</label><br>
            <select type="text" style="width:10%" name="yardAccess">
              <option><?php echo $yardAccess ?></option>
              <option>Yes</option>
              <option>No</option>
            </select><br>

            <label style="color:white">13.8 Area is well lit?</label><br>
            <select type="text" style="width:10%" name="yardLit">
              <option><?php echo $yardLit ?></option>
              <option>Yes</option>
              <option>No</option>
            </select><br>

            <label style="color:white">Additional Comments.</label><br>
            <textarea id="subject" name="yardCom" placeholder="<?php echo $yardCom ?>" style="width: 50%; height:50px"><?php echo $yardCom ?></textarea><br>

            <button formaction="../../includes/questions.inc.php?bsid=<?php echo $bsid?>&inspid=<?php echo $inspId?>" class="btn88 cl8" name="13yard-submit">Submit</button>
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
