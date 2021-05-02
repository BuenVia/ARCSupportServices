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
                            <option value="" disabled selected>Select</option>
                            <option value="yes">As New</option>
                            <option value="no">Excellent</option>
                            <option value="yes">Fair</option>
                            <option value="no">Good</option>
                            <option value="yes">Poor</option>
                        </select>      
                    </div>

                    <div class="vda-group">
                        <label>Brakes</label>
                        <select class="form-select form-select-sm" name="brakes" id="">
                            <option value="" readonly>Select</option>
                            <option value="yes">Yes</option>
                            <option value="no">No</option>
                        </select>      
                    </div>

                    <div class="vda-group">
                        <label>Steering</label>
                        <select class="form-select form-select-sm" name="steering" id="">
                            <option value="" readonly>Select</option>
                            <option value="yes">Yes</option>
                            <option value="no">No</option>
                        </select>      
                    </div>

                    <div class="vda-group">
                        <label>Pre-Accident</label>
                        <select class="form-select form-select-sm" name="preAcc" id="">
                            <option value="" readonly>Select</option>
                            <option value="yes">Yes</option>
                            <option value="no">No</option>
                        </select>      
                    </div>

                    <div class="vda-group">
                        <label>Paint</label>
                        <select class="form-select form-select-sm" name="paint" id="">
                            <option value="" readonly>Select</option>
                            <option value="yes">Yes</option>
                            <option value="no">No</option>
                        </select>      
                    </div>

                    <div class="vda-group">
                        <label>Colour</label>
                        <select class="form-select form-select-sm" name="colour" id="">
                            <option value="" readonly>Select</option>
                            <option value="yes">Yes</option>
                            <option value="no">No</option>
                        </select>      
                    </div>

                    <div class="vda-group">
                        <label>Body Style</label>
                        <select class="form-select form-select-sm" name="body" id="">
                            <option value="" readonly>Select</option>
                            <option value="yes">Yes</option>
                            <option value="no">No</option>
                        </select>      
                    </div>

                    <div class="vda-group">
                        <label>Vehicle Status</label>
                        <select class="form-select form-select-sm" name="vehStatus" id="">
                            <option value="" readonly>Select</option>
                            <option value="yes">Yes</option>
                            <option value="no">No</option>
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