        <?php

require'dbh.inc.php';

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

                $wsWalk = $row['wsWalk'];
                $wsEgr = $row['wsEgr'];
                $wsRack = $row['wsRack'];
                $wsAcs = $row['wsAcs'];
                $wsLad = $row['wsLad'];
                $wsWeld = $row['wsWeld'];
                $wsWeldEquip = $row['wsWeldEquip'];
                $wsWeldPPE = $row['wsWeldPPE'];
                $wsSand = $row['wsSand'];
                $wsBat = $row['wsBat'];
                $wsWheel = $row['wsWheel'];
                $wsLift = $row['wsLift'];
                $wsLiftCond = $row['wsLiftCond'];
                $wsLit = $row['wsLit'];
                $wsTidy = $row['wsTidy'];
                $wsCom = $row['wsCom'];

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
                $list = array($eli, $pli, $rri, $air, $transOplic, $transMot, $transDriveMon, $transDriveLic, $colDriveMon, $colDriveLic, $fAlarm, $fSound, $manCall, $inTest, $service,
                $fireTrain, $genTrain, $equipTrain, $recepRisk, $wcKept, $wcRec, $brKept, $brRec,
                $water,
                $wsWalk, $wsEgr, $wsRack, $wsAcs, $wsLad, $wsWeld, $wsWeldEquip, $wsWeldPPE, $wsSand, $wsBat, $wsWheel, $wsLift, $wsLiftCond, $wsLit, $wsTidy,
                $storeP, $contP, $extP, $encP, $ppeP, $ppeWear, $lightP, $gCvent,
                $tripP, $elecP, $sprayExt, $encSpray,
                                $doorsSpray, $ppeSpray, $ppeWearSpray, $lightSpray, $partsClean, $partsRack, $partsAccess,
                                $partsLadder, $partsEgress, $partsLight, $yardEven, $yardCombust, $yardUnlocked, $yardAccess, $yardLit, $washClean, $washChem, $washItems, $washLight);
                $noConform = array_count_values($list);
              }

                            }

