<?php
    require 'header.php';
?>

<div class="container-fluid">
    <div class="row">

        <div class="col-sm-2"></div>
        
        <div class="col-sm-8">

            <form action="vda-form-vehicle-details.php" method="post" class="vdaform">

                        
                <div class="group">
                    <h1>Claim Details</h1>
                    <div class="vda-group">
                        <label>Claim No.</label>
                        <input class="form-control" type="text" name="claim" id="" placeholder="Claim...">
                    </div>
                    <div class="vda-group">
                        <label>Policy Number</label>
                        <input class="form-control" type="text" name="policy" id="" placeholder="Policy">
                    </div>
                    <div class="vda-group">
                        <label>Vehicle Location</label>
                        <input class="form-control" type="text" name="loc" id="" placeholder="Location...">
                    </div>
                    <div class="vda-group">
                        <label>Date of Loss</label>
                        <input class="form-control" type="date" name="dateLoss" id="">
                    </div>
                    <input type="submit" class="btn1" name="claim-submit">
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