<?php
    require 'header.php';
?>
<body>
    <div class="container-fluid">
        <div class="row">
    
            <div class="col-sm-2 cont">
                <div class="session">

                <?php
                    if (isset($_SESSION['id'])) {

                        echo '<p style="color:white">You are logged in as <a style="color:white"><b><u>'.$_SESSION['id'].' '.$_SESSION['fname'].' '.$_SESSION['sname'].' '.$_SESSION['bodyshop'].' '.$_SESSION['bsid'].'</u></b></a></p>
                               <p><a href="includes/logoutus.inc.php"><button class="btn1"><b><u>Logout</b></u></button></a></p>';
                    }
                    else {
                        echo '<p style="color:white"><b>You are <u>LOGGED OUT</u></b></p>';
                    }
                ?>

                <ul>
                    <li>Bodyshop</li>
                    <li>Bodyshop ID:</li>
                    <li>User</li>
                    <li>User ID</li>
                </ul>
                </div>
            </div>

            <div class="col-sm-8">
                <a href="vda-form-create.php"><button class="btn1">Online VDA</button></a>
            </div>
    
            <div class="col-sm-2"></div>
    
            </div>


    </div>

<?php
    require 'footer.php';
?>