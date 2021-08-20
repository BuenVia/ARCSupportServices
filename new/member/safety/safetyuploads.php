<?php
    require'../memberheader.php';
    // require'includes/auth_check.php';

?>


<!--HEADER-->
<div class="background4">


<!--MAIN-->
<div class="row">

<div class="column-33">
    <?php require'../memberside.php'; ?>
</div>

<div class="column-33">
  <div class="mod">

      <div class="modhead" style="text-align:center;border:2px solid #FFFF00; border-radius:10px; padding:10px">
            <h1 style="color:#FFFF00"><i class="far fa-eye"></i> <b>Risk Assessments</b></h1>
          </div>

      <div class="modcontainer">

        <br>
              <div class="modcontainer" style="text-align:center;border:1px solid #FFFF00; border-radius:10px; padding:10px">
                <?php echo riskAssess(); ?>

      </div>

  </div>
</div>
</div>

<div class="column-33">
  <div class="mod">

      <div class="modhead" style="text-align:center;border:2px solid #FFFF00; border-radius:10px; padding:10px">
            <h1 style="color:#FFFF00"><i class="fas fa-cloud-upload-alt"></i> <b>Policies</b></h1>
          </div>
<br>
      <div class="modcontainer" style="text-align:center;border:1px solid #FFFF00; border-radius:10px; padding:10px">


      </div>

  </div>
</div>


</div>
</div>
<br><br>
<?php
  require '../../footer.php';
?>
