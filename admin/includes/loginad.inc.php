<?php

if (isset($_POST['login-submit'])) {

        require 'dbh.inc.php';

        $user = $_POST['user'];
        $psw = $_POST['psw'];

        if (empty($user) || empty($psw)) {
            header("Location: ../index.php?error=emptyfields");
            exit();
        }
        else {
            $sql = "SELECT * FROM admin WHERE user=?;";
            $stmt = mysqli_stmt_init($conn);
            if (!mysqli_stmt_prepare($stmt, $sql)) {
                header("Location: ../index.php?error=sqlerror");
                exit();
            }
            else {
                mysqli_stmt_bind_param($stmt, "s", $user);
                mysqli_stmt_execute($stmt);
                $result = mysqli_stmt_get_result($stmt);
                if ($row = mysqli_fetch_assoc($result)) {
                    $pswcheck = password_verify($psw, $row['psw']);
                    if ($pswcheck == false) {
                        header("Location: ../index.php?error=wrongpassword");
                        exit();
                    }
                    else if ($pswcheck == true) {
                        session_start();
                        $_SESSION['user'] = $row{'user'};

                        header("Location: ../admin.php");
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
