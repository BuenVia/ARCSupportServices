<?php
    require "header.php";
?>

<main>
    <div class="background1">
                    <div class="container">
        <div class="row">


            <div class="column-33">
                <div class="contactcard" style="width:100%">
                    <div class="cardcontainer">
              
                        <div class="card"><br>
                            <p><a href="index.php"><button class="btn2 lnk">Login</button></a></p>
                        </div>
      
                        <br>
                        <div class="card">
                            <p><a href="javascript:void(0)"><button class="btn2 lnk">Forgot Username</button></a></p>
                        </div>
                        
                        <br>
                        <div class="card">
                            <p><a href="javascript:void(0)"><button class="btn2 lnk">Forgot Password</button></a></p>
                        </div>   
             
                    </div>
                </div>
            </div>

            <div class="column-33">
                <div class="contactcard" style="margin:10px; max-width:600px">
                    <div class="cardcontainer" style="text-align:left">

                        <h1 style="color:#FFFF00"><i class="fas fa-user"></i> <b>Register</b></h1>
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

                        <form action="includes/signup.inc.php" method="post">
                            <label for="email" style="color:#FFFF00">Email*</label><br>
                            <input type="text" name="email" placeholder="Email.." >
                            <br>
                            
                            <label for="fname" style="color:#FFFF00">First Name*</label><br>
                            <input type="text" name="fname" placeholder="First Name..">
                            <br>
                            
                            <label for="sname" style="color:#FFFF00">Second Name*</label><br>
                            <input type="text" name="sname" placeholder="Second Name..">
                            <br>
                            
                            <label for="com" style="color:#FFFF00">Company*</label><br>
                            <input type="text" name="com" placeholder="Company..">
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
                            
                            <button class="btn2 lnk" type="submit" name="signup-submit">Register</utton>
                        </form>

                    </div>
                </div>
            </div>


            <div class="column-33">
                <div class="contactcard" style="width:100%">
                    <div class="cardcontainer">

                        <h1 style="color:#FFFF00"><i class="fas fa-phone-alt"></i> <b>Contact Us...</b></h1>
                        <p style="color:#FFFF00">Phone:</p>
                        <a style="color:white">01638 715503</a></p><br>
                        <p style="color:#FFFF00">Mobile:<br>
                        <a style="color:white">07956 202722</a></p><br>
                        <p style="color:#FFFF00">Email:<br>
                        <a style="color:white">james@arcsupportservices.co.uk</a></p><br>
                        
                        <h4 style="color:#FFFF00">Social Media:<br><br>
                        <button onclick="window.open('https://www.facebook.com/arcsupportservices/', '_blank')" class="btn3 social">
                        <i class="fab fa-facebook"></i></button>
                        <button onclick="window.open('https://twitter.com/ARCSupport', '_blank')" class="btn3 social">
                        <i class="fab fa-twitter"></i></button>
                        <button onclick="window.open('https://www.linkedin.com/in/james-clifford-vda-imi-mimi-15ba1b25/', '_blank')" class="btn3 social">
                        <i class="fab fa-linkedin"></i></button>
                        <button onclick="window.open('https://instagram.com/arcsupport?igshid=525d636u8bhj', '_blank')" class="btn3 social">
                        <i class="fab fa-instagram"></i></button>
                        <button onclick="window.open('https://www.youtube.com/channel/UCC1GROC1FY3OGcKgCBro8bw', '_blank')" class="btn3 social">
                        <i class="fab fa-youtube"></i></button></h4><br>
                        <img src="images/new_arc_logo.png" style="width:100px;margin-left:auto;margin-right:auto">
                        <br><br>
                    </div>
                </div>                 
            </div>


        </div>
            </div>
</main>

<?php
    require "footer.php"; 
?>