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
                    <h1 style="color:#FFFF00"><i class="far fa-file-alt"></i></i> <b>Inspection</b></h1>
              </div>
              <div class="modcontainer">

                    <?php echo inspect(); ?>

                    <br><br>
              </div>
          </div>
      </div>

      <div class="column-33">
      </div>

</div>

<div class="row">

  <div class="column-33">
  </div>

  <div class="column-33" style="text-align:center;border:2px solid #FFFF00; border-radius:10px; padding:10px">
        <div class="modhead" style="text-align:center;border:2px solid #FFFF00; border-radius:10px; padding:10px">
              <h1 style="color:#FFFF00"><i class="far fa-file-alt"></i></i> <b>Risk Assessments</b></h1>
        </div>
        <div class="modcontainer">

        <div class="row" style="max-height:300px;overflow: scroll;">
          <div class="column">
            <?php echo hsUploads(); ?>
          </div>

          <div class="column" style="color:white">
            <a>Last Updated: ?</a><br>
            <a>Last Updated: ?</a><br>
          </div>
        </div>

            <div style="text-align:center;border:2px solid #FFFF00; border-radius:10px; padding:10px">
              <a style="color:#FFFF00">Risk Assessments Upload</a>
            <form action="../includes/customer.inc.php?bsid=<?php echo $custBsid ?>&bs=<?php echo $custBs ?>" method="POST" enctype="multipart/form-data">
              <input type="file" name="file">
              <button type="submit" name="raupload-submit" class="btn88 cl8">Upload</button>
            </form>
          </div>

        </div>
  </div>

      <div class="column-33" style="text-align:center;border:2px solid #FFFF00; border-radius:10px; padding:10px">
            <div class="modhead" style="text-align:center">
                  <h1 style="color:#FFFF00"><i class="far fa-file-alt"></i></i> <b>Policies</b></h1>
            </div>
            <div class="modcontainer">

              <?php echo polUploads(); ?>

              <div style="text-align:center;border:2px solid #FFFF00; border-radius:10px; padding:10px">
                <a style="color:#FFFF00">H&S Policy Upload</a>
              <form action="../includes/customer.inc.php?bsid=<?php echo $custBsid ?>&bs=<?php echo $custBs ?>" method="POST" enctype="multipart/form-data">
                <input type="file" name="file">
                <button type="submit" name="polupload-submit" class="btn88 cl8">Upload</button>
              </form>
              </div>

            </div>
      </div>

    </div>
</div>

</main>

<?php
  require '../../footer.php';
?>
