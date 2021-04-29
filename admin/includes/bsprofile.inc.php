<?php

if (isset($_POST['safety-submit'])) {

    require'dbh.inc.php';

    $bodyshop = $_POST['bodyshop'];
    $bsid = $_POST['bsid'];

    $sql = "SELECT * FROM customer WHERE bodyshopId=".$bsid.";";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);

    if ($resultCheck > 0) {
      while ($row = mysqli_fetch_assoc($result)) {
        echo $bsid;
      }
    }
  }

elseif (isset($_POST['jd-submit'])) {

    $bodyshop = $_POST['bodyshop'];
    $bsid = $_POST['bsid'];

    echo 'This functionality is still being built.';

  }
?>
