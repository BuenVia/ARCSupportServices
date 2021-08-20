<?php
    require'../adminheader.php';
    require'../includes/auth_check.php';
?>

<main>

    <div class="row">

      <div class="column-33">
        <?php
            if (isset($_GET['error'])) {
                if ($_GET['error'] == "emptyfields") {
                    echo '<p style="color:#FF0000"><b><u>Missing Information</b></u><br>
                    Please ensure all fields are filled in.</p>';
                }
            }

            else if (isset($_GET['signup'])) {
                if ($_GET['signup'] == "success") {

                    echo '<p style="color:white"><b><u>New Inspection Creation Successful!</b></u></p>';

            }
            }

        ?>
      </div>

      <div class="column-33">
        <div class="contactcard" style="margin:50px; width:400px">
                    <div class="cardcontainer" style="text-align:center">

                        <h1 style="color:#00dddd"><b>Create inspection</b></h1>



                            <form action="createinsp1.php" method="post">

                                <label style="color:#00dddd">Bodyshop</label><br>
                                <select type="text" name="bodyshop">
                                  <option></option>

                                    <?php

                                        require '../includes/dbh.inc.php';

                                        $sql = "SELECT * FROM customer";
                                        $result = mysqli_query($conn, $sql);
                                        $resultCheck = mysqli_num_rows($result);

                                            if ($resultCheck > 0) {
                                            while ($row = mysqli_fetch_assoc($result)) {

                                                $bodyshop = $row['bodyshop'];
                                                $id = $row['bodyshopId'];

                                              echo '<option value='.$id.'>'.$bodyshop.'_'.$id.'</option>';

                                            }
                                        }
                                        ?></select>

                                        <br><br>
                                <button class="btn5 vda" type="submit" name="createinsp-submit" style="width:25%">Register</button>

                            </form>
                          </div>

                    </div>
                </div>
    <br><br><br>

    <div class="column-33">
    </div>

        </div>


</main>
