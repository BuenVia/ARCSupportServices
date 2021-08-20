<?php
    require'../adminheader.php';
    require'../includes/auth_check.php';
    require'../includes/insp.inc.php';
?>
<div style="background:#000000">
<div class="row">

  <div class="column-20">
      <?php require'inspsidepanel.php'; ?>
  </div>


  <div class="column-60">
    <div class="mod" style="border:2px solid #FFFF00; border-radius:10px; padding:10px">
        <div class="modhead" style="text-align:center">
              <h1 style="color:#FFFF00"><i class="far fa-file-alt"></i></i> <b>Non-Conformities Report</b></h1>
              <div class="row">
                            <div class="column" style="text-align:left">
                                <label style="color:#FFFF00">Bodyshop: <a style="color:white"><?php echo $bodyShop; ?></a></label><br>
                                <label style="color:#FFFF00">Bodyshop ID: <a style="color:white"><?php echo $idBodyshop; ?></a></label><br>
                            </div>

                            <div class="column" style="text-align:left">
                                <label style="color:#FFFF00">Date: <a style="color:white"><?php echo $date; ?></a></label><br>
                                <label style="color:#FFFF00">Inspection ID: <a style="color:white"><?php echo $inspId; ?></a></label><br>
                            </div>
              </div>

                            <h2 style="color:white"><i class="fas fa-wrench"></i> <b>No. of non-conformities: <a style="color:red"><b><u><?php echo $noConform['No'] ?></b></u></a></b></h1>
                <?php echo nonConform() ?>
        </div>


</div>
</div>

<div class="column-20">
</div>

</div>
</div>

<br><br>
<?php
require '../../footer.php';
?>
