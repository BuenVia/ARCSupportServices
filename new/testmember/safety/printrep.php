<?php
    require'../memberheader.php';
?>

<div class="mod" style="border:2px solid #FFFF00; border-radius:10px; padding:10px">
    <div class="modhead" style="text-align:center">
          <h1 style="color:#FFFF00"><i class="far fa-file-alt"></i></i> <b>Inspection Report</b></h1>

<div class="row">
          <div class="column" style="text-align:left">
              <label style="color:#FFFF00">Bodyshop: <a style="color:white"><?php echo $bodyShop; ?></a></label><br>
              <label style="color:#FFFF00">Bodyshop ID: <a style="color:white"><?php echo $idBodyshop; ?></a></label><br>
          </div>

          <div class="column" style="text-align:left">
              <label style="color:#FFFF00">Date: <a style="color:white"><?php echo $date; ?></a></label><br>
              <label style="color:#FFFF00">Inspection ID: <a style="color:white"><?php echo $inspId; ?></a></label><br>
          </div>
</div>

          <h2 style="color:white"><i class="fas fa-wrench"></i> <b>No. of non-conformities: <a style="color:red"><b><u><?php echo $noConform['No'] ?></b></u></a></b></h1>
    </div>
      <div class="modcontainer">

        <div class="mod" style="border:2px solid #FFFF00; border-radius:10px; padding:10px">
                  <h2 style="color:#FFFF00"><i class="far fa-file-alt"></i></i> <b>1. General Information</b></h1>
                    <label style="color:#FFFF00">1.1 Date of inspection.</label><br>
                    <label style="color:white">A <?php echo $dateInsp ?></label><br>
                    <label style="color:#FFFF00">1.2 Name of inspector.</label><br>
                    <label style="color:white">A <?php echo $insp ?></label><br>
                    <label style="color:#FFFF00">1.3 Name of attendees.</label><br>
                    <label style="color:white">A <?php echo $attend ?></label><br>
                    <label style="color:#FFFF00">Additional Comments.</label><br>
                    <label style="color:white">A <?php echo $genCom ?></label><br>
      </div><br>



        <div class="mod" style="border:2px solid #FFFF00; border-radius:10px; padding:10px">
                    <h2 style="color:#FFFF00"><i class="far fa-file-alt"></i></i> <b>2. Documentation</b></h1>
                    <label style="color:#FFFF00">Q 2.1 Employers Liability Insurance in date?</label><br>
                    <label style="color:white">A <?php echo $eli ?></label><br>
                    <label style="color:#FFFF00">Q 2.2 Expiry Date</label><br>
                    <label style="color:white">A <?php echo $eliExp ?></label><br>
                    <label style="color:#FFFF00">Q 2.3 Public Liability Insurance in date?</label><br>
                    <label style="color:white">A <?php echo $pli ?></label><br>
                    <label style="color:#FFFF00">Q 2.4 Expiry Date</label><br>
                    <label style="color:white">A <?php echo $pliExp ?></label><br>
                    <label style="color:#FFFF00">Q 2.5 Road Risks Insurance in date?</label><br>
                    <label style="color:white">A <?php echo $rri ?></label><br>
                    <label style="color:#FFFF00">Q 2.6 Expiry Date</label><br>
                    <label style="color:white">A <?php echo $rriExp ?></label><br>
                    <label style="color:#FFFF00">Q 2.7 Accidents/ Incidents Log Book available?</label><br>
                    <label style="color:white">A <?php echo $air ?></label><br>
                    <label style="color:#FFFF00">Additional comments</label><br>
                    <label style="color:white">A <?php echo $docCom ?></label><br>
          </div><br>

        <div class="mod" style="border:2px solid #FFFF00; border-radius:10px; padding:10px">
                  <h2 style="color:#FFFF00"><i class="far fa-file-alt"></i></i> <b>3. Off-Site Activities</b></h1>
                  <label style="color:#FFFF00">3.1 Transporter Vehicle used?</label><br>
                  <label style="color:white">A <?php echo $trans ?></label><br>
                  <label style="color:#FFFF00">3.2 Operating license available?</label><br>
                  <label style="color:white">A <?php echo $transOplic ?></label><br>
                  <label style="color:#FFFF00">3.3 Expiry Date</label><br>
                  <label style="color:white">A <?php echo $transExp ?></label><br>
                  <label style="color:#FFFF00">3.4 MOT up-to-date?</label><br>
                  <label style="color:white">A <?php echo $transMot ?></label><br>
                  <label style="color:#FFFF00">3.5 MOT due date</label><br>
                  <label style="color:white">A <?php echo $transMotDue ?></label><br>
                  <label style="color:#FFFF00">3.6 Drivers are monitored annually?</label><br>
                  <label style="color:white">A <?php echo $transDriveMon ?></label><br>
                  <label style="color:#FFFF00">3.7 Drivers license on file and updated annually?</label><br>
                  <label style="color:white">A <?php echo $transDriveLic ?></label><br>
                  <label style="color:#FFFF00">3.8 Collection and Delivery service used?</label><br>
                  <label style="color:white">A <?php echo $collect ?></label><br>
                  <label style="color:#FFFF00">3.9 Number of drivers used?</label><br>
                  <label style="color:white">A <?php echo $colNoDrive ?></label><br>
                  <label style="color:#FFFF00">3.10 Drivers are monitored annually?</label><br>
                  <label style="color:white">A <?php echo $colDriveMon ?></label><br>
                  <label style="color:#FFFF00">3.11 Drivers license on file and updated annually?</label><br>
                  <label style="color:white">A <?php echo $colDriveLic ?></label><br>
                  <label style="color:#FFFF00">Additional comments</label><br>
                  <label style="color:white">A <?php echo $colCom ?></label><br>
      </div><br>

