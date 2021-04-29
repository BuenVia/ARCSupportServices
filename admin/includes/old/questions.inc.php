<?php

if (isset($_POST['1info-submit'])) {

    require 'dbh.inc.php';

    $date = $_POST['date'];
    $nameInsp = $_POST['nameInsp'];
    $nameAtt = $_POST['nameAtt'];
    $genCom = $_POST['genCom'];
    $inspId = $_GET['inspid'];
    $bsid = $_GET['bsid'];

    if (empty($date) || empty($nameInsp) || empty($nameAtt)) {
        header("Location: ../safety/checklist/1info.php?bsid=".$bsid."&inspid=".$inspId."&error=emptyfields&date=".$date."&nameinsp=".$nameInsp."&nameatt=".$nameAtt);
        exit();
    }
    else {
        $sql = "SELECT inspId FROM inspection WHERE inspId=".$inspId.";";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../safety/checklist/1info.php?bsid=".$bsid."&inspid=".$inspId."&error=sqlerror");
            exit();
        }
        else {
                $sql = "UPDATE inspection SET date = ?, inspector = ?, attendee = ?, genCom = ? WHERE inspId=".$inspId.";";
                $stmt = mysqli_stmt_init($conn);
                if (!mysqli_stmt_prepare($stmt, $sql)) {
                    header("Location: ../safety/checklist/1info.php?bsid=".$bsid."&inspid=".$inspId."&error=sqlerror1");
                    exit();
                }
                else {
                    mysqli_stmt_bind_param($stmt, "ssss", $date, $nameInsp, $nameAtt, $genCom);
                    mysqli_stmt_execute($stmt);
                    echo '<input type="text" style="width:75%" name="inspId" value="'.$inspId.'"readonly/><br>';
                    header("Location: ../safety/checklist/checklist.php?bsid=".$bsid."&inspid=".$inspId."&answers=success");
                    exit();
                    }
            }
    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
  }

  else if (isset($_POST['2docs-submit'])) {

      require 'dbh.inc.php';

      $eli = $_POST['eli'];
      $eliexp = $_POST['eliexp'];
      $pli = $_POST['pli'];
      $pliexp = $_POST['pliexp'];
      $rri = $_POST['rri'];
      $rriexp = $_POST['rriexp'];
      $air = $_POST['air'];
      $docCom = $_POST['docCom'];

      $inspId = $_GET['inspid'];
      $bsid = $_GET['bsid'];

      if (empty($eli) || empty($eliexp) || empty($pli) || empty($pliexp) || empty($rri) || empty($rriexp) || empty($air)) {
          header("Location: ../safety/checklist/2docs.php?bsid=".$bsid."&inspid=".$inspId."&error=emptyfields&eli=".$eli."&pli=".$pli."&rri=".$rri."&air=".$air);
          exit();
      }
      else {
          $sql = "SELECT inspId FROM inspection WHERE inspId=".$inspId.";";
          $stmt = mysqli_stmt_init($conn);
          if (!mysqli_stmt_prepare($stmt, $sql)) {
              header("Location: ../safety/checklist/2docs.php?bsid=".$bsid."&inspid=".$inspId."&error=sqlerror");
              exit();
          }
          else {
                  $sql = "UPDATE inspection SET eli = ?, eliExp = ?, pli = ?, pliExp = ?, rri = ?, rriExp = ?, air = ?, docCom = ? WHERE inspId=".$inspId.";";
                  $stmt = mysqli_stmt_init($conn);
                  if (!mysqli_stmt_prepare($stmt, $sql)) {
                      header("Location: ../safety/checklist/2docs.php?bsid=".$bsid."&inspid=".$inspId."&error=sqlerror1");
                      exit();
                  }
                  else {
                      mysqli_stmt_bind_param($stmt, "ssssssss", $eli, $eliexp, $pli, $pliexp, $rri, $rriexp, $air, $docCom);
                      mysqli_stmt_execute($stmt);
                      echo '<input type="text" style="width:75%" name="inspId" value="'.$inspId.'"readonly/><br>';
                      header("Location: ../safety/checklist/checklist.php?bsid=".$bsid."&inspid=".$inspId."&answers=success");
                      exit();
                      }
              }
      }
      mysqli_stmt_close($stmt);
      mysqli_close($conn);
    }

    else if (isset($_POST['3offsite-submit'])) {

        require 'dbh.inc.php';

        $trans = $_POST['trans'];
        $transOplic = $_POST['transOplic'];
        $transExp = $_POST['transExp'];
        $transMot = $_POST['transMot'];
        $transMotDue = $_POST['transMotDue'];
        $transDriveMon = $_POST['transDriveMon'];
        $transDriveLic = $_POST['transDriveLic'];

        $collect = $_POST['collect'];
        $colNoDrive = $_POST['colNoDrive'];
        $colDriveMon = $_POST['colDriveMon'];
        $colDriveLic = $_POST['colDriveLic'];
        $colCom = $_POST['colCom'];

        $inspId = $_GET['inspid'];
        $bsid = $_GET['bsid'];

        if (empty($trans) || empty($transOplic) || empty($transMot) || empty($transDriveMon) || empty($transDriveLic) || empty($collect) || empty($colDriveMon) || empty($colDriveLic)) {
            header("Location: ../safety/checklist/3offiste.php?bsid=".$bsid."&inspid=".$inspId."&error=emptyfields&eli=".$trans."&pli=".$transOplic."&rri=".$transMot."&air=".$transDriveMon);
            exit();
        }
        else {
            $sql = "SELECT inspId FROM inspection WHERE inspId=".$inspId.";";
            $stmt = mysqli_stmt_init($conn);
            if (!mysqli_stmt_prepare($stmt, $sql)) {
                header("Location: ../safety/checklist/3offsite.php?bsid=".$bsid."&inspid=".$inspId."&error=sqlerror");
                exit();
            }
            else {
                    $sql = "UPDATE inspection SET trans = ?, transOplic = ?, transExp = ?, transMot = ?, transMotDue = ?, transDriveMon = ?, transDriveLic = ?, collect = ?, colNoDrive = ?, colDriveMon = ?, colDriveLic = ?, colCom = ? WHERE inspId=".$inspId.";";
                    $stmt = mysqli_stmt_init($conn);
                    if (!mysqli_stmt_prepare($stmt, $sql)) {
                        header("Location: ../safety/checklist/3offsite.php?bsid=".$bsid."&inspid=".$inspId."&error=sqlerror1");
                        exit();
                    }
                    else {
                        mysqli_stmt_bind_param($stmt, "ssssssssssss", $trans, $transOplic, $transExp, $transMot, $transMotDue, $transDriveMon, $transDriveLic, $collect, $colNoDrive, $colDriveMon, $colDriveLic, $colCom);
                        mysqli_stmt_execute($stmt);
                        echo '<input type="text" style="width:75%" name="inspId" value="'.$inspId.'"readonly/><br>';
                        header("Location: ../safety/checklist/checklist.php?bsid=".$bsid."&inspid=".$inspId."&answers=success");
                        exit();
                        }
                }
        }
        mysqli_stmt_close($stmt);
        mysqli_close($conn);
      }

