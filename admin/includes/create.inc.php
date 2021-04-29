<?php

if (isset($_POST['create-admin-submit'])) {

    require 'dbh.inc.php';

    $user = $_POST['user'];
    $psw = $_POST['psw'];
    $rpsw = $_POST['rpsw'];

    if (empty($user)) {
        header("Location: ../create.php?error=emptyfields");
        exit();
    }
    else if (!filter_var($user, FILTER_VALIDATE_EMAIL)) {
        header("Location: ../create.php?error=invalidemail");
        exit();
    }
    else if ($psw !== $rpsw) {
        header("Location: ../create.php?error=passwordcheck&user=".$user);
        exit();
    }
    else {

        $sql = "SELECT adminUser FROM admin WHERE adminUser=?";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../create.php?error=sqlerror");
            exit();
        }
        else {
            mysqli_stmt_bind_param($stmt, "s", $user);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $resultcheck = mysqli_stmt_num_rows($stmt);
            if ($resultcheck > 0) {
                header("Location: ../create.php?error=usertaken");
                exit();
            }
            else {

                $sql = "INSERT INTO admin (adminUser, psw) VALUES (?, ?)";
                $stmt = mysqli_stmt_init($conn);
                if (!mysqli_stmt_prepare($stmt, $sql)) {
                    header("Location: ../create.php?error=sqlerror1");
                    exit();
        }
            else {
                $hashedpsw = password_hash($psw, PASSWORD_DEFAULT);

                mysqli_stmt_bind_param($stmt, "ss", $user, $hashedpsw);
                mysqli_stmt_execute($stmt);
                header("Location: ../admin.php?signup=success");
                exit();
            }
        }

    }

    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);

} 

if (isset($_POST['create-bodyshop-submit'])) {

    require 'dbh.inc.php';

    $bodyshop = $_POST['bodyshop'];
    $street = $_POST['street'];
    $town = $_POST['town'];
    $county = $_POST['county'];
    $postcode = $_POST['postcode'];
    $phone = $_POST['phone'];

    if (empty($bodyshop) || empty($street) || empty($town) || empty($county) || empty($postcode) || empty($phone)) {
        header("Location: ../create/createbs.php?error=emptyfields&bodyshop=".$user);
        exit();
    }

    else {

        $sql = "SELECT bodyshop FROM customer WHERE bodyshop=?";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../create/createbs.php?error=sqlerror");
            exit();
        }
        else {
            mysqli_stmt_bind_param($stmt, "s", $bodyshop);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $resultcheck = mysqli_stmt_num_rows($stmt);
            if ($resultcheck > 0) {
                header("Location: ../create/createbs.php?error=usertaken");
                exit();
            }
            else {

                $sql = "INSERT INTO customer (bodyshop, street, town, county, postcode, phone) VALUES (?, ?, ?, ?, ?, ?)";
                $stmt = mysqli_stmt_init($conn);
                if (!mysqli_stmt_prepare($stmt, $sql)) {
                    header("Location: ../create/createbs.php?error=sqlerror1");
                    exit();
        }
            else {
                mysqli_stmt_bind_param($stmt, "ssssss", $bodyshop, $street, $town, $county, $postcode, $phone);
                mysqli_stmt_execute($stmt);
                header("Location: ../admin.php?signup=success&bs=".$bodyshop);
                exit();
            }
        }

    }

    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);

} 

else {
    header("Location: ../create.php?error=unknown");
}

?>