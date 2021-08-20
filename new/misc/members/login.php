
<main>
    <div class="background1">
                    <div class="container">
        <div class="row">

<?php
                        if (isset($_SESSION['emailID'])) {
                            echo '
                            <div class="column-33">
                                <div class="contactcard" style="width:100%">
                                    <div class="cardcontainer">
              
                                        '?><?php
                                        
                                        if (isset($_SESSION['emailID']) &&  $_SESSION['admin'] == '1') {
                                            echo '<div class="card">
                                            <p><a href="admin.php"><button class="btn2 lnk">ADMIN</button></a></p>
                                        </div>';
                                        }                             
                                        ?><?php echo'
                                      
                                        <br>                                        
                                        <div class="card"><br>
                                            <p><a href="javascript:void(0)"><button class="btn2 lnk">Account Settings</button></a></p>
                                        </div>
      
                                        <br>
                                        <div class="card">
                                            <p><a href="javascript:void(0)"><button class="btn2 lnk">Change Email</button></a></p>
                                        </div>
                        
                                        <br>
                                        <div class="card">
                                            <p><a href="javascript:void(0)"><button class="btn2 lnk">Change Password</button></a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                        
                            <div class="column-33">
                                <div class="contactcard" style="width:100%">
                                    <div class="cardcontainer">
                              
                                        <div class="card"><br>
                                            <p><a href="myaccount.php"><button class="btn2 lnk">My Account</button></a></p>
                                        </div>
                      
                                      
                                    </div>
                                </div>
                            </div>
                            ';
                        }
                        
                        else {
                            echo '
            <div class="column-33">
                <div class="contactcard" style="width:100%">
                    <div class="cardcontainer">
              
                        <div class="card">
                            <p><a href="admin.php"><button class="btn2 lnk">ADMIN</button></a></p>
                        </div>
        
                        <br>
                                        
                        <div class="card"><br>
                            <p><a href="signup.php"><button class="btn2 lnk">Register</button></a></p>
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

                        <h1 style="color:#FFFF00"><i class="fas fa-user"></i> <b>Login</b></h1>
                        
                        <form action="includes/login.inc.php" method="post">
                            <label for="email" style="color:#FFFF00">Email*</label><br>
                            <input type="text" name="email" placeholder="Email..">
                            <br>
                            
                            <label for="psw" style="color:#FFFF00">Password*</label><br>
                            <input type="password" name="psw" placeholder="Password..">
                            <br>
                            
                            <button class="btn2 lnk" type="submit" name="login-submit">Login</button>
                        </form>

                    </div>
                </div>
            </div>';
            }
?>

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