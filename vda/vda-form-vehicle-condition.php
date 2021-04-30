<?php
    require 'header.php';
?>

<div class="container-fluid">
    <div class="row">

        <div class="col-sm-2"></div>
        
        <div class="col-sm-8">

            <form action="vda-form-tyres.php" method="post" class="vdaform">

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
                        <select class="form-select form-select-sm" name="" id="">
                            <option value="" readonly>Select</option>
                            <option value="yes">Yes</option>
                            <option value="no">No</option>
                        </select>      
                    </div>

                    <div class="vda-group">
                        <label>Steering</label>
                        <select class="form-select form-select-sm" name="" id="">
                            <option value="" readonly>Select</option>
                            <option value="yes">Yes</option>
                            <option value="no">No</option>
                        </select>      
                    </div>

                    <div class="vda-group">
                        <label>Pre-Accident</label>
                        <select class="form-select form-select-sm" name="" id="">
                            <option value="" readonly>Select</option>
                            <option value="yes">Yes</option>
                            <option value="no">No</option>
                        </select>      
                    </div>

                    <div class="vda-group">
                        <label>Paint</label>
                        <select class="form-select form-select-sm" name="" id="">
                            <option value="" readonly>Select</option>
                            <option value="yes">Yes</option>
                            <option value="no">No</option>
                        </select>      
                    </div>

                    <div class="vda-group">
                        <label>Colour</label>
                        <select class="form-select form-select-sm" name="" id="">
                            <option value="" readonly>Select</option>
                            <option value="yes">Yes</option>
                            <option value="no">No</option>
                        </select>      
                    </div>

                    <div class="vda-group">
                        <label>Body Style</label>
                        <select class="form-select form-select-sm" name="" id="">
                            <option value="" readonly>Select</option>
                            <option value="yes">Yes</option>
                            <option value="no">No</option>
                        </select>      
                    </div>

                    <div class="vda-group">
                        <label>Vehicle Status</label>
                        <select class="form-select form-select-sm" name="" id="">
                            <option value="" readonly>Select</option>
                            <option value="yes">Yes</option>
                            <option value="no">No</option>
                        </select>      
                    </div>

                    <input type="submit" class="btn1">
                </div>

            </form>
        </div>

        <div class="col-sm-2"></div>

    </div>
</div>


<?php
    require 'footer.php';
?>