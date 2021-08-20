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
              <h1 style="color:#FFFF00"><i class="far fa-file-alt"></i></i> <b>9. Workshop</b></h1>
        </div>
          <div class="modcontainer">

            <label style="color:white">9.1 Are walkways highlighted and kept clear of obstruction?</label><br>
            <select type="text" style="width:10%" name="wsWalk">
              <option><?php echo $wsWalk ?></option>
              <option>Yes</option>
              <option>No</option>
            </select><br>

            <label style="color:white">9.2 Are all access and egress points kept free of obstruction?</label><br>
            <select type="text" style="width:10%" name="wsEgr">
              <option><?php echo $wsEgr ?></option>
              <option>Yes</option>
              <option>No</option>
            </select><br>

            <label style="color:white">9.3 Suitable racking and shelving is used?</label><br>
            <select type="text" style="width:10%" name="wsRack">
              <option><?php echo $wsRack ?></option>
              <option>Yes</option>
              <option>No</option>
            </select><br>

            <label style="color:white">9.4 All items are easily accessible, with suitable ladders provided where needed?</label><br>
            <select type="text" style="width:10%" name="wsAcs">
              <option><?php echo $wsAcs ?></option>
              <option>Yes</option>
              <option>No</option>
            </select><br>

            <label style="color:#00dddd">9.5 Any ladders used are in good condition?</label><br>
            <select type="text" style="width:10%" name="wsLad">
              <option><?php echo $wsLad ?></option>
              <option>Yes</option>
              <option>No</option>
            </select><br>

            <label style="color:#00dddd">9.6 Is all welding performed in a designated area?</label><br>
            <select type="text" style="width:10%" name="wsWeld">
              <option><?php echo $wsWeld ?></option>
              <option>Yes</option>
              <option>No</option>
            </select><br>

            <label style="color:#00dddd">9.7 Does welding equipment appear to be in good condition?</label><br>
            <select type="text" style="width:10%" name="wsWeldEquip">
              <option><?php echo $wsWeldEquip ?></option>
              <option>Yes</option>
              <option>No</option>
            </select><br>

            <label style="color:#00dddd">9.8 Is suitable PPE provided for welding?</label><br>
            <select type="text" style="width:10%" name="wsWeldPPE">
              <option><?php echo $wsWeldPPE ?></option>
              <option>Yes</option>
              <option>No</option>
            </select><br>

            <label style="color:#00dddd">9.9 Does all sanding and grinding equipment appear to be in good condition?</label><br>
            <select type="text" style="width:10%" name="wsSand">
              <option><?php echo $wsSand ?></option>
              <option>Yes</option>
              <option>No</option>
            </select><br>

            <label style="color:#00dddd">9.10 Is battery charging performed in a safe and secure location, free from any unnessecary risks?</label><br>
            <select type="text" style="width:10%" name="wsBat">
              <option><?php echo $wsBat ?></option>
              <option>Yes</option>
              <option>No</option>
            </select><br>

            <label style="color:#00dddd">9.11 Is wheel changing performed in a safe and secure location, free from any unnessecary risks?</label><br>
            <select type="text" style="width:10%" name="wsWheel">
              <option><?php echo $wsWheel ?></option>
              <option>Yes</option>
              <option>No</option>
            </select><br>

            <label style="color:#00dddd">9.12 List types of lifting equipment used.</label><br>
            <input type="text"  name="wsLift" value="<?php echo $wsLift ?>"><br><br>

            <label style="color:#00dddd">9.13 Is all lifting equipment in good condition?</label><br>
            <select type="text" style="width:10%" name="wsLiftCond">
              <option><?php echo $wsLiftCond ?></option>
              <option>Yes</option>
              <option>No</option>
            </select><br>

            <label style="color:#00dddd">9.14 Is workshop suitably lit?</label><br>
            <select type="text" style="width:10%" name="wsLit">
              <option><?php echo $wsLit ?></option>
              <option>Yes</option>
              <option>No</option>
            </select><br>

            <label style="color:#00dddd">9.15 Is workshop suitably clean, tidy and organised?</label><br>
            <select type="text" style="width:10%" name="wsTidy">
              <option><?php echo $wsTidy ?></option>
              <option>Yes</option>
              <option>No</option>
            </select><br>

            <label style="color:white">Additional Comments.</label><br>
            <textarea id="subject" name="wsCom" placeholder="<?php echo $wsCom ?>" style="width: 50%; height:50px"></textarea><br>

            <button formaction="../../includes/questions.inc.php?bsid=<?php echo $bsid?>&inspid=<?php echo $inspId?>" class="btn88 cl8" name="9workshop-submit">Submit</button>
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