else if (isset($_POST['4onsite-submit'])) {

    require 'dbh.inc.php';

    $build = $_POST['build'];
    $des = $_POST['des'];
    $recep = $_POST['recep'];
    $office = $_POST['office'];
    $toilet = $_POST['toilet'];
    $break = $_POST['break'];
    $workshop = $_POST['workshop'];
    $washbay = $_POST['washbay'];
    $yard = $_POST['yard'];
    $smoke = $_POST['smoke'];
    $facCom = $_POST['facCom'];

    $inspId = $_GET['inspid'];
    $bsid = $_GET['bsid'];

    if (empty($build) || empty($des) || empty($recep) || empty($office) || empty($toilet) || empty($break) || empty($workshop) || empty($washbay) || empty($yard) || empty($smoke)) {
        header("Location: ../safety/checklist/4onsite.php?bsid=".$bsid."&inspid=".$inspId."&error=emptyfields&eli=".$build."&pli=".$des."&rri=".$recep."&air=".$office);
        exit();
    }
    else {
        $sql = "SELECT inspId FROM inspection WHERE inspId=".$inspId.";";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../safety/checklist/4onsite.php?bsid=".$bsid."&inspid=".$inspId."&error=sqlerror");
            exit();
        }
        else {
                $sql = "UPDATE inspection SET build = ?, des = ?, recep = ?, office = ?, toilet = ?, break = ?, workshop = ?, washbay = ?, yard = ?, smoke = ?, facCom = ? WHERE inspId=".$inspId.";";
                $stmt = mysqli_stmt_init($conn);
                if (!mysqli_stmt_prepare($stmt, $sql)) {
                    header("Location: ../safety/checklist/4onsite.php?bsid=".$bsid."&inspid=".$inspId."&error=sqlerror1");
                    exit();
                }
                else {
                    mysqli_stmt_bind_param($stmt, "sssssssssss", $build, $des, $recep, $office, $toilet, $break, $workshop, $washbay, $yard, $smoke, $facCom);
                    mysqli_stmt_execute($stmt);
                    echo '<input type="text" style="width:75%" name="inspId" value="'.$inspId.'"readonly/><br>';
                    header("Location: ../safety/checklist/checklist.php?bsid=".$bsid."&inspid=".$inspId."&answers=success");
                    exit();
                    }
            }
    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
  }

