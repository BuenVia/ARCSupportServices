<?php
    require 'header.php';
?>

<div class="container-fluid">
            <div class="row">

                <div class="col-sm-4"></div>
                
                <div class="col-sm-4">
                    <form action="includes/loginus.inc.php" method="POST">
                       
                    <div class="form-group">
                            <label for="name">Username</label>
                            <input class="form-control" type="text" name="user" id="" placeholder="Username...">
                        </div>
                        <div class="form-group">
                            <label for="email">Password</label>
                            <input class="form-control" type="password" name="psw" id="" placeholder="Password...">
                        </div>

                        <input type="submit" name="user-login-submit"/>
                    </form>
                </div>

                <div class="col-sm-4"></div>

            </div>
        </div>

<?php
    require 'footer.php';
?>