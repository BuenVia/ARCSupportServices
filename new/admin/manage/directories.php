<?php
    require'../adminheader.php';
    require'../includes/auth_check.php';
    require'../includes/customer.inc.php';

?>

<main>

<div style="background:white">

    <div class="row">

      <div class="column-33" style="background-color:#000000">
          <?php require '../manage/sidepanel.php';?>
        </div>

        <div class="column-33">

          <form action="" method="POST">
            <div class="row">
              <div class="column">
                <label style="color:#555555">Bodyshop: </label>
                <a><input type="text" style="background-color:#000000; color:white" name="bodyshop" value="<?php echo $custBs ?>" /readonly></a>
              </div>

                <div class="column">
                <label style="color:#555555">ID: </label>
                <input type="text" style="background-color:#000000; color:white" name="bsid" value="<?php echo $custBsid ?>" /readonly>
              </div>
              </div>

            <label style="color:#555555">Select Directory Name</label><br>
            <?php echo createDir(); ?>

            <br>
            <button formaction="../includes/create.inc.php?bisd=<?php echo $custBsid ?>" class="btn9 vda" type="submit" name="createDir-submit">Create</button>
          </form>

          </div>


          <div class="column-33">


            <select>
                <?php echo dirToOptions(); ?>
            </select>


            </div>

      </div>

        </main>

        <?php
        require '../../footer.php';
        ?>
