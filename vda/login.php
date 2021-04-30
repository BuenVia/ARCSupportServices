<?php
    require 'header.php';
?>
<body>
    <div class="container-fluid">
        <div class="row">
    
            <div class="col-sm-2 cont">
                <div class="session">



                <ul>

                <?php
                    if (isset($_SESSION['id'])) {

                        echo '<li><b style="color: #ffff00">User ID:</b> '.$_SESSION['userId'].'</li>
                              <li><b style="color: #ffff00">User Name:</b> '.$_SESSION['id'].'</li>
                              <li><b style="color: #ffff00">Bodyshop:</b> '.$_SESSION['bodyshop'].'</li>
                              <li><b style="color: #ffff00">Bodyshop ID:</b> '.$_SESSION['bsid'].'</li>';
                    }
                    else {
                        echo '<p style="color:white"><b>You are <u>LOGGED OUT</u></b></p>';
                    }
                ?>

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