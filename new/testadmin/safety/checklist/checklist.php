<?php
    require'../../adminheader.php';
    require'../../includes/auth_check.php';
    require'../../includes/insp.inc.php';
?>
<div style="background:#000000">

  <div class="column-33">
      <?php require'../inspsidepanel.php'; ?>
  </div>

  <div class="column-33">
    <div class="mod" style="border:2px solid #FFFF00; border-radius:10px; padding:10px">
        <div class="modhead" style="text-align:center">
              <h1 style="color:#FFFF00"><i class="far fa-file-alt"></i></i> <b>Checklist</b></h1>
        </div>
          <div class="modcontainer">



                      <a href="1info.php?bsid=<?php echo $bsid; ?>&inspid=<?php echo $inspId; ?>"><button class="btn88 cl8">1. General Information</button></a> <?php echo sectionComplete1(); ?><br>
                      <a href="2docs.php?bsid=<?php echo $bsid; ?>&inspid=<?php echo $inspId; ?>"><button class="btn88 cl8">2. Documentation</button></a> <?php echo sectionComplete2(); ?><br>
                      <a href="3offsite.php?bsid=<?php echo $bsid; ?>&inspid=<?php echo $inspId; ?>"><button class="btn88 cl8">3. Off-Site</button></a> <?php echo sectionComplete3(); ?><br>
                      <a href="4onsite.php?bsid=<?php echo $bsid; ?>&inspid=<?php echo $inspId; ?>"><button class="btn88 cl8">4. On-Site</button></a> <?php echo sectionComplete4(); ?><br>
                      <a href="5fire.php?bsid=<?php echo $bsid; ?>&inspid=<?php echo $inspId; ?>"><button class="btn88 cl8">5. Fire Safety</button></a> <?php echo sectionComplete5(); ?><br>
                      <a href="6train.php?bsid=<?php echo $bsid; ?>&inspid=<?php echo $inspId; ?>"><button class="btn88 cl8">6. Training</button></a> <?php echo sectionComplete6(); ?><br>
                      <a href="7recep.php?bsid=<?php echo $bsid; ?>&inspid=<?php echo $inspId; ?>"><button class="btn88 cl8">7. Reception</button></a> <?php echo sectionComplete7(); ?><br>
                      <a href="8rest.php?bsid=<?php echo $bsid; ?>&inspid=<?php echo $inspId; ?>"><button class="btn88 cl8">8. Rest Facilities</button></a> <?php echo sectionComplete8(); ?><br>
                      <a href="9workshop.php?bsid=<?php echo $bsid; ?>&inspid=<?php echo $inspId; ?>"><button class="btn88 cl8">9. Wokshop</button></a> <?php echo sectionComplete9(); ?><br>
                      <a href="10pmix.php?bsid=<?php echo $bsid; ?>&inspid=<?php echo $inspId; ?>"><button class="btn88 cl8">10. Paint Mix</button></a> <?php echo sectionComplete10(); ?><br>
                      <a href="11spray.php?bsid=<?php echo $bsid; ?>&inspid=<?php echo $inspId; ?>"><button class="btn88 cl8">11. Spray Booth</button></a> <?php echo sectionComplete11(); ?><br>
                      <a href="12parts.php?bsid=<?php echo $bsid; ?>&inspid=<?php echo $inspId; ?>"><button class="btn88 cl8">12. Parts Storage</button></a> <?php echo sectionComplete12(); ?><br>
                      <a href="13yard.php?bsid=<?php echo $bsid; ?>&inspid=<?php echo $inspId; ?>"><button class="btn88 cl8">13. Yard</button></a> <?php echo sectionComplete13(); ?><br>
                      <a href="14wash.php?bsid=<?php echo $bsid; ?>&inspid=<?php echo $inspId; ?>"><button class="btn88 cl8">14. Washbay</button></a> <?php echo sectionComplete14(); ?><br>

            <br><br>

            <a href="javascript:void(0)"><button class="btn88 cl8">Submit</button></a>
          </div>
        </div>
  </div>

  <div class="column-33">
  </div>

</div>
<br><br>
<?php
  require '../../../footer.php';
?>
