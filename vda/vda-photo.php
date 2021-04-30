<?php
    require 'header.php';
?>

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-2"></div>

    <div class="col-sm-8">

    
    <div class="row">
            <?php 
                $sname = $_POST['sname'];
                echo $sname;
            ?>
        </div>

    <form enctype="multipart/form-data" action="vda-notes.php" method="post">
      <input name="file[]" type="file" />
      <button type='button' class="add_more">Add More Files</button>
      <input type="submit" value="Upload File" id="upload"/>
    </form>
    
    </div>

    <div class="col-sm-2"></div>

    </div>
</div>

<?php
    require 'footer.php';
?>