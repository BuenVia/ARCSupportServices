<?php
    require'../adminheader.php';
    require'../includes/auth_check.php';
    require'../includes/customer.inc.php';
    require'../includes/user.inc.php';

?>

<main>

<div style="background:#000000">

    <div class="row">

      <div class="column-33">
          <?php require 'sidepanel.php';?>
        </div>


        <div class="column-66">

                          <div class="row">
                                      <div class="mod">
                                          <div class="modhead" style="text-align:center">
                                              <h1 style="color:#FFFF00"><i class="far fa-file-alt"></i></i> <b>Tasks</b></h1>
                                            </div>

                          <div class="column-33">
                            <div class="modcontainer">
                              <a href="../safety/safetyadmin.php?bsid=<?php echo $custBsid ?>&bs=<?php echo $custBs ?>"><button class="btn9 vda">H&S</button></a>
                            </div>
                          </div>

                          <div class="column-33">
                            <div class="modcontainer">
                              <a href="../jobdesc/jobdescadmin.php?bsid=<?php echo $custBsid ?>&bs=<?php echo $custBs ?>"><button class="btn9 vda" type="submit" name="jd-submit">Job Description</button></a>
                            </div>
                          </div>

                          <div class="column-33">
                            <a href="directories.php?bsid=<?php echo $custBsid ?>"><button class="btn9 vda">Directories</button></a>
                          </div>
                                      </div>
                                      </div>


<div class="row">
    <div class="mod">
        <div class="modhead" style="text-align:center">
            <h1 style="color:#FFFF00"><i class="far fa-file-alt"></i></i> <b>Staff</b></h1>
          </div>
          <div class="modcontainer">
            <table style="background:white; border-radius:10px">
                  <tr style="background:#FFFF00">
                    <th style="font-size: 15px; width:20px">ID:</th>
                    <th style="font-size: 15px; width:60px">First Name:</th>
                      <th style="font-size: 15px; width:60px">Second Name:</th>
                      <th style="font-size: 15px; width:200px">Email:</th>
                      <th style="font-size: 15px; width:70px">Phone:</th>
                  </tr>

                  <tr>
                      <?php require'../includes/user.inc.php'; ?>

                  </tr>
              </table>

        </div>
    </div>
</div>


  </div>
</div>

  </main>

  <?php
  require '../../footer.php';
  ?>
