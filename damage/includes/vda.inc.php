<?php

// FORM CREATE
if (isset($_POST['create-submit'])) {

    require 'dbh.inc.php';

    $date = date("Y-m-d H:i:s");

    $userId = $_POST['userId'];
    $userEmail = $_POST['userEmail'];
    $bodyshop = $_POST['bodyshop'];
    $bsid = $_POST['bsid'];

    $sname = $_POST['sname'];
    $fname = $_POST['fname'];
    $claim = $_POST['claim'];
    $policy = $_POST['policy'];
    $dateLoss = $_POST['dateLoss'];
    $status = 'Pending';
    
    if (empty($sname) || empty($fname) || empty($claim) || empty($policy) || empty($dateLoss)) {
        header("Location: ../vda-form-create.php?error=emptyfields");
        exit();
    }
    else {
        $sql = "SELECT date FROM vdaform WHERE date=?";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../vda-form-create.php?error=sqlerror");
            exit();
        }
        else {
                $sql = "INSERT INTO vdaform (date, userId, userEmail, bodyshop, bsid, status,surname, fname, claimNo, policyId, dateLoss) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
                $stmt = mysqli_stmt_init($conn);
                if (!mysqli_stmt_prepare($stmt, $sql)) {
                    header("Location: ../vda-form-create.php?error=sqlerror1");
                    exit();
                }
                else {
                    mysqli_stmt_bind_param($stmt, "sssssssssss", $date, $userId, $userEmail, $bodyshop, $bsid, $status, $sname, $fname, $claim, $policy, $dateLoss);
                    mysqli_stmt_execute($stmt);
                    header("Location: ../login.php?success=true");
                    exit();
                    }
            }
    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}

// CLAIM DETAILS
if (isset($_POST['vda-claim-submit'])) {

    require 'dbh.inc.php';

    $formId = $_GET['formId'];
    $bsid = $_GET['bsid'];

    $sname = $_POST['sname'];
    $fname = $_POST['fname'];
    $claim = $_POST['claim'];
    $policy = $_POST['policy'];
    $dateLoss = $_POST['dateLoss'];
    
    if (empty($sname) || empty($fname) || empty($claim) || empty($policy) || empty($dateLoss)) {
        header("Location: ../vda-form-claim.php?formId=".$formId."&error=emptyfields");
        exit();
    }
    else {
        $sql = "SELECT id FROM vdaform WHERE id=".$formId.";";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../vda-form-claim.php?&error=sqlerror");
            exit();
        }
        else {
                $sql = "UPDATE vdaform SET surname = ?, fname = ?, claimNo = ?, policyId = ?, dateLoss = ? WHERE id=".$formId.";";
                $stmt = mysqli_stmt_init($conn);
                if (!mysqli_stmt_prepare($stmt, $sql)) {
                    header("Location: ../vda-form-claim.html?error=sqlerror1");
                    exit();
                }
                else {
                    mysqli_stmt_bind_param($stmt, "sssss", $sname, $fname, $claim, $policy, $dateLoss);
                    mysqli_stmt_execute($stmt);
                    header("Location: ../vda-form-review.php?formId=".$formId."&bsid=".$bsid);
                    exit();
                    }
            }
    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}

// ADDRESS DETAILS
if (isset($_POST['vda-address-submit'])) {

    require 'dbh.inc.php';

    $formId = $_GET['formId'];
    $bsid = $_GET['bsid'];

    $street = $_POST['street'];
    $town = $_POST['town'];
    $county = $_POST['county'];
    $postcode = $_POST['postcode'];
    $phone = $_POST['phone'];
    
    if (empty($street) || empty($town) || empty($county) || empty($postcode) || empty($phone)) {
        header("Location: ../vda-form-address.php?formId=".$formId."&error=emptyfields");
        exit();
    }
    else {
        $sql = "SELECT id FROM vdaform WHERE id=".$formId.";";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../vda-form-address.php?&error=sqlerror");
            exit();
        }
        else {
                $sql = "UPDATE vdaform SET street = ?, town = ?, county = ?, postcode = ?, phone = ? WHERE id=".$formId.";";
                $stmt = mysqli_stmt_init($conn);
                if (!mysqli_stmt_prepare($stmt, $sql)) {
                    header("Location: ../vda-form-address.html?error=sqlerror1");
                    exit();
                }
                else {
                    mysqli_stmt_bind_param($stmt, "sssss", $street, $town, $county, $postcode, $phone);
                    mysqli_stmt_execute($stmt);
                    header("Location: ../vda-form-review.php?formId=".$formId."&bsid=".$bsid);
                    exit();
                    }
            }
    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}

