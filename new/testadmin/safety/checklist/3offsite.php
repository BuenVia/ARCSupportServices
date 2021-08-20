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
              <h1 style="color:#FFFF00"><i class="far fa-file-alt"></i></i> <b>3. Off-Site Activities</b></h1>
        </div>
          <div class="modcontainer">

  <div class="mod" style="border:2px solid #FFFF00; border-radius:10px; padding:10px">



            <label style="color:white">3.1 Transporter vehicle used?</label><br>
            <select type="text" style="width:10%" name="trans">
              <option><?php echo $trans ?></option>
              <option>Yes</option>
              <option>No</option>
            </select><br>

            <label style="color:white">3.2 Operating license available?</label><br>
            <select type="text" style="width:10%" name="transOplic">
              <option><?php echo $transOplic ?></option>
              <option>Yes</option>
              <option>No</option>
            </select><br>

            <label style="color:white">3.3 Expiry Date</label><br>
            <input type="date" name="transExp" value="<?php echo $transExp ?>"><br><br>

            <label style="color:white">3.4 MOT up-to-date?</label><br>
            <select type="text" style="width:10%" name="transMot">
              <option><?php echo $transMot ?></option>
              <option>Yes</option>
              <option>No</option>
            </select><br>

            <label style="color:white">3.5 MOT due date</label><br>
            <input type="date" name="transMotDue" value="<?php echo $transMotDue ?>"><br><br>

            <label style="color:white">3.6 Drivers are monitored annually?</label><br>
            <select type="text" style="width:10%" name="transDriveMon">
              <option><?php echo $transDriveMon ?></option>
              <option>Yes</option>
              <option>No</option>
            </select><br>

            <label style="color:white">3.6 Drivers license on file and updated annually?</label><br>
            <select type="text" style="width:10%" name="transDriveLic">
              <option><?php echo $transDriveLic ?></option>
              <option>Yes</option>
              <option>No</option>
            </select><br>

</div><br>

<div class="mod" style="border:2px solid #FFFF00; border-radius:10px; padding:10px">

          <label style="color:white">3.7 Collection and Delivery service used?</label><br>
          <select type="text" style="width:10%" name="collect">
            <option><?php echo $collect ?></option>
            <option>Yes</option>
            <option>No</option>
          </select><br>

          <label style="color:white">3.8 Number of drivers used?</label><br>
          <select type="text" style="width:10%" name="colNoDrive">
            <option><?php echo $colNoDrive ?></option>
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
            <option>6</option>
            <option>7</option>
            <option>8</option>
            <option>9</option>
            <option>10+</option>
          </select><br>

          <label style="color:white">3.6 Drivers are monitored annually?</label><br>
          <select type="text" style="width:10%" name="colDriveMon">
            <option><?php echo $colDriveMon ?></option>
            <option>Yes</option>
            <option>No</option>
          </select><br>

          <label style="color:white">3.6 Drivers license on file and updated annually?</label><br>
          <select type="text" style="width:10%" name="colDriveLic">
            <option><?php echo $colDriveLic ?></option>
            <option>Yes</option>
            <option>No</option>
          </select><br>

          <textarea id="subject" name="colCom" placeholder="<?php echo $colCom ?>" style="width: 50%; height:50px"><?php echo $colCom ?></textarea><br>
</div><br>

          <br>
          <button formaction="../../includes/questions.inc.php?bsid=<?php echo $bsid?>&inspid=<?php echo $inspId?>" class="btn88 cl8" name="3offsite-submit">Submit</button>
          <button formaction="checklist.php?bsid=<?php echo $bsid?>&inspid=<?php echo $inspId?>" class="btn88 cl8" name="checklist-submit">Back</button>';

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