<div class="mod" style="border:2px solid #FFFF00; border-radius:10px; padding:10px">
        <h2 style="color:#FFFF00"><i class="far fa-file-alt"></i></i> <b>4. On-Site Activities</b></h1>
        <label style="color:#FFFF00">4.1 Number of buildings?</label><br>
        <label style="color:white">A <?php echo $build ?></label><br>
        <label style="color:#FFFF00">4.2 Description of site</label><br>
        <label style="color:white">A <?php echo $des ?></label><br>
        <label style="color:#FFFF00">4.3 Designated reception area?</label><br>
        <label style="color:white">A <?php echo $recep ?></label><br>
        <label style="color:#FFFF00">4.4 Number of office areas?</label><br>
        <label style="color:white">A <?php echo $office ?></label><br>
        <label style="color:#FFFF00">4.5 Number of toilet areas?</label><br>
        <label style="color:white">A <?php echo $toilet ?></label><br>
        <label style="color:#FFFF00">4.6 Number of break rooms?</label><br>
        <label style="color:white">A <?php echo $break ?></label><br>
        <label style="color:#FFFF00">4.7 Number of workshops?</label><br>
        <label style="color:white">A <?php echo $workshop ?></label><br>
        <label style="color:#FFFF00">4.8 Number of washaby areas?</label><br>
        <label style="color:white">A <?php echo $washbay ?></label><br>
        <label style="color:#FFFF00">4.9 Yard on site?</label><br>
        <label style="color:white">A <?php echo $yard ?></label><br>
        <label style="color:#FFFF00">4.10 Designated smoking area?</label><br>
        <label style="color:white">A <?php echo $smoke ?></label><br>
        <label style="color:#FFFF00">Additional comments</label><br>
        <label style="color:white">A <?php echo $facCom ?></label><br>
</div><br>

