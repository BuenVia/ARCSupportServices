<?php

if(isset($_POST['keep'])) {
  header ("Location: ../feedbackadmin.php");
}

elseif(isset($_POST['remove'])){

  require 'dbh.inc.php';

  $id = $_POST['id'];
  $fileName = $_POST['fileName'];

  $sql = "UPDATE feedback SET done='1' WHERE id=".$id.";";
  $result = mysqli_query($conn, $sql);
    header ("Location: ../feedbackadmin.php?update=success");

}

else {
  header ("Location: ../../feedbackadmin.php");
}

?>
