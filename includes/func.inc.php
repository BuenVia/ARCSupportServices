<?php

require'includes/dbh.inc.php';
        $sql = "SELECT * FROM ebook";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);

        if ($resultCheck > 0) {
            while ($row = mysqli_fetch_assoc($result)) {

            $dlId = $row['id'];
            $date = $row['date'];
            $name = $row['name'];
            $email = $row['email'];


            }
        }
