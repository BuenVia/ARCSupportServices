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

          $street = $row['street'];
          $town = $row['town'];
          $county = $row['county'];
          $postcode = $row['postcode'];
          $phone = $row['phone'];

          $reg = $row['reg'];
          $make = $row['make'];
          $model = $row['model'];
          $miles = $row['mileage'];
          $vin = $row['vin'];
          $adas = $row['adas'];

        }
      }
    }
      
    // SECTIN COMPLETE FUNCTION
    function sectionComplete($data) {
      require'dbh.inc.php';
    
      $formId = $_GET['formId'];
      $sql = "SELECT * FROM vdaform WHERE id=".$formId.";";
      $result = mysqli_query($conn, $sql);
      $resultCheck = mysqli_num_rows($result);
    
      if ($resultCheck > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
    
          $street = $row['street'];
          $town = $row['town'];
          $county = $row['county'];
          $postcode = $row['postcode'];
          $phone = $row['phone'];
    
                    if ($data) {
                      $done = ' <a style="color:#00FF00"><i class="fas fa-check-circle"></i></a>';
                      echo $done;
                    }
                    else {
                      $notDone = '<a style="color:red">Incomplete...</a>';
                      echo $notDone;
                    }
          }
      }
    }

?>