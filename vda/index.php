<?php
    require 'header.php';
?>

<div class="container-fluid">
    <div class="row" style="margin-top: 150px">

        <div class="col-sm-4"></div>

        <div class="col-sm-4">
            <form action="includes/loginus.inc.php" method="POST">
                
                <div class="form-group">
                    <label for="name">Email</label>
                    <input class="form-control" type="text" name="user" id="" placeholder="Email...">
                </div>
                
                <div class="form-group">
                    <label for="email">Password</label>
                    <input class="form-control" type="password" name="psw" id="" placeholder="Password...">
                </div>

                <input type="submit" class="btn1" name="user-login-submit"/>
            </form>

            <a href="recover.php" style="color: #111">Forgot Password?</a>

        </div>

        <div class="col-sm-4"></div>

    </div>
</div>

<?php
    require 'footer.php';
?>