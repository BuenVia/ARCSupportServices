<?php
    require'../../adminheader.php';
    require'../../includes/auth_check.php';
    require'../../includes/insp.inc.php';
?>
<div class"row">


<form action="" method="POST">
  <div class="column-33">
      <?php require'../inspsidepanel.php'; ?>
  </div>



  <div class="column-66">
    <div class="mod" style="border:2px solid #FFFF00; border-radius:10px; padding:10px">
        <div class="modhead" style="text-align:center">
              <h1 style="color:#FFFF00"><i class="far fa-file-alt"></i></i> <b>1. General Information</b></h1>
        </div>
          <div class="modcontainer">

            <label style="color:#00dddd">Date of inspection.</label><br>
            <input type="date"  name="date" value="<?php echo $dateInsp ?>"><br><br>
            <label style="color:#00dddd">Name of inspector.</label><br>
            <input type="text" style="width:75%" name="nameInsp" value="<?php echo $insp ?>"><br>
            <label style="color:#00dddd">Name of attendees.</label><br>
            <input type="text" style="width:75%" name="nameAtt" value="<?php echo $attend ?>"><br>

            <label style="color:white">Additional Comments?</label><br>
            <textarea id="subject" name="genCom" placeholder="<?php echo $genCom ?>" style="width: 50%; height:50px"><?php echo $genCom ?></textarea><br>

            <button formaction="../../includes/questions.inc.php?bsid=<?php echo $bsid; ?>&inspid=<?php echo $inspId; ?>" class="btn88 cl8" name="1info-submit">Submit</button>
            <button formaction="checklist.php?bsid=<?php echo $bsid; ?>&inspid=<?php echo $inspId; ?>" class="btn88 cl8" name="checklist-submit">Back</button>

          </div>
        </div>
  </div>
</form>
</main>

<?php
  require '../../../footer.php';
?>