else if (isset($_POST['5fire-submit'])) {

    require 'dbh.inc.php';

    $fAlarm = $_POST['fAlarm'];
    $fSound = $_POST['fSound'];
    $fDet = $_POST['fDet'];
    $detLoc = $_POST['detLoc'];
    $manCall = $_POST['manCall'];
    $conPan = $_POST['conPan'];
    $inTest = $_POST['inTest'];
    $testDate = $_POST['testDate'];
    $service = $_POST['service'];
    $servDate = $_POST['servDate'];
    $fireCom = $_POST['fireCom'];

    $inspId = $_GET['inspid'];
    $bsid = $_GET['bsid'];

    if (empty($fAlarm) || empty($fSound) || empty($fDet) || empty($detLoc) || empty($manCall) || empty($conPan) || empty($inTest) || empty($testDate) || empty($servDate)) {
        header("Location: ../safety/checklist/5fire.php?bsid=".$bsid."&inspid=".$inspId."&error=emptyfields&eli=".$fAlarm."&pli=".$fSound."&rri=".$fDet."&air=".$manCall);
        exit();
    }
    else {
        $sql = "SELECT inspId FROM inspection WHERE inspId=".$inspId.";";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../safety/checklist/5fire.php?bsid=".$bsid."&inspid=".$inspId."&error=sqlerror");
            exit();
        }
        else {
                $sql = "UPDATE inspection SET fAlarm = ?, fSound = ?, fDet = ?, detLoc = ?, manCall = ?, conPan = ?, inTest = ?, testDate = ?, service = ?, servDate = ?, fireCom = ? WHERE inspId=".$inspId.";";
                $stmt = mysqli_stmt_init($conn);
                if (!mysqli_stmt_prepare($stmt, $sql)) {
                    header("Location: ../safety/checklist/5fire.php?bsid=".$bsid."&inspid=".$inspId."&error=sqlerror1");
                    exit();
                }
                else {
                    mysqli_stmt_bind_param($stmt, "sssssssssss", $fAlarm, $fSound, $fDet, $detLoc, $manCall, $conPan, $inTest, $testDate, $service, $servDate, $fireCom);
                    mysqli_stmt_execute($stmt);
                    echo '<input type="text" style="width:75%" name="inspId" value="'.$inspId.'"readonly/><br>';
                    header("Location: ../safety/checklist/checklist.php?bsid=".$bsid."&inspid=".$inspId."&answers=success");
                    exit();
                    }
            }
    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
  }