// VEHICLE DETAILS
if (isset($_POST['vda-vehicle-details-submit'])) {

    require 'dbh.inc.php';

    $formId = $_GET['formId'];
    $bsid = $_GET['bsid'];

    $reg = $_POST['reg'];
    $make = $_POST['make'];
    $model = $_POST['model'];
    $miles = $_POST['miles'];
    $vin = $_POST['vin'];
    $adas = $_POST['adas'];
    
    if (empty($reg) || empty($make) || empty($model) || empty($miles) || empty($vin) || empty($adas)) {
        header("Location: ../vda-form-vehicle-details.php?formId=".$formId."&error=emptyfields");
        exit();
    }
    else {
        $sql = "SELECT id FROM vdaform WHERE id=".$formId.";";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../vda-form-vehicle-details.php?&error=sqlerror");
            exit();
        }
        else {
                $sql = "UPDATE vdaform SET reg = ?, make = ?, model = ?, mileage = ?, vin = ?, adas = ? WHERE id=".$formId.";";
                $stmt = mysqli_stmt_init($conn);
                if (!mysqli_stmt_prepare($stmt, $sql)) {
                    header("Location: ../vda-form-vehicle-details.html?error=sqlerror1");
                    exit();
                }
                else {
                    mysqli_stmt_bind_param($stmt, "ssssss", $reg, $make, $model, $miles, $vin, $adas);
                    mysqli_stmt_execute($stmt);
                    header("Location: ../vda-form-review.php?formId=".$formId."&bsid=".$bsid);
                    exit();
                    }
            }
    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}

// VEHICLE CONDITION
if (isset($_POST['vda-vehicle-condition-submit'])) {

    require 'dbh.inc.php';

    $formId = $_GET['formId'];
    $bsid = $_GET['bsid'];

    $tyres = $_POST['tyres'];
    $brakes = $_POST['brakes'];
    $steering = $_POST['steering'];
    $preAcc = $_POST['preAcc'];
    $paint = $_POST['paint'];
    $colour = $_POST['colour'];
    $body = $_POST['body'];
    $vehStatus = $_POST['vehStatus'];
    
    if (empty($tyres) || empty($brakes) || empty($steering) || empty($preAcc) || empty($paint) || empty($colour) || empty($body) || empty($vehStatus)) {
        header("Location: ../vda-form-vehicle-condition.php?formId=".$formId."&error=emptyfields");
        exit();
    }
    else {
        $sql = "SELECT id FROM vdaform WHERE id=".$formId.";";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../vda-form-vehicle-condition.php?&error=sqlerror");
            exit();
        }
        else {
                $sql = "UPDATE vdaform SET tyres = ?, brakes = ?, steering = ?, preAcc = ?, paint = ?, colour = ?, body = ?, vehStatus = ? WHERE id=".$formId.";";
                $stmt = mysqli_stmt_init($conn);
                if (!mysqli_stmt_prepare($stmt, $sql)) {
                    header("Location: ../vda-form-vehicle-condition.html?error=sqlerror1");
                    exit();
                }
                else {
                    mysqli_stmt_bind_param($stmt, "ssssssss", $tyres, $brakes, $steering, $preAcc, $paint, $colour, $body, $vehStatus);
                    mysqli_stmt_execute($stmt);
                    header("Location: ../vda-form-review.php?formId=".$formId."&bsid=".$bsid);
                    exit();
                    }
            }
    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}

