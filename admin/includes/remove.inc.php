<?php

if(isset($_POST['keep'])) {
  header ("Location: ../index.php");
}

elseif(isset($_POST['remove'])){

  require 'dbh.inc.php';

  $id = $_POST['id'];
  $fileName = $_POST['fileName'];

  $sql = "UPDATE uploads SET done='yes' WHERE id=".$id.";";
  $result = mysqli_query($conn, $sql);
  rename("../../upload/uploads/".$fileName, "../../upload/uploads/archive/".$fileName);
  header ("Location: ../uploads/index.php?update=success");

}

else {
  header ("Location: ../../index.php?error");
}

?>