else if (isset($_POST['6train-submit'])) {

    require 'dbh.inc.php';

    $fireTrain = $_POST['fireTrain'];
    $genTrain = $_POST['genTrain'];
    $equipTrain = $_POST['equipTrain'];
    $trainCom = $_POST['trainCom'];

    $inspId = $_GET['inspid'];
    $bsid = $_GET['bsid'];

    if (empty($fireTrain) || empty($genTrain) || empty($equipTrain)) {
        header("Location: ../safety/checklist/6train.php?bsid=".$bsid."&inspid=".$inspId."&error=emptyfields&eli=".$fireTrain."&pli=".$genTrain."&rri=".$equipTrain);
        exit();
    }
    else {
        $sql = "SELECT inspId FROM inspection WHERE inspId=".$inspId.";";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../safety/checklist/6train.php?bsid=".$bsid."&inspid=".$inspId."&error=sqlerror");
            exit();
        }
        else {
                $sql = "UPDATE inspection SET fireTrain = ?, genTrain = ?, equipTrain = ?, trainCom = ? WHERE inspId=".$inspId.";";
                $stmt = mysqli_stmt_init($conn);
                if (!mysqli_stmt_prepare($stmt, $sql)) {
                    header("Location: ../safety/checklist/6train.php?bsid=".$bsid."&inspid=".$inspId."&error=sqlerror1");
                    exit();
                }
                else {
                    mysqli_stmt_bind_param($stmt, "ssss", $fireTrain, $genTrain, $equipTrain, $trainCom);
                    mysqli_stmt_execute($stmt);
                    echo '<input type="text" style="width:75%" name="inspId" value="'.$inspId.'"readonly/><br>';
                    header("Location: ../safety/checklist/checklist.php?bsid=".$bsid."&inspid=".$inspId."&answers=success");
                    exit();
                    }
            }
    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
  }

else if (isset($_POST['7recep-submit'])) {

    require 'dbh.inc.php';

    $recepLoc = $_POST['recepLoc'];
    $recepRisk = $_POST['recepRisk'];
    $recepCom = $_POST['recepCom'];

    $inspId = $_GET['inspid'];
    $bsid = $_GET['bsid'];

    if (empty($recepLoc) || empty($recepRisk)) {
        header("Location: ../safety/checklist/7recep.php?bsid=".$bsid."&inspid=".$inspId."&error=emptyfields&eli=".$recepLoc."&pli=".$recepRisk);
        exit();
    }
    else {
        $sql = "SELECT inspId FROM inspection WHERE inspId=".$inspId.";";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../safety/checklist/7recep.php?bsid=".$bsid."&inspid=".$inspId."&error=sqlerror");
            exit();
        }
        else {
                $sql = "UPDATE inspection SET recepLoc = ?, recepRisk = ?, recepCom = ? WHERE inspId=".$inspId.";";
                $stmt = mysqli_stmt_init($conn);
                if (!mysqli_stmt_prepare($stmt, $sql)) {
                    header("Location: ../safety/checklist/7recep.php?bsid=".$bsid."&inspid=".$inspId."&error=sqlerror1");
                    exit();
                }
                else {
                    mysqli_stmt_bind_param($stmt, "sss", $recepLoc, $recepRisk, $recepCom);
                    mysqli_stmt_execute($stmt);
                    echo '<input type="text" style="width:75%" name="inspId" value="'.$inspId.'"readonly/><br>';
                    header("Location: ../safety/checklist/checklist.php?bsid=".$bsid."&inspid=".$inspId."&answers=success");
                    exit();
                    }
            }
    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
  }

