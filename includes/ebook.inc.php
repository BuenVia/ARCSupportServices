<?php
  
  if (isset($_GET['ebook-submit'])) {
    require 'dbh.inc.php';

    date_default_timezone_set('Europe/London');

    $date = date("Y-m-d H:i:s");

    if (empty($name) || empty($email)) {
        header("Location: ../index.html?error=emptyfields&name-".$name."&cname=".$email);
        exit();
    }
    else {
        $sql = "SELECT date FROM ebook WHERE date=?";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../index.html?error=sqlerror");
            exit();
        }
        else {
                $sql = "INSERT INTO ebook (date, name, email) VALUES (?, ?, ?)";
                $stmt = mysqli_stmt_init($conn);
                if (!mysqli_stmt_prepare($stmt, $sql)) {
                    header("Location: ../index.html?error=sqlerror1");
                    exit();
                }
                else {
                    mysqli_stmt_bind_param($stmt, "sss", $date, $name, $email);
                    mysqli_stmt_execute($stmt);
                    header("Location: ../ebook.html?dlsubmit=success");
                    exit();
                    }
            }
    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);

}