<?php
    require 'header.php';
    require 'includes/form.inc.php';
?>

<div class="container-fluid">
    <div class="row">

        <div class="col-sm-2"></div>
        
        <div class="col-sm-8">

            <form action="" method="post" class="vdaform">

            <h1>Claim Details</h1>

                    <div class="vda-group">
                        <label>Customer Last Name</label>
                        <input class="form-control" type="text" name="sname" id="" placeholder="Customer Last Name..." value="<?php echo $sname ?>">
                    </div>
                    <div class="vda-group">
                        <label>Customer First Name</label>
                        <input class="form-control" type="text" name="fname" id="" placeholder="Customer First Name..." value="<?php echo $fname ?>">
                    </div>

                    <div class="vda-group">
                        <label>Claim Number</label>
                        <input class="form-control" type="text" name="claim" id="" placeholder="Claim..." value="<?php echo $claim ?>">
                    </div>
                    <div class="vda-group">
                        <label>Policy Number</label>
                        <input class="form-control" type="text" name="policy" id="" placeholder="Policy" value="<?php echo $policy ?>">
                    </div>

                    <div class="vda-group">
                        <label>Date of Loss</label>
                        <input class="form-control" type="date" name="dateLoss" id="" value="<?php echo $dateLoss ?>">
                    </div>




                    <button formaction="includes/vda.inc.php?formId=<?php echo $form?>&bsid=<?php echo $bsid?>" class="btn88 cl8" name="vda-claim-submit">Submit</button>
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