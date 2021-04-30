<?php

if (isset($_POST['user-login-submit'])) {

        require 'dbh.inc.php';

        $user = $_POST['user'];
        $psw = $_POST['psw'];

        if (empty($user) || empty($psw)) {
            header("Location: ../index.php?error=emptyfields");
            exit();
        }
        else { echo 'success';
            $sql = "SELECT * FROM user WHERE email=?;";
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
                        $_SESSION['id'] = $row['email'];

                        header("Location: ../login.php?".$_SESSION['id']);
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
