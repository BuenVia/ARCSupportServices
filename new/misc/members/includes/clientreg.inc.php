<?php

if (isset($_POST['cuse-submit'])) {
    
    require 'dbh.inc.php';
    
    $email = $_POST['email'];
    $fname = $_POST['fname'];
    $sname = $_POST['sname'];
    $com = $_POST['com'];
    $phone = $_POST['phone'];
    $psw = $_POST['psw'];
    $rpsw = $_POST['rpsw'];
    
    if (empty($email) || empty($fname) || empty($sname) || empty($com) || empty($phone)) {
        header("Location: ../admin_cuse.php?error=emptyfields&email=".$email."&fname=".$fname."&sname=".$sname."&com=".$com."&phone=".$phone);
        exit();
    }
    else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: ../admin_cuse.php?error=invalidemail&fname=".$fname."&sname=".$sname."&com=".$com."&phone=".$phone);
        exit();
    }
    else if ($psw !== $rpsw) {
        header("Location: ../admin_cuse.php?error=passwordcheck&mail=".$email."&fname=".$fname."&sname=".$sname."&com=".$com."&phone=".$phone);
        exit();
    }
    else {
        
        $sql = "SELECT emailMember FROM memberlist WHERE emailMember=?";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../admin_cuse.php?error=sqlerror");
            exit();
        }
        else {
            mysqli_stmt_bind_param($stmt, "s", $email);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $resultcheck = mysqli_stmt_num_rows($stmt);
            if ($resultcheck > 0) {
                header("Location: ../admin_cuse.php?error=emailtaken&mail=".$email."&fname=".$fname."&sname=".$sname."&com=".$com."&phone=".$phone);
                exit();
            }
            else {
                
                $sql = "INSERT INTO memberlist (emailMember, fnameMember, snameMember, companyMember, phoneMember, pwMember) VALUES (?, ?, ?, ?, ?, ?)";
                $stmt = mysqli_stmt_init($conn);
                if (!mysqli_stmt_prepare($stmt, $sql)) {
                    header("Location: ../admin_cuse.php?error=sqlerror");
                    exit();
        }
            else {
                $hashedpsw = password_hash($psw, PASSWORD_DEFAULT);

                mkdir("../clients/".$com, 0777);
                mysqli_stmt_bind_param($stmt, "ssssss", $email, $fname, $sname, $com, $phone, $hashedpsw);
                mysqli_stmt_execute($stmt);
                header("Location: ../admin_cuse.php?signup=success");
                exit();
            }
        }
        
    }
    
    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
    
}

else {
    header("Location: ../admin_cuse.php");
    exit();
}