<?php

if (isset($_POST['loginus-submit'])) {

        require 'dbh.inc.php';

        $email = $_POST['email'];
        $psw = $_POST['psw'];

        if (empty($email) || empty($psw)) {
            header("Location: ../index.php?error=emptyfields");
            exit();
        }
        else {
            $sql = "SELECT * FROM user WHERE email=?;";
            $stmt = mysqli_stmt_init($conn);
            if (!mysqli_stmt_prepare($stmt, $sql)) {
                header("Location: ../index.php?error=sqlerror");
                exit();
            }
            else {
                mysqli_stmt_bind_param($stmt, "s", $email);
                mysqli_stmt_execute($stmt);
                $result = mysqli_stmt_get_result($stmt);
                if ($row = mysqli_fetch_assoc($result)) {
                    $pswcheck = password_verify($psw, $row['pwd']);
                    if ($pswcheck == false) {
                        header("Location: ../index.php?error=wrongpassword");
                        exit();
                    }
                    else if ($pswcheck == true) {
                        session_start();
                        $_SESSION['email'] = $row{'email'};
                        $usid = $row['userId'];
                        $bsid = $row['bodyshopId'];

                        header("Location: ../member.php?usid=$usid&bsid=$bsid");
                        exit();

                    }
                    else {
                        header("Location: ../index.php?error=wrongpassword2");
                        exit();
                    }
                }
                else {
                    header("Location: ../index.php?error=nouser");
                    exit();
                }
            }
        }
}
else {
    header("Location: ../index.php");
    exit();
}
