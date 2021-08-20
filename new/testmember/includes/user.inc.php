<?php

require'dbh.inc.php';

if (isset($_GET['usid'])) {

      $usid = $_GET['usid'];

      $sql = "SELECT * FROM user WHERE userId=".$usid.";";
      $result = mysqli_query($conn, $sql);
      $resultCheck = mysqli_num_rows($result);

          if ($resultCheck > 0) {
            while ($row = mysqli_fetch_assoc($result)) {

              $fname = $row['fname'];
              $sname = $row['sname'];
              $emailUser = $row['email'];
              $phone = $row['phone'];
              $bodyshop = $row['bodyshop'];
              $bodyshopId = $row['bodyshopId'];

              }
          }
      }



if (isset($_GET['bsid'])) {

          $bsid = $_GET['bsid'];
          $inspId = $_GET['inspid'];

          $sql = "SELECT * FROM inspection WHERE inspId=".$inspId.";";
          $result = mysqli_query($conn, $sql);
          $resultCheck = mysqli_num_rows($result);

          if ($resultCheck > 0) {
            while ($row = mysqli_fetch_assoc($result)) {

              $idBodyshop = $row['bodyshopId'];
              $bodyShop = $row['bodyshop'];
              $inspId = $row['inspId'];
              $date = $row['date'];

              $bsid = $_GET['bsid'];
              $inspId = $_GET['inspid'];

              $dateInsp = $row['date'];
              $insp = $row['inspector'];
              $attend = $row['attendee'];
              $genCom = $row['genCom'];

              $eli = $row['eli'];
              $eliExp = $row['eliExp'];
              $pli = $row['pli'];
              $pliExp = $row['pliExp'];
              $rri = $row['rri'];
              $rriExp = $row['rriExp'];
              $air = $row['air'];
              $docCom = $row['docCom'];

              $trans = $row['trans'];
              $transOplic = $row['transOplic'];
              $transExp = $row['transExp'];
              $transMot = $row['transMot'];
              $transMotDue = $row['transMotDue'];
              $transDriveMon = $row['transDriveMon'];
              $transDriveLic = $row['transDriveLic'];
              $collect = $row['collect'];
              $colNoDrive = $row['colNoDrive'];
              $colDriveMon = $row['colDriveMon'];
              $colDriveLic = $row['colDriveLic'];
              $colCom = $row['colCom'];

              $build = $row['build'];
              $des = $row['des'];
              $recep = $row['recep'];
              $office = $row['office'];
              $toilet = $row['toilet'];
              $break = $row['break'];
              $workshop = $row['workshop'];
              $washbay = $row['washbay'];
              $yard = $row['yard'];
              $smoke = $row['smoke'];
              $facCom = $row['facCom'];

              $fAlarm = $row['fAlarm'];
              $fSound = $row['fSound'];
              $fDet = $row['fDet'];
              $detLoc = $row['detLoc'];
              $manCall = $row['manCall'];
              $conPan = $row['conPan'];
              $inTest = $row['inTest'];
              $testDate = $row['testDate'];
              $service = $row['service'];
              $servDate = $row['servDate'];
              $fireCom = $row['fireCom'];

              $fireTrain = $row['fireTrain'];
              $genTrain = $row['genTrain'];
              $equipTrain = $row['equipTrain'];
              $trainCom = $row['trainCom'];

              $recepLoc = $row['recepLoc'];
              $recepRisk = $row['recepRisk'];
              $recepCom = $row['recepCom'];

              $wcLoc = $row['wcLoc'];
              $wcKept = $row['wcKept'];
              $wcRec = $row['wcRec'];
              $brLoc = $row['brLoc'];
              $brKept = $row['brKept'];
              $brRec = $row['brRec'];
              $water = $row['water'];
              $restCom = $row['restCom'];

              $noPmix = $row['noPmix'];
              $storeP = $row['storeP'];
              $contP = $row['contP'];
              $extP = $row['extP'];
              $pLEV = $row['pLEV'];
              $encP = $row['encP'];
              $ppeP = $row['ppeP'];
              $ppeProv = $row['ppeProv'];
              $ppeWear = $row['ppeWear'];
              $lightP = $row['lightP'];
              $gunClean = $row['gunClean'];
              $gCvent = $row['gCvent'];
              $gCLEV = $row['gCLEV'];
              $tripP = $row['tripP'];
              $elecP = $row['elecP'];
              $paintCom = $row['paintCom'];

              $noSpray = $row['noSpray'];
              $sprayExt = $row['sprayExt'];
              $sprayLEV = $row['sprayLEV'];
              $encSpray = $row['encSpray'];
              $doorsSpray = $row['doorsSpray'];
              $ppeSpray = $row['ppeSpray'];
              $ppeProvSpray = $row['ppeProvSpray'];
              $ppeWearSpray = $row['ppeWearSpray'];
              $lightSpray = $row['lightSpray'];
              $sprayCom = $row['sprayCom'];

              $partsClean = $row['partsClean'];
              $partsRack = $row['partsRack'];
              $partsAccess = $row['partsAccess'];
              $partsLadder = $row['partsLadder'];
              $partsEgress = $row['partsEgress'];
              $partsLight = $row['partsLight'];
              $partsCom = $row['partsCom'];

              $yardSurface = $row['yardSurface'];
              $yardEven = $row['yardEven'];
              $yardStore = $row['yardStore'];
              $yardCombust = $row['yardCombust'];
              $yardGates = $row['yardGates'];
              $yardUnlocked = $row['yardUnlocked'];
              $yardAccess = $row['yardAccess'];
              $yardLit = $row['yardLit'];
              $yardCom = $row['yardCom'];

              $washPressure = $row['washPressure'];
              $washClean = $row['washClean'];
              $washChem = $row['washChem'];
              $washItems = $row['washItems'];
              $washLight = $row['washLight'];
              $washCom = $row['washCom'];


//Displays list of Non-conformities
              $list = array($eli, $pli, $rri, $air, $transOplic, $transMot, $transDriveMon, $transDriveLic, $colDriveMon, $colDriveLic,
                              $fAlarm, $fSound, $manCall, $inTest, $service, $fireTrain, $genTrain, $equipTrain, $recepRisk,
                              $wcKept, $wcRec, $brKept, $brRec, $water, $storeP, $contP, $extP, $encP, $ppeP, $ppeWear, $lightP, $gCvent, $tripP, $elecP, $sprayExt, $encSpray,
                              $doorsSpray, $ppeSpray, $ppeWearSpray, $lightSpray, $partsClean, $partsRack, $partsAccess,
                              $partsLadder, $partsEgress, $partsLight, $yardEven, $yardCombust, $yardUnlocked, $yardAccess, $yardLit, $washClean, $washChem, $washItems, $washLight);
              $noConform = array_count_values($list);
            }

                          }

function inspect() {
if (isset($_GET['bsid'])) {

    require'includes/dbh.inc.php';

    $usid = $_GET['usid'];
    $bsid = $_GET['bsid'];

    $sql = "SELECT * FROM inspection WHERE bodyshopId=".$bsid.";";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);

    if ($resultCheck > 0) {
      while ($row = mysqli_fetch_assoc($result)) {

        $inspId = $row['inspId'];
        $date = $row['date'];

echo '
    <div style="text-align:left;border:2px solid #FFFF00; border-radius:10px; padding:5px">
    <a style="color:#FFFF00">Inspection Date: <a style="color:white">'.$date.'</a></a><br><br>

    <a href="safety/inspectrep.php?usid='.$usid.'&bsid='.$bsid.'&inspid='.$inspId.'"><button class="btn88 cl8" style="width:15%">Report</button></a>
    <a href="safety/report.php?usid='.$usid.'&bsid='.$bsid.'&inspid='.$inspId.'"><button class="btn88 cl8" style="width:15%">NCs</button></a><br>
    </div>
    <br>
';
}
}
}
}

