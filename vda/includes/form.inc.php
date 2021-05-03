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
          $status = $row['status'];

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

          $repIns = $row['repIns'];
          $supRepIns = $row['supRepIns'];
          $furNote = $row['furNote'];

        }
      }
    }
      
    // SECTION COMPLETE FUNCTION - GREEN TICK / RED INCOMPLETE
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

    // SELECT BOX OPTIONS
    function selectRes($data) {
      require'dbh.inc.php';

      $formId = $_GET['formId'];
      $sql = "SELECT * FROM vdaform WHERE id=".$formId.";";
      $result = mysqli_query($conn, $sql);
      $resultCheck = mysqli_num_rows($result);

      if ($resultCheck > 0) {
        while ($row = mysqli_fetch_assoc($result)) {   
                    if ($data) {
                      $res = $data;
                      echo ' <option value="'.$res.'">'.$res.'</option>';
                    }
                    else {
                      $notDone = '<option value="" disabled selected>Select</option>';
                      echo $notDone;
                    }
          }
      }
    }

    // FORM SUBMIT BUTTON
    function formSubmit($data) {
      require 'dbh.inc.php';

      $formId = $_GET['formId'];
      $sql = "SELECT * FROM vdaform WHERE id=".$formId.";";
      $result = mysqli_query($conn, $sql);
      $resultCheck = mysqli_num_rows($result);

      if($data) {
        echo '<p>This form can now be submitted!</p>
              <input type="submit" name="vda-form-submit">';
      } else {
        echo 'All Sections Must Be Completed!';
      }
    }

    // FRONT PAGE TABLE DISPLAY
    function statusPend() {
      require'includes/dbh.inc.php';
      $sql = "SELECT * FROM vdaform WHERE bsid=".$_SESSION['bsid'].";";
      $result = mysqli_query($conn, $sql);
      $resultCheck = mysqli_num_rows($result);    

      if ($resultCheck > 0) {
          while ($row = mysqli_fetch_assoc($result)) {
            $status = $row['status'];
            if($status == 'Pending') {

              $formId = $row['id'];

              echo
              '<tr>
              <td><a href="vda-form-review.php?formId='.$formId.'"><button class="btn8 bsho">'.$row['id'].'</button></a></td>
              <td>'.$row['claimNo'].'</td>
              <td>'.$row['policyId'].'</td>
              <td>'.$row['surname'].'</td>
              <td>'.$row['fname'].'</td>
              <td>'.$row['dateLoss'].'</td>
              <td>'.$row['status'].'</td></tr>';

            } 
          }
      } else {
        echo 'Nothing outstanding.';
      }
    }

    function statusSubmitted() {
      require'includes/dbh.inc.php';
      $sql = "SELECT * FROM vdaform WHERE bsid=".$_SESSION['bsid'].";";
      $result = mysqli_query($conn, $sql);
      $resultCheck = mysqli_num_rows($result);    

      if ($resultCheck > 0) {
          while ($row = mysqli_fetch_assoc($result)) {
            $status = $row['status'];
            if($status == 'Submitted') {

              $formId = $row['id'];

              echo
              '<tr>
              <td><a href="vda-form-review.php?formId='.$formId.'"><button class="btn8 bsho">'.$row['id'].'</button></a></td>
              <td>'.$row['claimNo'].'</td>
              <td>'.$row['policyId'].'</td>
              <td>'.$row['surname'].'</td>
              <td>'.$row['fname'].'</td>
              <td>'.$row['dateLoss'].'</td>
              <td>'.$row['status'].'</td></tr>';

            }  
          }
      } else {
        echo 'Nothing Awating Review.';
      }
    }

?>