<?php require 'header.php'; ?>


<table style="background: black; color: #fff;">
                <tr style="background:#999">
                    <th style="font-size: 15px; width:300px">Date:</th>
                    <th style="font-size: 15px; width:50px">Form ID:</th>
                    <th style="font-size: 15px; width:250px">Bodyshop:</th>
                    <th style="font-size: 15px; width:250px">Claim No.:</th>
                </tr>

                <tr>
                    <?php
                    require'includes/dbh.inc.php';
                        $sql = "SELECT * FROM vdaform";
                        $result = mysqli_query($conn, $sql);
                        $resultCheck = mysqli_num_rows($result);

                        if ($resultCheck > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {

                            $bsid = $row['id'];

                            echo
                            '<tr>
                            <td>'.$row['date'].'</td>
                            <td><a href="bsprofile.php?bsid='.$bsid.'"><button class="btn8 bsho">'.$row['id'].'</button></a></td>
                            <td>'.$row['bodyshop'].'</td>
                            <td>'.$row['claimNo'].'</td></tr>';
                            }
                        }
                    ?>
                </tr>

            </table>

<?php require 'footer.php'; ?>