function inspect() {
  if (isset($_GET['bsid'])) {

      require'../includes/dbh.inc.php';

      $bsid = $_GET['bsid'];

      $sql = "SELECT * FROM inspection WHERE bodyshopId=".$bsid.";";
      $result = mysqli_query($conn, $sql);
      $resultCheck = mysqli_num_rows($result);

      if ($resultCheck > 0) {
        while ($row = mysqli_fetch_assoc($result)) {

          $inspId = $row['inspId'];
          $date = $row['date'];

echo '
      <a style="color:#FFFF00">Inspection ID: <a style="color:white">'.$inspId.'</a></a>
      <a style="color:#FFFF00">Inspection Date: <a style="color:white">'.$date.'</a></a><br>
      <a href="checklist/checklist.php?bsid='.$bsid.'&inspid='.$inspId.'"><button class="btn88 cl8" style="width:15%">Edit</button></a>
      <a href="inspectrep.php?bsid='.$bsid.'&inspid='.$inspId.'"><button class="btn88 cl8" style="width:15%">Report</button></a>
      <a href="report.php?bsid='.$bsid.'&inspid='.$inspId.'"><button class="btn88 cl8" style="width:15%">NCs</button></a><br><br>
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
      $pli = $row['pli'];
      $pliExp = $row['pliExp'];
      $rri = $row['rri'];
      $rriExp = $row['rriExp'];
      $air = $row['air'];

      if ($eli == 'No') {
        echo '<div style="text-align:left; border: 2px solid #FFFF00; padding: 5px;">
              <label style="color:#FFFF00">Q 2.1: Employers Liability Insurance in date?</label><br>
              <label style="color:white">A: '.$eli.'</label><br>
              <a style="color:white">Action: Employers Liability Insurance must be in date and on display.</a>
              </div><br>';
      }

      if ($pli == 'No') {
        echo   '<div style="text-align:left; border: 2px solid #FFFF00; padding: 5px;">
                <label style="color:#FFFF00">Q 2.3: Public Liability Insurance in date?</label><br>
                <label style="color:white">A: '.$pli.'</label><br>
                <a style="color:white">Action: Public Liability Insurance must be in date and on display.</a>
                </div><br>';
      }

      if ($rri == 'No') {
        echo   '<div style="text-align:left; border: 2px solid #FFFF00; padding: 5px;">
                <label style="color:#FFFF00">Q 2.5: Road Risks Insurance in date?</label><br>
                <label style="color:white">A: '.$pli.'</label><br>
                <a style="color:white">Action: Road Risks Insurance must be in date and made available for inspection.</a>
                </div><br>';
      }

      if ($air == 'No') {
        echo '<div style="text-align:left; border: 2px solid #FFFF00; padding: 5px;">
              <label style="color:#FFFF00">Q 2.7: Accidents/ Incidents Log Book available?</label><br>
              <label style="color:white">A: '.$air.'</label><br>
              <a style="color:white">Action: An Accidents/ Incidents log book should be maintained and made available. Any accident or "near-miss" incident which occurs should be recorded.</a>
              </div><br>';
      }

}
}
}

//Displays Green Tick in Checklist.php
function sectionComplete1() {
  require'dbh.inc.php';

  $bsid = $_GET['bsid'];
  $inspId = $_GET['inspid'];
  $sql = "SELECT * FROM inspection WHERE inspId=".$inspId.";";
  $result = mysqli_query($conn, $sql);
  $resultCheck = mysqli_num_rows($result);

  if ($resultCheck > 0) {
    while ($row = mysqli_fetch_assoc($result)) {

      $dateInsp = $row['date'];
      $insp = $row['inspector'];
      $attend = $row['attendee'];

                if ($dateInsp and $insp and $attend) {
                  $done = ' <a style="color:#00FF00"><i class="fas fa-check-circle"></i></a>';
                  echo $done;
                }
                else {
                  $notDone = '<a style="color:red">Incomplete...</a>';
                  echo $notDone;
                }
                }
                }
                }

function sectionComplete2() {
  require'dbh.inc.php';

  $bsid = $_GET['bsid'];
  $inspId = $_GET['inspid'];
  $sql = "SELECT * FROM inspection WHERE inspId=".$inspId.";";
  $result = mysqli_query($conn, $sql);
  $resultCheck = mysqli_num_rows($result);

  if ($resultCheck > 0) {
    while ($row = mysqli_fetch_assoc($result)) {

      $eli = $row['eli'];
      $pli = $row['pli'];
      $rri = $row['rri'];
      $air = $row['air'];

                if ($eli and $pli and $rri and $air) {
                  $done = ' <a style="color:#00FF00"><i class="fas fa-check-circle"></i></a>';
                  echo $done;
                }
                else {
                  $notDone = '<a style="color:red">Incomplete...</a>';
                  echo $notDone;
                }
                }
                }
                }

function sectionComplete3() {
  require'dbh.inc.php';

  $bsid = $_GET['bsid'];
  $inspId = $_GET['inspid'];
  $sql = "SELECT * FROM inspection WHERE inspId=".$inspId.";";
  $result = mysqli_query($conn, $sql);
  $resultCheck = mysqli_num_rows($result);

  if ($resultCheck > 0) {
    while ($row = mysqli_fetch_assoc($result)) {

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

                if ($trans and $transOplic and $transExp and $transMot and $transMotDue and $transDriveMon and $transDriveLic and $collect and $colNoDrive and $colDriveMon and $colDriveLic) {
                  $done = ' <a style="color:#00FF00"><i class="fas fa-check-circle"></i></a>';
                  echo $done;
                }
                else {
                  $notDone = '<a style="color:red">Incomplete...</a>';
                  echo $notDone;
                }
                }
                }
                }

function sectionComplete4() {
  require'dbh.inc.php';

  $bsid = $_GET['bsid'];
  $inspId = $_GET['inspid'];
  $sql = "SELECT * FROM inspection WHERE inspId=".$inspId.";";
  $result = mysqli_query($conn, $sql);
  $resultCheck = mysqli_num_rows($result);

  if ($resultCheck > 0) {
    while ($row = mysqli_fetch_assoc($result)) {

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

                if ($build and $des and $recep and $office and $toilet and $break and $workshop and $washbay and $yard and $smoke) {
                  $done = ' <a style="color:#00FF00"><i class="fas fa-check-circle"></i></a>';
                  echo $done;
                }
                else {
                  $notDone = '<a style="color:red">Incomplete...</a>';
                  echo $notDone;
                }
                }
                }
                }

function sectionComplete5() {
  require'dbh.inc.php';

  $bsid = $_GET['bsid'];
  $inspId = $_GET['inspid'];
  $sql = "SELECT * FROM inspection WHERE inspId=".$inspId.";";
  $result = mysqli_query($conn, $sql);
  $resultCheck = mysqli_num_rows($result);

  if ($resultCheck > 0) {
    while ($row = mysqli_fetch_assoc($result)) {

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

                if ($fAlarm and $fSound and $fDet and $detLoc and $manCall and $conPan and $inTest and $testDate and $service and $servDate) {
                  $done = ' <a style="color:#00FF00"><i class="fas fa-check-circle"></i></a>';
                  echo $done;
                }
                else {
                  $notDone = '<a style="color:red">Incomplete...</a>';
                  echo $notDone;
                }
                }
                }
                }

function sectionComplete6() {
  require'dbh.inc.php';

  $bsid = $_GET['bsid'];
  $inspId = $_GET['inspid'];
  $sql = "SELECT * FROM inspection WHERE inspId=".$inspId.";";
  $result = mysqli_query($conn, $sql);
  $resultCheck = mysqli_num_rows($result);

  if ($resultCheck > 0) {
    while ($row = mysqli_fetch_assoc($result)) {

      $fireTrain = $row['fireTrain'];
      $genTrain = $row['genTrain'];
      $equipTrain = $row['equipTrain'];
      $trainCom = $row['trainCom'];

                if ($fireTrain and $genTrain and $equipTrain) {
                  $done = ' <a style="color:#00FF00"><i class="fas fa-check-circle"></i></a>';
                  echo $done;
                }
                else {
                  $notDone = '<a style="color:red">Incomplete...</a>';
                  echo $notDone;
                }
                }
                }
                }

function sectionComplete7() {
  require'dbh.inc.php';

  $bsid = $_GET['bsid'];
  $inspId = $_GET['inspid'];
  $sql = "SELECT * FROM inspection WHERE inspId=".$inspId.";";
  $result = mysqli_query($conn, $sql);
  $resultCheck = mysqli_num_rows($result);

  if ($resultCheck > 0) {
    while ($row = mysqli_fetch_assoc($result)) {

      $recepLoc = $row['recepLoc'];
      $recepRisk = $row['recepRisk'];
      $recepCom = $row['recepCom'];

                if ($recepLoc and $recepRisk) {
                  $done = ' <a style="color:#00FF00"><i class="fas fa-check-circle"></i></a>';
                  echo $done;
                }
                else {
                  $notDone = '<a style="color:red">Incomplete...</a>';
                  echo $notDone;
                }
                }
                }
                }

function sectionComplete8() {
  require'dbh.inc.php';

  $bsid = $_GET['bsid'];
  $inspId = $_GET['inspid'];
  $sql = "SELECT * FROM inspection WHERE inspId=".$inspId.";";
  $result = mysqli_query($conn, $sql);
  $resultCheck = mysqli_num_rows($result);

  if ($resultCheck > 0) {
    while ($row = mysqli_fetch_assoc($result)) {

      $wcLoc = $row['wcLoc'];
      $wcKept = $row['wcKept'];
      $wcRec = $row['wcRec'];
      $brLoc = $row['brLoc'];
      $brKept = $row['brKept'];
      $brRec = $row['brRec'];
      $water = $row['water'];
      $restCom = $row['restCom'];

                if ($wcLoc and $wcKept and $wcRec and $brLoc and $brKept and $brRec and $water) {
                  $done = ' <a style="color:#00FF00"><i class="fas fa-check-circle"></i></a>';
                  echo $done;
                }
                else {
                  $notDone = '<a style="color:red">Incomplete...</a>';
                  echo $notDone;
                }
                }
                }
                }

function sectionComplete9() {
  require'dbh.inc.php';

  $bsid = $_GET['bsid'];
  $inspId = $_GET['inspid'];
  $sql = "SELECT * FROM inspection WHERE inspId=".$inspId.";";
  $result = mysqli_query($conn, $sql);
  $resultCheck = mysqli_num_rows($result);

  if ($resultCheck > 0) {
    while ($row = mysqli_fetch_assoc($result)) {

      $wsWalk = $row['wsWalk'];
      $wsEgr = $row['wsEgr'];
      $wsRack = $row['wsRack'];
      $wsAcs = $row['wsAcs'];
      $wsLad = $row['wsLad'];
      $wsWeld = $row['wsWeld'];
      $wsWeldEquip = $row['wsWeldEquip'];
      $wsWeldPPE = $row['wsWeldPPE'];
      $wsSand = $row['wsSand'];
      $wsBat = $row['wsBat'];
      $wsWheel = $row['wsWheel'];
      $wsLift = $row['wsLift'];
      $wsLiftCond = $row['wsLiftCond'];
      $wsLit = $row['wsLit'];
      $wsTidy = $row['wsTidy'];
      $wsCom = $row['wsCom'];

                if ($wsWalk and $wsEgr and $wsRack and $wsAcs and $wsLad and $wsWeld and $wsWeldEquip and $wsWeldPPE and $wsSand and $wsBat and $wsWheel and $wsLift and $wsLiftCond and $wsLit and $wsTidy) {
                  $done = ' <a style="color:#00FF00"><i class="fas fa-check-circle"></i></a>';
                  echo $done;
                }
                else {
                  $notDone = '<a style="color:red">Incomplete...</a>';
                  echo $notDone;
                }
                }
                }
                }

function sectionComplete10() {
  require'dbh.inc.php';

  $bsid = $_GET['bsid'];
  $inspId = $_GET['inspid'];
  $sql = "SELECT * FROM inspection WHERE inspId=".$inspId.";";
  $result = mysqli_query($conn, $sql);
  $resultCheck = mysqli_num_rows($result);

  if ($resultCheck > 0) {
    while ($row = mysqli_fetch_assoc($result)) {

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

                if ($noPmix and $storeP and $contP and $extP and $pLEV and $encP and $ppeP and $ppeProv and $ppeWear and $lightP and $gunClean and $gCvent and $gCLEV and $tripP and $elecP) {
                  $done = ' <a style="color:#00FF00"><i class="fas fa-check-circle"></i></a>';
                  echo $done;
                }
                else {
                  $notDone = '<a style="color:red">Incomplete...</a>';
                  echo $notDone;
                }
                }
                }
                }

function sectionComplete11() {
  require'dbh.inc.php';

  $bsid = $_GET['bsid'];
  $inspId = $_GET['inspid'];
  $sql = "SELECT * FROM inspection WHERE inspId=".$inspId.";";
  $result = mysqli_query($conn, $sql);
  $resultCheck = mysqli_num_rows($result);

  if ($resultCheck > 0) {
    while ($row = mysqli_fetch_assoc($result)) {

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

                if ($noSpray and $sprayExt and $sprayLEV and $encSpray and $doorsSpray and $ppeSpray and $ppeProvSpray and $ppeWearSpray and $lightSpray) {
                  $done = ' <a style="color:#00FF00"><i class="fas fa-check-circle"></i></a>';
                  echo $done;
                }
                else {
                  $notDone = '<a style="color:red">Incomplete...</a>';
                  echo $notDone;
                }
                }
                }
                }

function sectionComplete12() {
  require'dbh.inc.php';

  $bsid = $_GET['bsid'];
  $inspId = $_GET['inspid'];
  $sql = "SELECT * FROM inspection WHERE inspId=".$inspId.";";
  $result = mysqli_query($conn, $sql);
  $resultCheck = mysqli_num_rows($result);

  if ($resultCheck > 0) {
    while ($row = mysqli_fetch_assoc($result)) {

      $partsClean = $row['partsClean'];
      $partsRack = $row['partsRack'];
      $partsAccess = $row['partsAccess'];
      $partsLadder = $row['partsLadder'];
      $partsEgress = $row['partsEgress'];
      $partsLight = $row['partsLight'];
      $partsCom = $row['partsCom'];

                if ($partsClean and $partsRack and $partsAccess and $partsLadder and $partsEgress and $partsLight) {
                  $done = ' <a style="color:#00FF00"><i class="fas fa-check-circle"></i></a>';
                  echo $done;
                }
                else {
                  $notDone = '<a style="color:red">Incomplete...</a>';
                  echo $notDone;
                }
                }
                }
                }

function sectionComplete13() {
  require'dbh.inc.php';

  $bsid = $_GET['bsid'];
  $inspId = $_GET['inspid'];
  $sql = "SELECT * FROM inspection WHERE inspId=".$inspId.";";
  $result = mysqli_query($conn, $sql);
  $resultCheck = mysqli_num_rows($result);

  if ($resultCheck > 0) {
    while ($row = mysqli_fetch_assoc($result)) {

      $yardSurface = $row['yardSurface'];
      $yardEven = $row['yardEven'];
      $yardStore = $row['yardStore'];
      $yardCombust = $row['yardCombust'];
      $yardGates = $row['yardGates'];
      $yardUnlocked = $row['yardUnlocked'];
      $yardAccess = $row['yardAccess'];
      $yardLit = $row['yardLit'];
      $yardCom = $row['yardCom'];

                if ($yardSurface and $yardEven and $yardStore and $yardCombust and $yardGates and $yardUnlocked and $yardAccess and $yardLit) {
                  $done = ' <a style="color:#00FF00"><i class="fas fa-check-circle"></i></a>';
                  echo $done;
                }
                else {
                  $notDone = '<a style="color:red">Incomplete...</a>';
                  echo $notDone;
                }
                }
                }
                }

function sectionComplete14() {
  require'dbh.inc.php';

  $bsid = $_GET['bsid'];
  $inspId = $_GET['inspid'];
  $sql = "SELECT * FROM inspection WHERE inspId=".$inspId.";";
  $result = mysqli_query($conn, $sql);
  $resultCheck = mysqli_num_rows($result);

  if ($resultCheck > 0) {
    while ($row = mysqli_fetch_assoc($result)) {

      $washPressure = $row['washPressure'];
      $washClean = $row['washClean'];
      $washChem = $row['washChem'];
      $washItems = $row['washItems'];
      $washLight = $row['washLight'];
      $washCom = $row['washCom'];

                if ($washPressure and $washClean and $washChem and $washItems and $washLight) {
                  $done = ' <a style="color:#00FF00"><i class="fas fa-check-circle"></i></a>';
                  echo $done;
                }
                else {
                  $notDone = '<a style="color:red">Incomplete...</a>';
                  echo $notDone;
                }
                }
                }
                }

              }
              ?>