// TYRES STATUS
if (isset($_POST['vda-tyres-submit'])) {

    require 'dbh.inc.php';

    $formId = $_GET['formId'];
    $bsid = $_GET['bsid'];

    $nsf = $_POST['nsf'];
    $osf = $_POST['osf'];
    $nsr = $_POST['nsr'];
    $osr = $_POST['osr'];

    
    if (empty($nsf) || empty($osf) || empty($nsr) || empty($osr)) {
        header("Location: ../vda-form-tyres.php?formId=".$formId."&error=emptyfields");
        exit();
    }
    else {
        $sql = "SELECT id FROM vdaform WHERE id=".$formId.";";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../vda-form-tyres.php?&error=sqlerror");
            exit();
        }
        else {
                $sql = "UPDATE vdaform SET nsfTyre = ?, osfTyre = ?, nsrTyre = ?, osrTyre = ? WHERE id=".$formId.";";
                $stmt = mysqli_stmt_init($conn);
                if (!mysqli_stmt_prepare($stmt, $sql)) {
                    header("Location: ../vda-form-tyres.html?error=sqlerror1");
                    exit();
                }
                else {
                    mysqli_stmt_bind_param($stmt, "ssss", $nsf, $osf, $nsr, $osr);
                    mysqli_stmt_execute($stmt);
                    header("Location: ../vda-form-review.php?formId=".$formId."&bsid=".$bsid);
                    exit();
                    }
            }
    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}

// NOTES
if (isset($_POST['vda-notes-submit'])) {

    require 'dbh.inc.php';

    $formId = $_GET['formId'];
    $bsid = $_GET['bsid'];

    $repIns = $_POST['repIns'];
    $supRepIns = $_POST['supRepIns'];
    $furNote = $_POST['furNote'];

    $sql = "SELECT id FROM vdaform WHERE id=".$formId.";";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location: ../vda-form-notes.php?&error=sqlerror");
        exit();
    }
    else {
            $sql = "UPDATE vdaform SET repIns = ?, supRepIns = ?, furNote = ? WHERE id=".$formId.";";
            $stmt = mysqli_stmt_init($conn);
            if (!mysqli_stmt_prepare($stmt, $sql)) {
                header("Location: ../vda-form-notes.html?error=sqlerror1");
                exit();
            }
            else {
                mysqli_stmt_bind_param($stmt, "sss", $repIns, $supRepIns, $furNote);
                mysqli_stmt_execute($stmt);
                header("Location: ../vda-form-review.php?formId=".$formId."&bsid=".$bsid);
                exit();
                }
        }
    
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}

// COMPLETE FORM
if (isset($_POST['vda-form-submit'])) {

    require 'dbh.inc.php';

    $formId = $_GET['formId'];
    $bsid = $_GET['bsid'];

    $submitted = 'Submitted';

    $sql = "SELECT id FROM vdaform WHERE id=".$formId.";";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location: ../vda-form-review.php?&error=sqlerror");
        exit();
    }
    else {
            $sql = "UPDATE vdaform SET status = ? WHERE id=".$formId.";";
            $stmt = mysqli_stmt_init($conn);
            if (!mysqli_stmt_prepare($stmt, $sql)) {
                header("Location: ../vda-form-review.html?error=sqlerror1");
                exit();
            }
            else {
                mysqli_stmt_bind_param($stmt, "s", $submitted);
                mysqli_stmt_execute($stmt);
                header("Location: ../login.php?formId=".$formId."&bsid=".$bsid);
                exit();
                }
        }
    
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}

// PASSWORD RECOVERY SUBMIT
if (isset($_POST['recover-submit'])) {

    $selector = bin2hex(random_bytes(8));
    $token = random_bytes(32);

    $url = "www.buenvia.com/cielo/recover-new.php?selector=".$selector."&validator=".bin2hex($token);

    $expires = date("U")+1800;

    require 'dbh.inc.php';

    $userEmail = $_POST['email'];

    $sql = "DELETE FROM pwdReset WHERE pwdResetEmail=?";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)){
      header("Location: ../index.php?error=sqlerrorPwdReset");
      exit();
    } else {
      mysqli_stmt_bind_param($stmt, "s", $userEmail);
      mysqli_stmt_execute($stmt);
    }

    $sql = "INSERT INTO pwdReset (pwdResetEmail, pwdResetSelector, pwdResetToken, pwdResetExpires) VALUES (?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)){
      header("Location: ../index.php?error=sqlerrorPwdReset");
      exit();
    } else {
      $hashedToken = password_hash($token, PASSWORD_DEFAULT);
      mysqli_stmt_bind_param($stmt, "ssss", $userEmail, $selector, $hashedToken, $expires);
      mysqli_stmt_execute($stmt);
    }

    mysqli_stmt_close($stmt);
    mysqli_close();

    $to = $userEmail;
    $subject = 'BUENVIA Password Reset';
    $message = '<p>We have received a password reset request. The link to reset your password is below. If you did not make this request then please contact us immediately.</p>';
    $message .= '<p>Here is your password link: <br>';
    $message .= '<a href="'.$url.'">Buenvia Password Reset</a></p>';
    $headers = "From: Buenvia <matt@buenvia.com>\r\n";
    $headers .= "Reply-To: matt@buenvia.com>\r\n";
    $headers .= "Content-type: text/html\r\n";

    mail($to, $subject, $message, $headers);

    header("Location: ../recover.php?recover=success");

}

