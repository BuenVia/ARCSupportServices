<?php

require'dbh.inc.php';


if (isset($_GET['bsid'])) {

      $idBodyshop = $_GET['bsid'];

      $sql = "SELECT * FROM user WHERE bodyshopId=".$idBodyshop.";";
      $result = mysqli_query($conn, $sql);
      $resultCheck = mysqli_num_rows($result);

          if ($resultCheck > 0) {
            while ($row = mysqli_fetch_assoc($result)) {

              echo '
              <tr>
              <td>'.$row['userId'].'</td>
              <td>'.$row['fname'].'</td>
              <td>'.$row['sname'].'</td>
              <td>'.$row['email'].'</td>
              <td>'.$row['phone'].'</td>
              ';
                            }

          }
      }



?>
