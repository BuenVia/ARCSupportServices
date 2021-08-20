<?php
    require'../adminheader.php';
    require'../includes/auth_check.php';
    require'../includes/customer.inc.php';
?>

<main>

<div style="background:#000000">

    <div class="row">

      <div class="column-33">
          <div class="mod">
              <div class="modhead" style="text-align:center">
                    <h1 style="color:#FFFF00"><i class="far fa-file-alt"></i></i> <b>Bodyshops</b></h1>
                  </div>
                  <div class="modcontainer">

<div class="ex1">
          <table style="background:white">
            <tr style="background:#FFFF00">
              <th style="font-size: 15px; width:50px">ID:</th>
                <th style="font-size: 15px; width:150px">Bodyshop:</th>
                <th style="font-size: 15px; width:100px">Location:</th>
            </tr>

            <tr>
              <?php
              require'../includes/dbh.inc.php';
                  $sql = "SELECT * FROM customer";
                  $result = mysqli_query($conn, $sql);
                  $resultCheck = mysqli_num_rows($result);

                  if ($resultCheck > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {

                      $bsid = $row['bodyshopId'];

                      echo
                      '<tr>
                      <td><a href="bsprofile.php?bsid='.$bsid.'"><button class="btn8 bsho">'.$row['bodyshopId'].'</button></a></td>
                      <td>'.$row['bodyshop'].'</td>
                      <td>'.$row['town'].'</td></tr>';
                    }
                  }
              ?>
            </tr>

          </table>
          <br>
      </div>
      </div>

      <div class="column-33">
      </div>


      <div class="column-33">
      </div>

    </div>

</div>

</main>

<?php
  require '../../footer.php';
?>
