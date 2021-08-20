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
          <?php require '../manage/sidepanel.php';?>
        </div>

        <div class="column-33">
            <?php echo createDir(); ?><br>

          <form action="" method="POST">
            <label style="color:#FFFF00">Bodyshop: </label>
            <a><input type="text" style="background-color:#000000; color:white" name="bodyshop" value="<?php echo $custBs ?>"></a><br>

            <label style="color:#FFFF00">ID: </label>
            <input type="text" style="background-color:#000000; color:white" name="bsid" value="<?php echo $custBsid ?>"><br>

            <label style="color:#FFFF00">Directory</label><br>
            <select type="text" name="directory">
              <?php echo createDir(); ?>
            </select>

            <br>
            <button formaction="../includes/create.inc.php?bisd=<?php echo $custBsid ?>" class="btn9 vda" type="submit" name="createDir-submit">Create P</button>
          </form>

          </div>


          <div class="column-33">
            </div>

      </div>

        </main>

        <?php
        require '../../footer.php';
        ?>