else if (isset($_POST['8rest-submit'])) {

    require 'dbh.inc.php';

    $wcLoc = $_POST['wcLoc'];
    $wcKept = $_POST['wcKept'];
    $wcRec = $_POST['wcRec'];
    $brLoc = $_POST['brLoc'];
    $brKept = $_POST['brKept'];
    $brRec = $_POST['brRec'];
    $water = $_POST['water'];
    $restCom = $_POST['restCom'];

    $inspId = $_GET['inspid'];
    $bsid = $_GET['bsid'];

    if (empty($wcLoc) || empty($wcKept) || empty($wcRec) || empty($brLoc) || empty($brKept) || empty($brRec) || empty($water)) {
        header("Location: ../safety/checklist/8rest.php?bsid=".$bsid."&inspid=".$inspId."&error=emptyfields");
        exit();
    }
    else {
        $sql = "SELECT inspId FROM inspection WHERE inspId=".$inspId.";";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../safety/checklist/8rest.php?bsid=".$bsid."&inspid=".$inspId."&error=sqlerror");
            exit();
        }
        else {
                $sql = "UPDATE inspection SET wcLoc = ?, wcKept = ?, wcRec = ?, brLoc = ?, brKept = ?, brRec = ?, water = ?, restCom = ? WHERE inspId=".$inspId.";";
                $stmt = mysqli_stmt_init($conn);
                if (!mysqli_stmt_prepare($stmt, $sql)) {
                    header("Location: ../safety/checklist/8rest.php?bsid=".$bsid."&inspid=".$inspId."&error=sqlerror1");
                    exit();
                }
                else {
                    mysqli_stmt_bind_param($stmt, "ssssssss", $wcLoc, $wcKept, $wcRec, $brLoc, $brKept, $brRec, $water, $restCom);
                    mysqli_stmt_execute($stmt);
                    echo '<input type="text" style="width:75%" name="inspId" value="'.$inspId.'"readonly/><br>';
                    header("Location: ../safety/checklist/checklist.php?bsid=".$bsid."&inspid=".$inspId."&answers=success");
                    exit();
                    }
            }
    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
  }

else if (isset($_POST['9workshop-submit'])) {

    require 'dbh.inc.php';

    $wsWalk = $_POST['wsWalk'];
    $wsEgr = $_POST['wsEgr'];
    $wsRack = $_POST['wsRack'];
    $wsAcs = $_POST['wsAcs'];
    $wsLad = $_POST['wsLad'];
    $wsWeld = $_POST['wsWeld'];
    $wsWeldEquip = $_POST['wsWeldEquip'];
    $wsWeldPPE = $_POST['wsWeldPPE'];
    $wsSand = $_POST['wsSand'];
    $wsBat = $_POST['wsBat'];
    $wsWheel = $_POST['wsWheel'];
    $wsLift = $_POST['wsLift'];
    $wsLiftCond = $_POST['wsLiftCond'];
    $wsLit = $_POST['wsLit'];
    $wsTidy = $_POST['wsTidy'];
    $wsCom = $_POST['wsCom'];

    $inspId = $_GET['inspid'];
    $bsid = $_GET['bsid'];

    if (empty($wsWalk) || empty($wsEgr) || empty($wsRack) || empty($wsAcs) || empty($wsLad) || empty($wsWeld) || empty($wsSand)) {
        header("Location: ../safety/checklist/8rest.php?bsid=".$bsid."&inspid=".$inspId."&error=emptyfields");
        exit();
    }
    else {
        $sql = "SELECT inspId FROM inspection WHERE inspId=".$inspId.";";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../safety/checklist/8rest.php?bsid=".$bsid."&inspid=".$inspId."&error=sqlerror");
            exit();
        }
        else {
                $sql = "UPDATE inspection SET wsWalk = ?, wsEgr = ?, wsRack = ?, wsAcs = ?, wsLad = ?, wsWeld = ?, wsWeldEquip = ?, wsWeldPPE = ?,
                 wsSand = ?, wsBat = ?, wsWheel = ?, wsLift = ?, wsLiftCond = ?, wsLit = ?, wsTidy = ?, wsCom = ? WHERE inspId=".$inspId.";";
                $stmt = mysqli_stmt_init($conn);
                if (!mysqli_stmt_prepare($stmt, $sql)) {
                    header("Location: ../safety/checklist/8rest.php?bsid=".$bsid."&inspid=".$inspId."&error=sqlerror1");
                    exit();
                }
                else {
                    mysqli_stmt_bind_param($stmt, "ssssssssssssssss", $wsWalk, $wsEgr, $wsRack, $wsAcs, $wsLad, $wsWeld, $wsWeldEquip, $wsWeldPPE, $wsSand, $wsBat, $wsWheel, $wsLift, $wsLiftCond, $wsLit, $wsTidy, $wsCom);
                    mysqli_stmt_execute($stmt);
                    echo '<input type="text" style="width:75%" name="inspId" value="'.$inspId.'"readonly/><br>';
                    header("Location: ../safety/checklist/checklist.php?bsid=".$bsid."&inspid=".$inspId."&answers=success");
                    exit();
                    }
            }
    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
  }

