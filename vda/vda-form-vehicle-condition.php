<?php
    require 'header.php';
    require 'includes/form.inc.php';
?>

<div class="container-fluid">
    <div class="row">

        <div class="col-sm-2"></div>
        
        <div class="col-sm-8">

            <form action="" method="post" class="vdaform">

                <div class="group">
                    <h1>Vehicle Condition</h1>
                    <div class="vda-group">
                        <label>Tyres</label>
                        <select class="form-select form-select-sm" name="tyres" id="">
                            <?php selectRes($tyres) ?>
                            <option value="As New">As New</option>
                            <option value="Excellent">Excellent</option>
                            <option value="Fair">Fair</option>
                            <option value="Good">Good</option>
                            <option value="Poor">Poor</option>
                        </select>      
                    </div>

                    <div class="vda-group">
                        <label>Brakes</label>
                        <select class="form-select form-select-sm" name="brakes" id="">
                            <?php selectRes($brakes) ?>
                            <option value="Satisfactory">Satisfactory</option>
                            <option value="Untestable">Untestable</option>
                            <option value="Not Satisfactory">Not Satisfactory</option>
                        </select>      
                    </div>

                    <div class="vda-group">
                        <label>Steering</label>
                        <select class="form-select form-select-sm" name="steering" id="">
                            <?php selectRes($steering) ?>
                            <option value="Satisfactory">Satisfactory</option>
                            <option value="Untestable">Untestable</option>
                            <option value="Not Satisfactory">Not Satisfactory</option>
                        </select>      
                    </div>

                    <div class="vda-group">
                        <label>Pre-Accident</label>
                        <select class="form-select form-select-sm" name="preAcc" id="">
                            <?php selectRes($preAcc) ?>
                            <option value="As New">As New</option>
                            <option value="Excellent">Excellent</option>
                            <option value="Fair">Fair</option>
                            <option value="Good">Good</option>
                            <option value="Poor">Poor</option>
                        </select>      
                    </div>

                    <div class="vda-group">
                        <label>Paint</label>
                        <select class="form-select form-select-sm" name="paint" id="">
                            <?php selectRes($paint) ?>
                            <option value="Solid COB">Solid COB</option>
                            <option value="Metallic COB">Metallic COB</option>
                            <option value="Pearl Mica">Pearl Mica</option>
                            <option value="3 Stage Pearl">3 Stage Pearl</option>
                            <option value="4 Stage Pearl">4 Stage Pearl</option>
                        </select>      
                    </div>

                    <div class="vda-group">
                        <label>Colour</label>
                        <select class="form-select form-select-sm" name="colour" id="">
                            <?php selectRes($colour) ?>
                            <option value="White">White</option>
                            <option value="Black">Black</option>
                            <option value="Blue">Blue</option>
                            <option value="Red">Red</option>
                            <option value="Yellow">Yellow</option>
                            <option value="Green">Green</option>
                            <option value="Orange">Orange</option>
                            <option value="Grey">Grey</option>
                        </select>      
                    </div>

                    <div class="vda-group">
                        <label>Body Style</label>
                        <select class="form-select form-select-sm" name="body" id="">
                            <?php selectRes($body) ?>
                            <option value="Saloon">Saloon</option>
                            <option value="Hatchback">Hatchback</option>
                            <option value="Estate">Estate</option>
                            <option value="Coupe">Coupe</option>
                            <option value="Convertible">Convertible</option>
                            <option value="Pick Up">Pick Up</option>
                            <option value="Van">Van</option>
                            <option value="Minibus">Minibus</option>
                        </select>      
                    </div>

                    <div class="vda-group">
                        <label>Vehicle Status</label>
                        <select class="form-select form-select-sm" name="vehStatus" id="">
                            <?php selectRes($vehStatus) ?>
                            <option value="Mobile">Mobile</option>
                            <option value="Roadworthy">Roadworthy</option>
                            <option value="Unroadworthy">Unroadworthy</option>
                        </select>      
                    </div>

                    <button formaction="includes/vda.inc.php?formId=<?php echo $form?>&bsid=<?php echo $bsid?>" class="btn88 cl8" name="vda-vehicle-condition-submit">Submit</button>
                    <button formaction="vda-form-review.php?formId=<?php echo $form?>&bsid=<?php echo $bsid?>" class="btn88 cl8">Back</button>
                </div>

            </form>
        </div>

        <div class="col-sm-2"></div>

    </div>
</div>


<?php
    require 'footer.php';
?>