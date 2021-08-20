<?php
    require 'header.php';
?>

    <div class="background4">
        <div class="container">
            <div class="row">
    
<?php
    require 'admin_cpan.php';
?>
                
    
    <div class="column-33">
    <div class="contactcard" style="width:100%">
    <div class="cardcontainer">

                        <h1 style="color:#FFFF00"> <b>Create Client</b></h1>
                        <?php
                            if (isset($_GET['error'])) {
                                if ($_GET['error'] == "emptyfields") {
                                    echo '<p style="color:#FF0000"><b><u>Missing Information</b></u><br>
                                    Please ensure all fields are filled in.</p>';
                                }
                                else if ($_GET['error'] == "emailtaken") {
                                    echo '<p style="color:#FF0000"><b><u>User Already Exists</b></u><br>
                                    Please login or use forgotten password link to reset password.</p>';
                                }
                            }
                            
                            else if (isset($_GET['signup'])) {
                                if ($_GET['signup'] == "success") {
                                                                        
                                    echo '<p style="color:white"><b><u>Signup Successful!</b></u></p>';
                                    
                                    
                            }
                            }

                        ?>

                        <form action="includes/clientreg.inc.php" method="post">
                                                      
                            <label for="email" style="color:#FFFF00">Email*</label><br>
                            <input type="text" name="email" placeholder="Email.." >
                            <br>
                            
                            <label for="com" style="color:#FFFF00">Company*</label><br>
                            <input type="text" name="com" placeholder="Company..">
                            <br>
                            
                            <label for="fname" style="color:#FFFF00">First Name*</label><br>
                            <input type="text" name="fname" placeholder="First Name..">
                            <br>
                            
                            <label for="sname" style="color:#FFFF00">Second Name*</label><br>
                            <input type="text" name="sname" placeholder="Second Name..">
                            <br>
                            
                            <label for="phone" style="color:#FFFF00">Phone Number*</label><br>
                            <input type="text" name="phone" placeholder="Phone Number..">
                            <br>
                            
                            <label for="psw" style="color:#FFFF00">Password* (letters and numbers only)</label><br>
                            <input type="password" name="psw" placeholder="Password.." >
                            <br>
                            
                            <label for="rpsw" style="color:#FFFF00">Repeat Password*</label><br>
                            <input type="password" name="rpsw" placeholder="Repeat Password..">
                            <br><br>
                            
                            <button class="btn2 lnk" type="submit" name="cuse-submit">Create Client</utton>
                        </form>
        
    </div>
    </div>
    </div>
    
    <div class="column-33">
    <div class="contactcard" style="width:100%">
    <div class="cardcontainer">
    </div>
    </div>
    </div>
    
            </div>
        </div>
    </div>
<?php
    require 'footer.php';
?>
    