else if (isset($_POST['10pmix-submit'])) {

    require 'dbh.inc.php';

    $noPmix = $_POST['noPmix'];
    $storeP = $_POST['storeP'];
    $contP = $_POST['contP'];
    $extP = $_POST['extP'];
    $pLEV = $_POST['pLEV'];
    $encP = $_POST['encP'];
    $ppeP = $_POST['ppeP'];
    $ppeProv = $_POST['ppeProv'];
    $ppeWear = $_POST['ppeWear'];
    $lightP = $_POST['lightP'];
    $gunClean = $_POST['gunClean'];
    $gCvent = $_POST['gCvent'];
    $gCLEV = $_POST['gCLEV'];
    $tripP = $_POST['tripP'];
    $elecP = $_POST['elecP'];
    $paintCom = $_POST['paintCom'];

    $inspId = $_GET['inspid'];
    $bsid = $_GET['bsid'];

    if (empty($noPmix) || empty($storeP) || empty($contP) || empty($extP) || empty($pLEV) || empty($encP) || empty($ppeP) || empty($ppeProv) || empty($ppeWear) || empty($lightP) || empty($tripP) || empty($elecP)) {
        header("Location: ../safety/checklist/10pmix.php?bsid=".$bsid."&inspid=".$inspId."&error=emptyfields");
        exit();
    }
    else {
        $sql = "SELECT inspId FROM inspection WHERE inspId=".$inspId.";";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../safety/checklist/10pmix.php?bsid=".$bsid."&inspid=".$inspId."&error=sqlerror");
            exit();
        }
        else {
                $sql = "UPDATE inspection SET noPmix = ?, storeP = ?, contP = ?, extP = ?, pLEV = ?, encP = ?, ppeP = ?, ppeProv = ?, ppeWear = ?, lightP = ?, gunClean = ?, gCvent = ?, gCLEV = ?, tripP = ?, elecP = ?, paintCom = ? WHERE inspId=".$inspId.";";
                $stmt = mysqli_stmt_init($conn);
                if (!mysqli_stmt_prepare($stmt, $sql)) {
                    header("Location: ../safety/checklist/10pmix.php?bsid=".$bsid."&inspid=".$inspId."&error=sqlerror1");
                    exit();
                }
                else {
                    mysqli_stmt_bind_param($stmt, "ssssssssssssssss", $noPmix, $storeP, $contP, $extP, $pLEV, $encP, $ppeP, $ppeProv, $ppeWear, $lightP, $gunClean, $gCvent, $gCLEV, $tripP, $elecP, $paintCom);
                    mysqli_stmt_execute($stmt);
                    echo '<input type="text" style="width:75%" name="inspId" value="'.$inspId.'"readonly/><br>';
                    header("Location: ../safety/checklist/checklist.php?bsid=".$bsid."&inspid=".$inspId."&answers=success");
                    exit();
                    }
            }
    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
  }

