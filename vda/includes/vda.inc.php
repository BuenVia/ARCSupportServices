<?php

// CUSTOMER DETAILS
if (isset($_POST['create-submit'])) {

    require 'dbh.inc.php';

    $date = date("Y-m-d H:i:s");

    $sname = $_POST['sname'];
    $fname = $_POST['fname'];
    $claim = $_POST['claim'];
    $policy = $_POST['policy'];
    
    if (empty($sname) || empty($fname) || empty($claim) || empty($policy)) {
        header("Location: ../vda-form-create.php?error=emptyfields");
        exit();
    }
    else {
        $sql = "SELECT date FROM vdaform WHERE date=?";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../vda-form-create.html?error=sqlerror");
            exit();
        }
        else {
                $sql = "INSERT INTO vdaform (date, surname, fname, claimNo, policyId) VALUES (?, ?, ?, ?, ?)";
                $stmt = mysqli_stmt_init($conn);
                if (!mysqli_stmt_prepare($stmt, $sql)) {
                    header("Location: ../vda-form-create.html?error=sqlerror1");
                    exit();
                }
                else {
                    mysqli_stmt_bind_param($stmt, "sssss", $date, $sname, $fname, $claim, $policy);
                    mysqli_stmt_execute($stmt);
                    header("Location: ../login.php?");
                    exit();
                    }
            }
    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}

// CLAIM DETAILS
if (isset($_POST['claim-submit'])) {

    require 'dbh.inc.php';

    $claim = $_POST['claim'];
    $policy = $_POST['policy'];
    $loc = $_POST['loc'];
    $dateLoss = $_POST['dateLoss'];
    
    if (empty($claim) || empty($policy) || empty($loc) || empty($dateLoss)) {
        header("Location: ../vda-form-claim.php?error=emptyfields");
        exit();
    }
    else {
        $sql = "SELECT date FROM vdaform WHERE date=?";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../index.html?error=sqlerror");
            exit();
        }
        else {
                $sql = "INSERT INTO vdaform (date, suffix, surname, fname, street, town, county, postcode, phone) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
                $stmt = mysqli_stmt_init($conn);
                if (!mysqli_stmt_prepare($stmt, $sql)) {
                    header("Location: ../index.html?error=sqlerror1");
                    exit();
                }
                else {
                    mysqli_stmt_bind_param($stmt, "sssssssss", $date, $suffix, $sname, $fname, $street, $town, $county, $postcode, $phone);
                    mysqli_stmt_execute($stmt);
                    header("Location: ../vda-form-claim.php");
                    exit();
                    }
            }
    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}

// FALLBACK
else {
    echo "false";
}

?>