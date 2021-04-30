<?php
    require 'header.php';
?>

<div class="container-fluid">
    <div class="row">

        <div class="col-sm-2"></div>
        
        <div class="col-sm-8">

            <form action="includes/vda.inc.php" method="post" class="vdaform">

                        
                <div class="group">
                    <h1>Claim Details</h1>

                    <div class="vda-group">
                        <label>Customer Last Name</label>
                        <input class="form-control" type="text" name="sname" id="" placeholder="Customer Last Name...">
                    </div>
                    <div class="vda-group">
                        <label>Customer First Name</label>
                        <input class="form-control" type="text" name="fname" id="" placeholder="Customer First Name...">
                    </div>

                    <div class="vda-group">
                        <label>Claim Number</label>
                        <input class="form-control" type="text" name="claim" id="" placeholder="Claim...">
                    </div>
                    <div class="vda-group">
                        <label>Policy Number</label>
                        <input class="form-control" type="text" name="policy" id="" placeholder="Policy">
                    </div>

                    <input type="submit" class="btn1" name="create-submit">
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