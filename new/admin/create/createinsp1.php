<?php
    require'../adminheader.php';
    require'../includes/auth_check.php';
?>

<main>

    <div class="row">

      <div class="column-33">
      </div>

      <div class="column-33">
        <div class="contactcard" style="margin:50px; width:400px">
                    <div class="cardcontainer" style="text-align:center">

                        <h1 style="color:#00dddd"><b>Do You Wish To Create and Inspection For This User?</b></h1>



                            <form action="../includes/create.inc.php" method="post">

                              <?php

                                if (isset($_POST['createinsp-submit'])) {

                                  require'../includes/dbh.inc.php';

                                  $bodyshop = $_POST['bodyshop'];

                                  if(empty($bodyshop)){
                                    header("Location: ../create/createinsp.php?error=emptyfields&fname=".$fname);
                                    exit();
                                  }

                                  else{

                                    $sql = "SELECT * FROM customer WHERE bodyshopId=".$bodyshop.";";
                                    $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);

                                        if ($resultCheck > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {

                                            $bodyshop = $row['bodyshop'];
                                            $id = $row['bodyshopId'];
                                            $street = $row['street'];
                                            $town = $row['town'];
                                            $county = $row['county'];
                                            $postcode = $row['postcode'];


                                  echo '
                                <label style="color:#00dddd">Bodyshop</label><br>
                                <a><input type="text" name="bodyshop" value="'.$bodyshop.'"readonly/></a>
                                <label style="color:#00dddd">Bodyshop ID</label><br>
                                <a><input type="text" name="idbs" value="'.$id.'"readonly/></a>
                                <label style="color:#00dddd">Street</label><br>
                                <a><input type="text" name="street" value="'.$street.'"readonly/></a>
                                <label style="color:#00dddd">Town</label><br>
                                <a><input type="text" name="town" value="'.$town.'"readonly/></a>
                                <label style="color:#00dddd">County</label><br>
                                <a><input type="text" name="county" value="'.$county.'"readonly/></a>
                                <label style="color:#00dddd">Postcode</label><br>
                                <a><input type="text" name="postcode" value="'.$postcode.'"readonly/></a>

                                        <br><br>
                                <button class="btn5 vda" type="submit" name="createinsp1-submit" style="width:25%">Register</button>';
                              }
                            }
                        }
                              }
                              ?>

                            </form>
                          </div>

                    </div>
                </div>
    <br><br><br>

    <div class="column-33">
    </div>

        </div>


</main>
