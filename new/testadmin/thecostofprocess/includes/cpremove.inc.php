<?php

if(isset($_POST['keep'])) {
  header ("Location: ../costprocessadmin.php");
}

elseif(isset($_POST['remove'])){

  require 'dbh.inc.php';

  $id = $_POST['id'];

  $sql = "UPDATE download SET done='1' WHERE id=".$id.";";
  $result = mysqli_query($conn, $sql);
    header ("Location: ../costprocessadmin.php?update=success");

}

else {
  header ("Location: ../../costprocessadmin.php");
}

?>