// PASSWORD UPDATE SUBMIT
if (isset($_POST['updatepsw-submit'])) {

    $selector = $_POST['selector'];
    $validator = $_POST['validator'];
    $psw = $_POST['psw'];
    $rpsw = $_POST['psw'];
  
    if (empty($selector) || empty($validator) || empty($psw) || empty($rpsw)) {
        header("Location: ../recover.php?error=emptyfields");
        exit();
    } else if ($psw != $rpsw) {
      header("Location: ../recover.php?error=pswnotmatch");
      exit();
    }
  
    $currentDate = date("U");
  
    require 'dbh.inc.php';
  
    $sql = "SELECT * FROM pwdReset WHERE pwdResetSelector=? AND pwdResetExpires >= ?";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)){
      header("Location: ../login.php?error=sqlerrorPwdResetStage2");
      exit();
    } else {
      mysqli_stmt_bind_param($stmt, "ss", $selector, $currentDate);
      mysqli_stmt_execute($stmt);
  
      $result = mysqli_stmt_get_result($stmt);
       if (!$row = mysqli_fetch_assoc($result)) {
         echo 'You need to resubmit your request';
         exit();
       } else {
  
         $tokenBin = hex2bin($validator);
         $tokenCheck = password_verify($tokenBin, $row['pwdResetToken']);
  
         if ($tokenCheck == false) {
           echo 'You need to resubmit your reset request! V.2';
           exit();
         } elseif ($tokenCheck == true) {
  
           $tokenEmail = $row['pwdResetEmail'];
  
           $sql = "SELECT * FROM supplier WHERE email=?;";
           $stmt = mysqli_stmt_init($conn);
           if (!mysqli_stmt_prepare($stmt, $sql)){
             header("Location: ../login.php?error=sqlerrorPwdResetStage2");
             exit();
           } else {
              mysqli_stmt_bind_param($stmt, "s", $tokenEmail);
              mysqli_stmt_execute($stmt);
              $result = mysqli_stmt_get_result($stmt);
               if (!$row = mysqli_fetch_assoc($result)) {
                 echo 'You need to resubmit your request V.3';
                 exit();
               } else {
  
                 $sql = "UPDATE supplier SET psw=? WHERE email=?";
                 $stmt = mysqli_stmt_init($conn);
                 if (!mysqli_stmt_prepare($stmt, $sql)){
                   header("Location: ../login.php?error=sqlerrorPwdResetStage2");
                   exit();
                 } else {
                    $newPswHashed = password_hash($psw, PASSWORD_DEFAULT);
  
                    mysqli_stmt_bind_param($stmt, "ss", $newPswHashed, $tokenEmail);
                    mysqli_stmt_execute($stmt);
  
                    $sql = "DELETE FROM pwdReset WHERE pwdResetEmail=?";
                    $stmt = mysqli_stmt_init($conn);
                    if (!mysqli_stmt_prepare($stmt, $sql)){
                      header("Location: ../login.php?error=sqlerrorPwdResetStage4");
                      exit();
                    } else {
  
                       mysqli_stmt_bind_param($stmt, "s", $tokenEmail);
                       mysqli_stmt_execute($stmt);
                       header("Location: ../login.php?newpsw=passwordupdated");
  
                  }
  
               }
           }
  
         }
  
       }
  
    }
  }
  }

// FALLBACK - UNAUTHORISED ACCESS
else {
    header("Location: ../index.php?access=unauthorised");
}

?>