<div class="mod" style="border:2px solid #FFFF00; border-radius:10px; padding:10px">
      <h2 style="color:#FFFF00"><i class="far fa-file-alt"></i></i> <b>5. Fire Safety</b></h1>
      <label style="color:#FFFF00">5.1 Is there a fire alarm for the site?</label><br>
      <label style="color:white">A <?php echo $fAlarm ?></label><br>
      <label style="color:#FFFF00">5.2 Does the fire alarm have sounders?</label><br>
      <label style="color:white">A <?php echo $fSound ?></label><br>
      <label style="color:#FFFF00">5.3 Does the fire alarm have detection?</label><br>
      <label style="color:white">A <?php echo $fDet ?></label><br>
      <label style="color:#FFFF00">5.4 Where is the detection located?</label><br>
      <label style="color:white">A <?php echo $detLoc ?></label><br>
      <label style="color:#FFFF00">5.5 Are there manual call points on site?</label><br>
      <label style="color:white">A <?php echo $manCall ?></label><br>
      <label style="color:#FFFF00">5.6 Where is the main control panel located?</label><br>
      <label style="color:white">A <?php echo $conPan ?></label><br>
      <label style="color:#FFFF00">5.7 Do they perform an internal test at least once per month?</label><br>
      <label style="color:white">A <?php echo $inTest ?></label><br>
      <label style="color:#FFFF00">5.8 Date of last internal test.</label><br>
      <label style="color:white">A <?php echo $testDate ?></label><br>
      <label style="color:#FFFF00">5.9 Is there an annual service by a 3rd party company?</label><br>
      <label style="color:white">A <?php echo $service ?></label><br>
      <label style="color:#FFFF00">5.10 Date of service.</label><br>
      <label style="color:white">A <?php echo $servDate ?></label><br>
      <label style="color:#FFFF00">Additional Comments.</label><br>
      <label style="color:white">A <?php echo $fireCom ?></label><br>

</div><br>

<div class="mod" style="border:2px solid #FFFF00; border-radius:10px; padding:10px">
      <h2 style="color:#FFFF00"><i class="far fa-file-alt"></i></i> <b>6. Training</b></h1>
        <label style="color:#FFFF00">6.1 All staff have been trained in fire safety?</label><br>
        <label style="color:white">A <?php echo $fireTrain ?></label><br>
        <label style="color:#FFFF00">6.2 All staff have been trained in general safety?</label><br>
        <label style="color:white">A <?php echo $genTrain ?></label><br>
        <label style="color:#FFFF00">6.3 All staff have been trained in using equipment correctly?</label><br>
        <label style="color:white">A <?php echo $equipTrain ?></label><br>
        <label style="color:#FFFF00">Additional Comments.</label><br>
        <label style="color:white">A <?php echo $trainCom ?></label><br>
</div><br>

<div class="mod" style="border:2px solid #FFFF00; border-radius:10px; padding:10px">
      <h2 style="color:#FFFF00"><i class="far fa-file-alt"></i></i> <b>7. Reception</b></h1>
        <label style="color:#FFFF00">7.1 Where is the reception located?</label><br>
        <label style="color:white">A <?php echo $recepLoc ?></label><br>
        <label style="color:#FFFF00">7.2 Reception area is tidy and free from any significant risks?</label><br>
        <label style="color:white">A <?php echo $recepRisk ?></label><br>
        <label style="color:#FFFF00">Additional Comments.</label><br>
        <label style="color:white">A <?php echo $recepCom ?></label><br>
</div><br>

<div class="mod" style="border:2px solid #FFFF00; border-radius:10px; padding:10px">
      <h2 style="color:#FFFF00"><i class="far fa-file-alt"></i></i> <b>8. Rest Facilities</b></h1>
        <label style="color:#FFFF00">8.1 W/C location(s)?</label><br>
        <label style="color:white">A <?php echo $wcLoc ?></label><br>
        <label style="color:#FFFF00">8.2 W/C well kept?</label><br>
        <label style="color:white">A <?php echo $wcKept ?></label><br>
        <label style="color:#FFFF00">8.3 W/C cleaning records available?</label><br>
        <label style="color:white">A <?php echo $wcRec ?></label><br>
        <label style="color:#FFFF00">8.4 Break Room location(s)?</label><br>
        <label style="color:white">A <?php echo $brLoc ?></label><br>
        <label style="color:#FFFF00">8.5 Break Room well kept?</label><br>
        <label style="color:white">A <?php echo $brKept ?></label><br>
        <label style="color:#FFFF00">8.6 Break Room cleaning records available?</label><br>
        <label style="color:white">A <?php echo $brRec ?></label><br>
        <label style="color:#FFFF00">8.7 Drinking water available?</label><br>
        <label style="color:white">A <?php echo $water ?></label><br>
        <label style="color:#FFFF00">Additional Comments.</label><br>
        <label style="color:white">A <?php echo $restCom ?></label><br>
</div><br>

