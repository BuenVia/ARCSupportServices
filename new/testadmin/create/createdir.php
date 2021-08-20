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
            <?php echo createDir(); ?>
            <a href="../includes/customer.inc.php?bisd=<?php echo $custBsid ?>"><button>Create</button></a>
          </div>


          <div class="column-33">
            </div>

      </div>

        </main>

        <?php
        require '../../footer.php';
        ?>
