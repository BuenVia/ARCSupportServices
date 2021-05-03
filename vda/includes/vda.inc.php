<?php

// FORM DETAILS
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
                $sql = "INSERT INTO vdaform (date, userId, userEmail, bodyshop, bsid, surname, fname, claimNo, policyId, dateLoss) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
                $stmt = mysqli_stmt_init($conn);
                if (!mysqli_stmt_prepare($stmt, $sql)) {
                    header("Location: ../vda-form-create.php?error=sqlerror1");
                    exit();
                }
                else {
                    mysqli_stmt_bind_param($stmt, "ssssssssss", $date, $userId, $userEmail, $bodyshop, $bsid, $sname, $fname, $claim, $policy, $dateLoss);
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
            header("Location: ../login.php?&error=sqlerror");
            exit();
        }
        else {
                $sql = "UPDATE vdaform SET surname = ?, fname = ?, claimNo = ?, policyId = ?, dateLoss = ? WHERE id=".$formId.";";
                $stmt = mysqli_stmt_init($conn);
                if (!mysqli_stmt_prepare($stmt, $sql)) {
                    header("Location: ../index.html?error=sqlerror1");
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
            header("Location: ../login.php?&error=sqlerror");
            exit();
        }
        else {
                $sql = "UPDATE vdaform SET street = ?, town = ?, county = ?, postcode = ?, phone = ? WHERE id=".$formId.";";
                $stmt = mysqli_stmt_init($conn);
                if (!mysqli_stmt_prepare($stmt, $sql)) {
                    header("Location: ../index.html?error=sqlerror1");
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
            header("Location: ../login.php?&error=sqlerror");
            exit();
        }
        else {
                $sql = "UPDATE vdaform SET reg = ?, make = ?, model = ?, mileage = ?, vin = ?, adas = ? WHERE id=".$formId.";";
                $stmt = mysqli_stmt_init($conn);
                if (!mysqli_stmt_prepare($stmt, $sql)) {
                    header("Location: ../index.html?error=sqlerror1");
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
            header("Location: ../login.php?&error=sqlerror");
            exit();
        }
        else {
                $sql = "UPDATE vdaform SET tyres = ?, brakes = ?, steering = ?, preAcc = ?, paint = ?, colour = ?, body = ?, vehStatus = ? WHERE id=".$formId.";";
                $stmt = mysqli_stmt_init($conn);
                if (!mysqli_stmt_prepare($stmt, $sql)) {
                    header("Location: ../index.html?error=sqlerror1");
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
            header("Location: ../login.php?&error=sqlerror");
            exit();
        }
        else {
                $sql = "UPDATE vdaform SET nsfTyre = ?, osfTyre = ?, nsrTyre = ?, osrTyre = ? WHERE id=".$formId.";";
                $stmt = mysqli_stmt_init($conn);
                if (!mysqli_stmt_prepare($stmt, $sql)) {
                    header("Location: ../index.html?error=sqlerror1");
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
        header("Location: ../login.php?&error=sqlerror");
        exit();
    }
    else {
            $sql = "UPDATE vdaform SET repIns = ?, supRepIns = ?, furNote = ? WHERE id=".$formId.";";
            $stmt = mysqli_stmt_init($conn);
            if (!mysqli_stmt_prepare($stmt, $sql)) {
                header("Location: ../login.html?error=sqlerror1");
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

// FALLBACK
else {
    echo "false";
}

?>