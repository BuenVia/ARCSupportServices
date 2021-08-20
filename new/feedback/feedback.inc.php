<?php

if (isset($_POST['feedback-submit'])) {

    require 'dbh.inc.php';

    date_default_timezone_set('Europe/London');

    $date = date("Y-m-d H:i:s");
    $name = $_POST['name'];
    $q1 = $_POST['q1'];
    $q2 = $_POST['q2'];


    if (empty($name) || empty($q1) || empty($q2)) {
        header("Location: index.php?error=emptyfields&name-".$name."&q1=".$q1."&q2=".$q2);
        exit();
    }
    else {

        $sql = "SELECT date FROM feedback WHERE date=?";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: index.php?error=sqlerror");
            exit();
        }
        else {

                $sql = "INSERT INTO feedback (date, name, q1, q2) VALUES (?, ?, ?, ?)";
                $stmt = mysqli_stmt_init($conn);
                if (!mysqli_stmt_prepare($stmt, $sql)) {
                    header("Location: index.php?error=sqlerror1");
                    exit();
                }
                else {

                    mysqli_stmt_bind_param($stmt, "ssss", $date, $name, $q1, $q2);
                    mysqli_stmt_execute($stmt);
                    header("Location: index.php?submit=success");
                    exit();
                    }
            }

    }


    mysqli_stmt_close($stmt);
    mysqli_close($conn);

}


else {
    header("Location: index.php");
    exit();
}
