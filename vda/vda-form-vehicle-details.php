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
                <h1>Vehicle Details</h1>
                <div class="vda-group">
                    <label>Registration Number</label>
                    <input class="form-control" type="text" name="reg" placeholder="Registration" value="<?php echo $reg ?>">
                </div>
                <div class="vda-group">
                    <label>Make</label>
                    <input class="form-control" type="text" name="make" placeholder="Make" value="<?php echo $make ?>"> 
                </div>
                <div class="vda-group">
                    <label>Model</label>
                    <input class="form-control" type="text" name="model" placeholder="Model" value="<?php echo $model ?>"> 
                </div>
                <div class="vda-group">
                    <label>Mileage</label>
                    <input class="form-control" type="text" name="miles" placeholder="Mileage" value="<?php echo $miles ?>"> 
                </div>

                <div class="vda-group">
                    <label>VIN</label>
                    <input class="form-control" type="text" name="vin" placeholder="VIN" value="<?php echo $vin ?>"> 
                </div>

                <div class="vda-group">
                    <label>ADAS</label>
                    <select class="form-select form-select-sm" name="adas" id="">
                        <?php selectRes($adas) ?>
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                    </select>      
                </div>

                <button formaction="includes/vda.inc.php?formId=<?php echo $form?>&bsid=<?php echo $bsid?>" class="btn88 cl8" name="vda-vehicle-details-submit">Submit</button>
                <button formaction="vda-form-review.php?formId=<?php echo $form?>&bsid=<?php echo $bsid?>" class="btn88 cl8">Back</button>

            </div>
    </div>


            </form>
        </div>

        <div class="col-sm-2"></div>

    </div>
</div>


<?php
    require 'footer.php';
?>