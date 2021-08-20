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

                        <h1 style="color:#00dddd"><b>Create Bodyshop</b></h1>

                        <?php
                            if (isset($_GET['error'])) {
                                if ($_GET['error'] == "emptyfields") {
                                    echo '<p style="color:#FF0000"><b><u>Missing Information</b></u><br>
                                    Please ensure all fields are filled in.</p>';
                                }
                                else if ($_GET['error'] == "emailtaken") {
                                    echo '<p style="color:#FF0000"><b><u>Bodyshop Already Exists</b></u><br>';
                                }
                            }

                            else if (isset($_GET['signup'])) {
                                if ($_GET['signup'] == "success") {

                                    echo '<p style="color:white"><b><u>New Bodyshop Creation Successful!</b></u></p>';

                            }
                            }

                        ?>

                            <form action="../includes/create.inc.php" method="post">

                                <label style="color:#00dddd">Bodyshop</label><br>
                                <input type="text" name="bodyshop" placeholder="Bodyshop...">
                                    <br>
                                <label style="color:#00dddd">Street</label><br>
                                <input type="text" name="street" placeholder="Street...">
                                    <br>
                                <label style="color:#00dddd">Town</label><br>
                                <input type="text" name="town" placeholder="Town...">
                                    <br>
                                <label style="color:#00dddd">County</label><br>
                                <input type="text" name="county" placeholder="County...">
                                    <br>
                                <label style="color:#00dddd">Postcode</label><br>
                                <input type="text" name="postcode" placeholder="Postcode...">
                                    <br>
                                <label style="color:#00dddd">Phone</label><br>
                                <input type="text" name="phone" placeholder="Phone...">
                                    <br>

                                    <br>
                                <button class="btn5 vda" type="submit" name="createbs-submit" style="width:25%">Register</button>

                            </form>
                          </div>

                    </div>
                </div>
    <br><br><br>

    <div class="column-33">
    </div>

        </div>


</main>
