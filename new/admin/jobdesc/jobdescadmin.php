<?php
    require'../adminheader.php';
    require'../includes/auth_check.php';
    require'../includes/customer.inc.php';
    require'../includes/insp.inc.php';
?>

<main>

<div style="background:#000000">

<div class="row">

  <div class="column-33">
      <?php require '../manage/sidepanel.php';?>
    </div>

      <div class="column-33">
          <div class="mod">
              <div class="modhead" style="text-align:center">
                    <h1 style="color:#FFFF00"><i class="far fa-file-alt"></i></i> <b>Documents</b></h1>
              </div>
              <div class="modcontainer">

                <?php echo jobDesc(); ?>

                    <br><br>
              </div>
          </div>
      </div>

      <div class="column-33">
            <div class="modhead" style="text-align:center">
                  <h1 style="color:#FFFF00"><i class="far fa-file-alt"></i></i> <b>Upload</b></h1>
            </div>
            <div class="modcontainer" style="background-color:white; border-radius:20px; padding:10px">

              <?php echo custDet(); ?>

              <form action="../includes/customer.inc.php?bsid=<?php echo $custBsid ?>&bs=<?php echo $custBs ?>" method="POST" enctype="multipart/form-data">
                <input type="file" name="file">
                <br><br>
                <button type="submit" name="upload-submit" class="btn88 cl8">Upload</button>
              </form>

            </div>
      </div>

</div>

<div class="row">
      <div class="column-33">
            <div class="modhead" style="text-align:center">
                  <h1 style="color:#FFFF00"><i class="far fa-file-alt"></i></i> <b>Header</b></h1>
            </div>
            <div class="modcontainer" style="background-color:white; border-radius:20px; padding:10px">

            </div>
      </div>

      <div class="column-33">
      </div>

      <div class="column-33">
      </div>

    </div>
</div>

</main>

<?php
  require '../../footer.php';
?>
