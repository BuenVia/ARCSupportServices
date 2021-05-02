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
          $dateLoss = $row['dateLoss'];

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

          $tyres = $row['tyres'];
          $brakes = $row['brakes'];
          $steering = $row['steering'];
          $preAcc = $row['preAcc'];
          $paint = $row['paint'];
          $colour = $row['colour'];
          $body = $row['body'];
          $vehStatus = $row['vehStatus'];

          $nsfTyre = $row['nsfTyre'];
          $osfTyre = $row['osfTyre'];
          $nsrTyre = $row['nsrTyre'];
          $osrTyre = $row['osrTyre'];

        }
      }
    }
      
    // SECTION COMPLETE FUNCTION - GREEN TICK
    function sectionComplete($data) {
      require'dbh.inc.php';
    
      $formId = $_GET['formId'];
      $sql = "SELECT * FROM vdaform WHERE id=".$formId.";";
      $result = mysqli_query($conn, $sql);
      $resultCheck = mysqli_num_rows($result);
    
      if ($resultCheck > 0) {
        while ($row = mysqli_fetch_assoc($result)) {   
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