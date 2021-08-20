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

            <label style="color:white">10.1 Number of paint mix rooms?</label><br>
            <input type="text" style="width:75%" name="noPmix" value="<?php echo $noPmix ?>"><br>

            <label style="color:white">10.2 Paints are suitably stored?</label><br>
            <select type="text" style="width:10%" name="storeP">
              <option><?php echo $storeP ?></option>
              <option>Yes</option>
              <option>No</option>
            </select><br>

            <label style="color:white">10.3 Paints in suitable containers and covered?</label><br>
            <select type="text" style="width:10%" name="contP">
              <option><?php echo $contP ?></option>
              <option>Yes</option>
              <option>No</option>
            </select><br>

            <label style="color:white">10.4 Extraction system in place an operating?</label><br>
            <select type="text" style="width:10%" name="extP">
              <option><?php echo $extP ?></option>
              <option>Yes</option>
              <option>No</option>
            </select><br>

            <label style="color:#00dddd">10.5 Last LEV test.</label><br>
            <input type="date"  name="pLEV" value="<?php echo $pLEV ?>"><br><br>

            <label style="color:white">10.6 Mix room is enclosd, with doors always shut?</label><br>
            <select type="text" style="width:10%" name="encP">
              <option><?php echo $encP ?></option>
              <option>Yes</option>
              <option>No</option>
            </select><br>

            <label style="color:white">10.7 Suitable PPE provided for staff?</label><br>
            <select type="text" style="width:10%" name="ppeP">
              <option><?php echo $ppeP ?></option>
              <option>Yes</option>
              <option>No</option>
            </select><br>

            <label style="color:white">10.8 List PPE provided?</label><br>
            <input type="text" style="width:75%" name="ppeProv" value="<?php echo $ppeProv ?>"><br>

            <label style="color:white">10.9 Are staff wearing PPE correctly?</label><br>
            <select type="text" style="width:10%" name="ppeWear">
              <option><?php echo $ppeWear ?></option>
              <option>Yes</option>
              <option>No</option>
            </select><br>

            <label style="color:white">10.10 Lighting is suitable?</label><br>
            <select type="text" style="width:10%" name="lightP">
              <option><?php echo $lightP ?></option>
              <option>Yes</option>
              <option>No</option>
            </select><br>

            <label style="color:white">10.11 Gun cleaning machine in mix room?</label><br>
            <select type="text" style="width:10%" name="gunClean">
              <option><?php echo $gunClean ?></option>
              <option>Yes</option>
              <option>No</option>
            </select><br>

            <label style="color:white">10.12 Gun cleaning ventilation in operation?</label><br>
            <select type="text" style="width:10%" name="gCvent">
              <option><?php echo $gCvent ?></option>
              <option>Yes</option>
              <option>No</option>
            </select><br>

            <label style="color:white">10.13 Last gun cleaning machine LEV test date.</label><br>
            <input type="text" style="width:75%" name="gCLEV" value="<?php echo $gCLEV ?>"><br>

            <label style="color:white">10.14 Area is free from trip hazards?</label><br>
            <select type="text" style="width:10%" name="tripP">
              <option><?php echo $tripP ?></option>
              <option>Yes</option>
              <option>No</option>
            </select><br>

            <label style="color:white">10.15 Area is free from unesseccary eletrical items?</label><br>
            <select type="text" style="width:10%" name="elecP">
              <option><?php echo $elecP ?></option>
              <option>Yes</option>
              <option>No</option>
            </select><br>

            <label style="color:white">Additional Comments.</label><br>
            <textarea id="subject" name="paintCom" placeholder="<?php echo $paintCom ?>" style="width: 50%; height:50px"><?php echo $paintCom ?></textarea><br>

            <button formaction="../../includes/questions.inc.php?bsid=<?php echo $bsid?>&inspid=<?php echo $inspId?>" class="btn88 cl8" name="10pmix-submit">Submit</button>
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