<div class="mod" style="border:2px solid #FFFF00; border-radius:10px; padding:10px">
        <h1 style="color:#FFFF00"><i class="far fa-file-alt"></i></i> <b>10. Paint Mix</b></h1>

      <label style="color:#FFFF00">10.1 Number of paint mix rooms?</label><br>
      <label style="color:white">A <?php echo $noPmix ?></label><br>

      <label style="color:#FFFF00">10.2 Paints are suitably stored?</label><br>
      <label style="color:white">A <?php echo $storeP ?></label><br>

      <label style="color:#FFFF00">10.3 Paints in suitable containers and covered?</label><br>
      <label style="color:white">A <?php echo $contP ?></label><br>

      <label style="color:#FFFF00">10.4 Extraction system in place an operating?</label><br>
      <label style="color:white">A <?php echo $extP ?></label><br>

      <label style="color:#FFFF00">10.5 Last LEV test.</label><br>
      <label style="color:white">A <?php echo $pLEV ?></label><br>

      <label style="color:#FFFF00">10.6 Mix room is enclosd, with doors always shut?</label><br>
      <label style="color:white">A <?php echo $encP ?></label><br>

      <label style="color:#FFFF00">10.7 Suitable PPE provided for staff?</label><br>
      <label style="color:white">A <?php echo $ppeP ?></label><br>

      <label style="color:#FFFF00">10.8 List PPE provided?</label><br>
      <label style="color:white">A <?php echo $ppeProv ?></label><br>

      <label style="color:#FFFF00">10.9 Are staff wearing PPE correctly?</label><br>
      <label style="color:white">A <?php echo $ppeWear ?></label><br>

      <label style="color:#FFFF00">10.10 Lighting is suitable?</label><br>
      <label style="color:white">A <?php echo $lightP ?></label><br>

      <label style="color:#FFFF00">10.11 Gun cleaning machine in mix room?</label><br>
      <label style="color:white">A <?php echo $gunClean ?></label><br>

      <label style="color:#FFFF00">10.12 Gun cleaning ventilation in operation?</label><br>
      <label style="color:white">A <?php echo $gCvent ?></label><br>

      <label style="color:#FFFF00">10.13 Last gun cleaning machine LEV test date.</label><br>
      <label style="color:white">A <?php echo $gCLEV ?></label><br>

      <label style="color:#FFFF00">10.14 Area is free from trip hazards?</label><br>
      <label style="color:white">A <?php echo $tripP ?></label><br>

      <label style="color:#FFFF00">10.15 Area is free from unesseccary eletrical items?</label><br>
      <label style="color:white">A <?php echo $elecP ?></label><br>

      <label style="color:#FFFF00">Additional Comments.</label><br>
      <label style="color:white">A <?php echo $paintCom ?></label><br>
</div><br>

<div class="mod" style="border:2px solid #FFFF00; border-radius:10px; padding:10px">
      <h2 style="color:#FFFF00"><i class="far fa-file-alt"></i></i> <b>11. Spray Booth</b></h1>

        <label style="color:#FFFF00">11.1 Number of spray booths?</label><br>
        <label style="color:white">A <?php echo $noSpray ?></label><br>

        <label style="color:#FFFF00">11.2 Extraction system in place an operating?</label><br>
        <label style="color:white">A <?php echo $sprayExt ?></label><br>

        <label style="color:#FFFF00">11.3 Last LEV test.</label><br>
        <label style="color:white">A <?php echo $sprayLEV ?></label><br>

        <label style="color:#FFFF00">11.4 Spray booth is enclosd, with doors always shut?</label><br>
        <label style="color:white">A <?php echo $encSpray ?></label><br>

        <label style="color:#FFFF00">11.5 Doors open and close correctly?</label><br>
        <label style="color:white">A <?php echo $doorsSpray ?></label><br>

        <label style="color:#FFFF00">11.6 Suitable PPE provided for staff?</label><br>
        <label style="color:white">A <?php echo $ppeSpray ?></label><br>

        <label style="color:#FFFF00">11.7 List PPE provided?</label><br>
        <label style="color:white">A <?php echo $ppeProvSpray ?></label><br>

        <label style="color:#FFFF00">11.8 Are staff wearing PPE correctly?</label><br>
        <label style="color:white">A <?php echo $ppeWearSpray ?></label><br>

        <label style="color:#FFFF00">11.9 Lighting is suitable?</label><br>
        <label style="color:white">A <?php echo $lightSpray ?></label><br>

        <label style="color:#FFFF00">Additional Comments.</label><br>
        <label style="color:white">A <?php echo $sprayCom ?></label><br>