else if (isset($_POST['11spray-submit'])) {

    require 'dbh.inc.php';

    $noSpray = $_POST['noSpray'];
    $sprayExt = $_POST['sprayExt'];
    $sprayLEV = $_POST['sprayLEV'];
    $encSpray = $_POST['encSpray'];
    $doorsSpray = $_POST['doorsSpray'];
    $ppeSpray = $_POST['ppeSpray'];
    $ppeProvSpray = $_POST['ppeProvSpray'];
    $ppeWearSpray = $_POST['ppeWearSpray'];
    $lightSpray = $_POST['lightSpray'];
    $sprayCom = $_POST['sprayCom'];

    $inspId = $_GET['inspid'];
    $bsid = $_GET['bsid'];

    if (empty($noSpray) || empty($sprayExt) || empty($sprayLEV) || empty($encSpray) || empty($doorsSpray) || empty($ppeSpray) || empty($ppeProvSpray) || empty($ppeWearSpray) || empty($lightSpray) || empty($sprayCom)) {
        header("Location: ../safety/checklist/11spray.php?bsid=".$bsid."&inspid=".$inspId."&error=emptyfields");
        exit();
    }
    else {
        $sql = "SELECT inspId FROM inspection WHERE inspId=".$inspId.";";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../safety/checklist/11spray.php?bsid=".$bsid."&inspid=".$inspId."&error=sqlerror");
            exit();
        }
        else {
                $sql = "UPDATE inspection SET noSpray = ?, sprayExt = ?, sprayLEV = ?, encSpray = ?, doorsSpray = ?, ppeSpray = ?, ppeProvSpray = ?, ppeWearSpray = ?, lightSpray = ?, sprayCom = ? WHERE inspId=".$inspId.";";
                $stmt = mysqli_stmt_init($conn);
                if (!mysqli_stmt_prepare($stmt, $sql)) {
                    header("Location: ../safety/checklist/11spray.php?bsid=".$bsid."&inspid=".$inspId."&error=sqlerror1");
                    exit();
                }
                else {
                    mysqli_stmt_bind_param($stmt, "ssssssssss", $noSpray, $sprayExt, $sprayLEV, $encSpray, $doorsSpray, $ppeSpray, $ppeProvSpray, $ppeWearSpray, $lightSpray, $sprayCom);
                    mysqli_stmt_execute($stmt);
                    echo '<input type="text" style="width:75%" name="inspId" value="'.$inspId.'"readonly/><br>';
                    header("Location: ../safety/checklist/checklist.php?bsid=".$bsid."&inspid=".$inspId."&answers=success");
                    exit();
                    }
            }
    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
  }

else if (isset($_POST['12parts-submit'])) {

    require 'dbh.inc.php';

    $partsClean = $_POST['partsClean'];
    $partsRack = $_POST['partsRack'];
    $partsAccess = $_POST['partsAccess'];
    $partsLadder = $_POST['partsLadder'];
    $partsEgress = $_POST['partsEgress'];
    $partsLight = $_POST['partsLight'];
    $partsCom = $_POST['partsCom'];

    $inspId = $_GET['inspid'];
    $bsid = $_GET['bsid'];

    if (empty($partsClean) || empty($partsRack) || empty($partsAccess) || empty($partsLadder) || empty($partsEgress) || empty($partsLight)) {
        header("Location: ../safety/checklist/12parts.php?bsid=".$bsid."&inspid=".$inspId."&error=emptyfields");
        exit();
    }
    else {
        $sql = "SELECT inspId FROM inspection WHERE inspId=".$inspId.";";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../safety/checklist/12parts.php?bsid=".$bsid."&inspid=".$inspId."&error=sqlerror");
            exit();
        }
        else {
                $sql = "UPDATE inspection SET partsClean = ?, partsRack = ?, partsAccess = ?, partsLadder = ?, partsEgress = ?, partsLight = ?, partsCom = ? WHERE inspId=".$inspId.";";
                $stmt = mysqli_stmt_init($conn);
                if (!mysqli_stmt_prepare($stmt, $sql)) {
                    header("Location: ../safety/checklist/12parts.php?bsid=".$bsid."&inspid=".$inspId."&error=sqlerror1");
                    exit();
                }
                else {
                    mysqli_stmt_bind_param($stmt, "sssssss", $partsClean, $partsRack, $partsAccess, $partsLadder, $partsEgress, $partsLight, $partsCom);
                    mysqli_stmt_execute($stmt);
                    echo '<input type="text" style="width:75%" name="inspId" value="'.$inspId.'"readonly/><br>';
                    header("Location: ../safety/checklist/checklist.php?bsid=".$bsid."&inspid=".$inspId."&answers=success");
                    exit();
                    }
            }
    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
  }

