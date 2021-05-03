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

                <h1>Address Details</h1>
                <div class="vda-group">
                    <label>Street Address</label>
                    <input class="form-control" type="text" name="street" id="" placeholder="Town..." value="<?php echo $street ?>">
                </div>
                <div class="vda-group">
                    <label>Town</label>
                    <input class="form-control" type="text" name="town" id=""  placeholder="Town..." value="<?php echo $town ?>">
                </div>

                <div class="vda-group">
                    <label>County</label>
                    <input class="form-control" type="text" name="county" id="" placeholder="County..." value="<?php echo $county ?>">
                </div>
                <div class="vda-group">
                    <label>Postcode</label>
                    <input class="form-control" type="text" name="postcode" id="" placeholder="Postcode..." value="<?php echo $postcode ?>">
                </div>
                <div class="vda-group">
                    <label>Phone Number</label>
                    <input class="form-control" type="text" name="phone" id="" placeholder="Phone..." value="<?php echo $phone ?>">
                </div>

                <button formaction="includes/vda.inc.php?formId=<?php echo $form?>&bsid=<?php echo $bsid?>" class="btn88 cl8" name="vda-address-submit">Submit</button>
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