// Displays List of Non-Confomities And Action Plan In Report.php
function nonConform() {
require'dbh.inc.php';

$bsid = $_GET['bsid'];
$inspId = $_GET['inspid'];
$sql = "SELECT * FROM inspection WHERE inspId='$inspId';";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

if ($resultCheck > 0) {
  while ($row = mysqli_fetch_assoc($result)) {



    $dateInsp = $row['date'];
    $insp = $row['inspector'];
    $attend = $row['attendee'];

    $eli = $row['eli'];
    $eliExp = $row['eliExp'];
    $eliCom = $row['eliCom'];
    $pli = $row['pli'];
    $pliExp = $row['pliExp'];
    $pliCom = $row['pliCom'];
    $rri = $row['rri'];
    $rriExp = $row['rriExp'];
    $rriCom = $row['rriCom'];
    $air = $row['air'];
    $airCom = $row['airCom'];

    if ($eli == 'No') {
      echo '<div style="text-align:left; border: 2px solid #FFFF00; padding: 5px;">
            <label style="color:#FFFF00">Q 2.1: Employers Liability Insurance in date?</label><br>
            <label style="color:white">A: '.$eli.'</label><br><br>
            <a style="color:white">Action: Employers Liability Insurance must be in date and on display.</a>
            </div><br>';
    }

    if ($pli == 'No') {
      echo   '<div style="text-align:left; border: 2px solid #FFFF00; padding: 5px;">
              <label style="color:#FFFF00">Q 2.3: Public Liability Insurance in date?</label><br>
              <label style="color:white">A: '.$pli.'</label><br><br>
              <a style="color:white">Action: Public Liability Insurance must be in date and on display.</a>
              </div><br>';
    }

    if ($rri == 'No') {
      echo   '<div style="text-align:left; border: 2px solid #FFFF00; padding: 5px;">
              <label style="color:#FFFF00">Q 2.5: Road Risks Insurance in date?</label><br>
              <label style="color:white">A: '.$pli.'</label><br><br>
              <a style="color:white">Action: Road Risks Insurance must be in date and made available for inspection.</a>
              </div><br>';
    }

    if ($air == 'No') {
      echo '<div style="text-align:left; border: 2px solid #FFFF00; padding: 5px;">
            <label style="color:#FFFF00">Q 2.7: Accidents/ Incidents Log Book available?</label><br>
            <label style="color:white">A: '.$air.'</label><br><br>
            <a style="color:white">Action: An Accidents/ Incidents log book should be maintained and made available. Any accident or "near-miss" incident which occurs should be recorded.</a>
            </div><br>';
    }

}
}
}