else if (isset($_POST['13yard-submit'])) {

    require 'dbh.inc.php';

    $yardSurface = $_POST['yardSurface'];
    $yardEven = $_POST['yardEven'];
    $yardStore = $_POST['yardStore'];
    $yardCombust = $_POST['yardCombust'];
    $yardGates = $_POST['yardGates'];
    $yardUnlocked = $_POST['yardUnlocked'];
    $yardAccess = $_POST['yardAccess'];
    $yardLit = $_POST['yardLit'];
    $yardCom = $_POST['yardCom'];

    $inspId = $_GET['inspid'];
    $bsid = $_GET['bsid'];

    if (empty($yardSurface) || empty($yardEven) || empty($yardStore) || empty($yardCombust) || empty($yardGates) || empty($yardUnlocked) || empty($yardAccess) || empty($yardLit)) {
        header("Location: ../safety/checklist/13yard.php?bsid=".$bsid."&inspid=".$inspId."&error=emptyfields");
        exit();
    }
    else {
        $sql = "SELECT inspId FROM inspection WHERE inspId=".$inspId.";";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../safety/checklist/13yard.php?bsid=".$bsid."&inspid=".$inspId."&error=sqlerror");
            exit();
        }
        else {
                $sql = "UPDATE inspection SET yardSurface = ?, yardEven = ?, yardStore = ?, yardCombust = ?, yardGates = ?, yardUnlocked = ?, yardAccess = ?, yardLit = ?, yardCom = ? WHERE inspId=".$inspId.";";
                $stmt = mysqli_stmt_init($conn);
                if (!mysqli_stmt_prepare($stmt, $sql)) {
                    header("Location: ../safety/checklist/13yard.php?bsid=".$bsid."&inspid=".$inspId."&error=sqlerror1");
                    exit();
                }
                else {
                    mysqli_stmt_bind_param($stmt, "sssssssss", $yardSurface, $yardEven, $yardStore, $yardCombust, $yardGates, $yardUnlocked, $yardAccess, $yardLit, $yardCom);
                    mysqli_stmt_execute($stmt);
                    echo '<input type="text" style="width:75%" name="inspId" value="'.$inspId.'"readonly/><br>';
                    header("Location: ../safety/checklist/checklist.php?bsid=".$bsid."&inspid=".$inspId."&answers=success");
                    exit();
                    }
            }
    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
  }

else if (isset($_POST['14wash-submit'])) {

    require 'dbh.inc.php';

    $washPressure = $_POST['washPressure'];
    $washClean = $_POST['washClean'];
    $washChem = $_POST['washChem'];
    $washItems = $_POST['washItems'];
    $washLight = $_POST['washLight'];
    $washCom = $_POST['washCom'];

    $inspId = $_GET['inspid'];
    $bsid = $_GET['bsid'];

    if (empty($washPressure) || empty($washClean) || empty($washChem) || empty($washItems) || empty($washLight)) {
        header("Location: ../safety/checklist/14wash.php?bsid=".$bsid."&inspid=".$inspId."&error=emptyfields");
        exit();
    }
    else {
        $sql = "SELECT inspId FROM inspection WHERE inspId=".$inspId.";";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../safety/checklist/14wash.php?bsid=".$bsid."&inspid=".$inspId."&error=sqlerror");
            exit();
        }
        else {
                $sql = "UPDATE inspection SET washPressure = ?, washClean = ?, washChem = ?, washItems = ?, washLight = ?, washCom = ? WHERE inspId=".$inspId.";";
                $stmt = mysqli_stmt_init($conn);
                if (!mysqli_stmt_prepare($stmt, $sql)) {
                    header("Location: ../safety/checklist/14wash.php?bsid=".$bsid."&inspid=".$inspId."&error=sqlerror1");
                    exit();
                }
                else {
                    mysqli_stmt_bind_param($stmt, "ssssss", $washPressure, $washClean, $washChem, $washItems, $washLight, $washCom);
                    mysqli_stmt_execute($stmt);
                    echo '<input type="text" style="width:75%" name="inspId" value="'.$inspId.'"readonly/><br>';
                    header("Location: ../safety/checklist/checklist.php?bsid=".$bsid."&inspid=".$inspId."&answers=success");
                    exit();
                    }
            }
    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
  }

  else {
    header("Location: ../index.php?");
    exit();
  }
