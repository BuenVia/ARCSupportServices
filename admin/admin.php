<?php
    require 'header.php';
?>

<main>

<div class="container-fluid">
    <div class="row">

        <div class="col-sm-4">
            <a href="create.php"><button>Create Bodyshop</button></a><br>
            <a href="create.php"><button>Create User</button></a><br>
            <a href="create.php"><button>Create Admin</button></a><br>
        </div>
    
        <div class="col-sm-4">
            <table style="background: black">
                <tr style="background:#999">
                    <th style="font-size: 15px; width:50px">ID:</th>
                    <th style="font-size: 15px; width:250px">Bodyshop:</th>
                    <th style="font-size: 15px; width:250px">Location:</th>
                </tr>

                <tr>
                    <?php
                    require'includes/dbh.inc.php';
                        $sql = "SELECT * FROM bodyshop";
                        $result = mysqli_query($conn, $sql);
                        $resultCheck = mysqli_num_rows($result);

                        if ($resultCheck > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {

                            $bsid = $row['id'];

                            echo
                            '<tr>
                            <td><a href="bsprofile.php?bsid='.$bsid.'"><button class="btn8 bsho">'.$row['id'].'</button></a></td>
                            <td>'.$row['name'].'</td>
                            <td>'.$row['town'].'</td></tr>';
                            }
                        }
                    ?>
                </tr>

            </table>
        </div>
        
        <div class="col-sm-4"></div>
        <table style="background: black">
                <tr style="background:#999">
                    <th style="font-size: 15px; width:50px">ID:</th>
                    <th style="font-size: 15px; width:250px">Bodyshop:</th>
                    <th style="font-size: 15px; width:250px">Location:</th>
                </tr>

                <tr>
                    <?php
                    require'includes/dbh.inc.php';
                        $sql = "SELECT * FROM user";
                        $result = mysqli_query($conn, $sql);
                        $resultCheck = mysqli_num_rows($result);

                        if ($resultCheck > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {

                            $bsid = $row['id'];

                            echo
                            '<tr>
                            <td><a href="bsprofile.php?bsid='.$bsid.'"><button class="btn8 bsho">'.$row['id'].'</button></a></td>
                            <td>'.$row['fname'].'</td>
                            <td>'.$row['sname'].'</td></tr>';
                            }
                        }
                    ?>
                </tr>
        </div>
    </div>
   

</main>

<?php
    require 'footer.php';
?>