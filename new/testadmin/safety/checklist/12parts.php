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

            <label style="color:white">12.1 Parts Storage is clean and tidy?</label><br>
            <select type="text" style="width:10%" name="partsClean">
              <option><?php echo $partsClean ?></option>
              <option>Yes</option>
              <option>No</option>
            </select><br>

            <label style="color:white">12.2 Suitable racking and shelving is used?</label><br>
            <select type="text" style="width:10%" name="partsRack">
              <option><?php echo $partsRack ?></option>
              <option>Yes</option>
              <option>No</option>
            </select><br>

            <label style="color:white">12.3 All items are easily accessible, with suitable ladders provided where needed?</label><br>
            <select type="text" style="width:10%" name="partsAccess">
              <option><?php echo $partsAccess ?></option>
              <option>Yes</option>
              <option>No</option>
            </select><br>

            <label style="color:#00dddd">12.4 Any ladders used are in good condition?</label><br>
            <select type="text" style="width:10%" name="partsLadder">
              <option><?php echo $partsLadder ?></option>
              <option>Yes</option>
              <option>No</option>
            </select><br>

            <label style="color:white">12.5 Suitable access and egress, which is unblocked?</label><br>
            <select type="text" style="width:10%" name="partsEgress">
              <option><?php echo $partsEgress ?></option>
              <option>Yes</option>
              <option>No</option>
            </select><br>

            <label style="color:white">12.6 Lighting is suitable?</label><br>
            <select type="text" style="width:10%" name="partsLight">
              <option><?php echo $partsLight ?></option>
              <option>Yes</option>
              <option>No</option>
            </select><br>

            <label style="color:white">Additional Comments.</label><br>
            <textarea id="subject" name="partsCom" placeholder="<?php echo $partsCom ?>" style="width: 50%; height:50px"><?php echo $partsCom ?></textarea><br>

            <button formaction="../../includes/questions.inc.php?bsid=<?php echo $bsid?>&inspid=<?php echo $inspId?>" class="btn88 cl8" name="12parts-submit">Submit</button>
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