function jobDesc(){
  require'dbh.inc.php';

  $idBodyshop = $_GET['bsid'];

  $sql = "SELECT * FROM customer WHERE bodyshopId=".$idBodyshop.";";
  $result = mysqli_query($conn, $sql);
  $resultCheck = mysqli_num_rows($result);

  if ($resultCheck > 0) {
    while ($row = mysqli_fetch_assoc($result)) {

      $custBsid = $row['bodyshopId'];
      $custBs = $row['bodyshop'];

      if (file_exists('clients/'.$custBsid.'_'.$custBs.'/'.$custBsid.'_jobdesc')) {

                $uploads = scandir('clients/'.$custBsid.'_'.$custBs.'/'.$custBsid.'_jobdesc');
                $forbiddenChars = array(".", "_");

                foreach($uploads as $uploads){
                 $firstChar = substr($uploads, 0, 1);
                 if(in_array($firstChar, $forbiddenChars)){
                  continue;
                 }

                    echo '<br><a href="clients/'.$custBsid.'_'.$custBs.'/'.$custBsid.'_jobdesc/'.$uploads.'" target="_blank" rel="noopener noreferrer"><button class="btn88 cl8">'.substr($uploads, 0).'</button></a><br/><br/>';
                }
      }

      }
    }
}

}


?>
