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
            <div class="modhead" style="text-align:center">
                  <h1 style="color:#FFFF00"><i class="far fa-file-alt"></i></i> <b>Risk Assessments</b></h1>
            </div>
            <div class="modcontainer" style="background-color:white; border-radius:20px; padding:10px">
                  <button class="btn9 vda" type="submit" name="safety-submit">DSEAR</button>
                  <button class="btn9 vda" type="submit" name="safety-submit">COSHH</button>
                  <button class="btn9 vda" type="submit" name="safety-submit">PUWER</button>
                  <button class="btn9 vda" type="submit" name="safety-submit">LOLER</button>
                  <button class="btn9 vda" type="submit" name="safety-submit">Asbestos</button>
                  <button class="btn9 vda" type="submit" name="safety-submit">Young Workers</button>
            </div>
      </div>

</div>

<div class="row">
      <div class="column-33">
            <div class="modhead" style="text-align:center">
                  <h1 style="color:#FFFF00"><i class="far fa-file-alt"></i></i> <b>Inspection Logs</b></h1>
            </div>
            <div class="modcontainer" style="background-color:white; border-radius:20px; padding:10px">
                  <button class="btn9 vda" type="submit" name="safety-submit">DSEAR</button>
                  <button class="btn9 vda" type="submit" name="safety-submit">COSHH</button>
                  <button class="btn9 vda" type="submit" name="safety-submit">PUWER</button>
                  <button class="btn9 vda" type="submit" name="safety-submit">LOLER</button>
                  <button class="btn9 vda" type="submit" name="safety-submit">Asbestos</button>
                  <button class="btn9 vda" type="submit" name="safety-submit">Young Workers</button>
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
