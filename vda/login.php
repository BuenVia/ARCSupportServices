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
                                } else {
                                        echo '<p style="color:white"><b>You are <u>LOGGED OUT</u></b></p>';
                                    }
                        ?>
                    </ul>
                </div>
            </div>

            <div class="col-sm-8">
                <a href="vda-form-create.php"><button class="btn1">Online VDA</button></a>
            </div>
    
            <div class="col-sm-2">
            
            </div>
    
        </div>
        <div class="row">
                
                <div class="col-sm-4"></div>
                <div class="col-sm-4">
                    <table style="background: black">
                        <tr style="background:#999">
                            <th style="font-size: 15px; width:50px">ID:</th>
                            <th style="font-size: 15px; width:250px">Claim Number:</th>
                            <th style="font-size: 15px; width:250px">Policy Number:</th>
                            <th style="font-size: 15px; width:250px">Last Name:</th>
                            <th style="font-size: 15px; width:250px">First Name:</th>
                        </tr>

                        <tr>
                            <?php
                            require'includes/dbh.inc.php';
                                $sql = "SELECT * FROM vdaform WHERE bsid=".$_SESSION['bsid'].";";
                                $result = mysqli_query($conn, $sql);
                                $resultCheck = mysqli_num_rows($result);    

                                if ($resultCheck > 0) {
                                    while ($row = mysqli_fetch_assoc($result)) {

                                    $bsid = $row['id'];

                                    echo
                                    '<tr>
                                    <td><a href="bsprofile.php?bsid='.$bsid.'"><button class="btn8 bsho">'.$row['id'].'</button></a></td>
                                    <td>'.$row['claimNo'].'</td>
                                    <td>'.$row['policyId'].'</td>
                                    <td>'.$row['surname'].'</td>
                                    <td>'.$row['fname'].'</td></tr>';
                                    }
                                }
                            ?>
                        </tr>

                    </table>  
                </div>
                <div class="col-sm-4"></div>
                
        </div>


    </div>

<?php
    require 'footer.php';
?>