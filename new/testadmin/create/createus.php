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
                else if ($_GET['error'] == "emailtaken") {
                    echo '<p style="color:#FF0000"><b><u>User Already Exists</b></u><br>';
                }
            }

            else if (isset($_GET['signup'])) {
                if ($_GET['signup'] == "success") {

                    echo '<p style="color:white"><b><u>New User Creation Successful!</b></u></p>';

            }
            }

        ?>
      </div>

      <div class="column-33">
        <div class="contactcard" style="margin:50px; width:400px">
                    <div class="cardcontainer" style="text-align:center">

                        <h1 style="color:#00dddd"><b>Create User</b></h1>



                            <form action="createus1.php" method="post">

                                <label style="color:#00dddd">First Name</label><br>
                                <input type="text" name="fname" placeholder="First Name...">
                                    <br>
                                <label style="color:#00dddd">Second Name</label><br>
                                <input type="text" name="sname" placeholder="Second Name...">
                                    <br>
                                <label style="color:#00dddd">Email</label><br>
                                <input type="text" name="email" placeholder="Email...">
                                    <br>
                                <label style="color:#00dddd">Phone</label><br>
                                <input type="text" name="phone" placeholder="Phone...">
                                    <br>
                                <label style="color:#00dddd">Bodyshop</label><br>
                                <select type="text" name="bodyshop">
                                  <option>Select a bodyshop...</option>

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

                                        <br>
                                        <label style="color:#00dddd">Password</label><br>
                                        <input type="text" name="pwd" placeholder="Password...">

                                        <br><br>
                                <button class="btn5 vda" type="submit" name="createus-submit" style="width:25%">Register</button>

                            </form>
                          </div>

                    </div>
                </div>
    <br><br><br>

    <div class="column-33">
    </div>

        </div>


</main>