</div><br>

<div class="mod" style="border:2px solid #FFFF00; border-radius:10px; padding:10px">
      <h2 style="color:#FFFF00"><i class="far fa-file-alt"></i></i> <b>12. Parts Storage</b></h1>

        <label style="color:#FFFF00">12.1 Parts Storage is clean and tidy?</label><br>
        <label style="color:white">A <?php echo $partsClean ?></label><br>

        <label style="color:#FFFF00">12.2 Suitable racking and shelving is used?</label><br>
        <label style="color:white">A <?php echo $partsRack ?></label><br>

        <label style="color:#FFFF00">12.3 All items are easily accessible, with suitable ladders provided where needed?</label><br>
        <label style="color:white">A <?php echo $partsAccess ?></label><br>

        <label style="color:#FFFF00">12.4 Any ladders used are in good condition?</label><br>
        <label style="color:white">A <?php echo $partsLadder ?></label><br>

        <label style="color:#FFFF00">12.5 Suitable access and egress, which is unblocked?</label><br>
        <label style="color:white">A <?php echo $partsEgress ?></label><br>

        <label style="color:#FFFF00">12.6 Lighting is suitable?</label><br>
        <label style="color:white">A <?php echo $partsLight ?></label><br>

        <label style="color:#FFFF00">Additional Comments.</label><br>
        <label style="color:white">A <?php echo $partsCom ?></label><br>
</div><br>

<div class="mod" style="border:2px solid #FFFF00; border-radius:10px; padding:10px">
      <h2 style="color:#FFFF00"><i class="far fa-file-alt"></i></i> <b>13. Yard</b></h1>

        <label style="color:#FFFF00">13.1 Type of surface?</label><br>
        <label style="color:white">A <?php echo $yardSurface ?></label><br>

        <label style="color:#FFFF00">13.2 Is surface sufficently even and free of potholes?</label><br>
        <label style="color:white">A <?php echo $yardEven ?></label><br>

        <label style="color:#FFFF00">13.3 What is stored in the yard?</label><br>
        <label style="color:white">A <?php echo $yardStore ?></label><br>

        <label style="color:#FFFF00">13.4 Free from unnecessary combustibles?</label><br>
        <label style="color:white">A <?php echo $yardCombust ?></label><br>

        <label style="color:#FFFF00">13.5 How many gates leading off-site?</label><br>
        <label style="color:white">A <?php echo $yardGates ?></label><br>

        <label style="color:#FFFF00">13.6 Gates are unlocked during the day?</label><br>
        <label style="color:white">A <?php echo $yardUnlocked ?></label><br>

        <label style="color:#FFFF00">13.7 Access and egress is unblocked?</label><br>
        <label style="color:white">A <?php echo $yardAccess ?></label><br>

        <label style="color:#FFFF00">13.8 Area is well lit?</label><br>
        <label style="color:white">A <?php echo $yardLit ?></label><br>

        <label style="color:#FFFF00">Additional Comments.</label><br>
        <label style="color:white">A <?php echo $yardCom ?></label><br>
</div><br>

<div class="mod" style="border:2px solid #FFFF00; border-radius:10px; padding:10px">
      <h2 style="color:#FFFF00"><i class="far fa-file-alt"></i></i> <b>14 Washbay</b></h1>

        <label style="color:#FFFF00">14.1 Pressure washer used?</label><br>
        <label style="color:white">A <?php echo $washPressure ?></label><br>

        <label style="color:#FFFF00">14.2 Washbay is clean and tidy?</label><br>
        <label style="color:white">A <?php echo $washClean ?></label><br>

        <label style="color:#FFFF00">14.3 Cleaning chemicals lidded and stored?</label><br>
        <label style="color:white">A <?php echo $washChem ?></label><br>

        <label style="color:#FFFF00">14.4 Washbay cleaning items are in good condition?</label><br>
        <label style="color:white">A <?php echo $washItems ?></label><br>

        <label style="color:#FFFF00">14.5 Lighting is suitable?</label><br>
        <label style="color:white">A <?php echo $washLight ?></label><br>

        <label style="color:#FFFF00">Additional Comments.</label><br>
        <label style="color:white">A <?php echo $washCom ?></label><br>
</div><br>

        <br><br>
      </div>
    </div>
