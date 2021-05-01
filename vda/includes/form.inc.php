<?php 
// CONTAINS VARIABLES FOR VDA FORM
  require 'includes/dbh.inc.php';
  if (isset($_GET['formId'])) {

      $formId = $_GET['formId'];

      $sql = "SELECT * FROM vdaform WHERE id=".$formId.";";
      $result = mysqli_query($conn, $sql);
      $resultCheck = mysqli_num_rows($result);

      if ($resultCheck > 0) {
        while ($row = mysqli_fetch_assoc($result)) {

          $form = $row['id'];
          $date = $row['date'];
          $bodyshop = $row['bodyshop'];
          $bsid = $row['bsid'];
          $user = $row['userEmail'];

          $sname = $row['surname'];
          $fname = $row['fname'];
          $claim = $row['claimNo'];
          $policy = $row['policyId'];

        }
      }
    }
                        
?>