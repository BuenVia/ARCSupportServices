<?php
    require 'header.php';
    require 'includes/form.inc.php';
?>

<div class="container-fluid">
    <div class="row">

        <div class="col-sm-2"></div>
        
        <div class="col-sm-8">

            <!--FORM DETAILS-->
            <div class="group">
                <h1>Form Details</h1>
                    <div class="vda-group">
                        <label>Form No</label>
                        <span class="res"><?php echo $form ?></span>
                    </div>
                    <div class="vda-group">
                        <label>Bodyshop</label>
                        <span class="res"><?php echo $bodyshop ?></span>
                    </div>
                    <div class="vda-group">
                        <label>Bodyshop ID</label>
                        <span class="res"><?php echo $bsid ?></span>
                    </div>
                    <div class="vda-group">
                        <label>User</label>
                        <span class="res"><?php echo $user ?></span>
                    </div>
            </div>

            <!-- CUSTOMER DETAILS -->
            <div class="group">
                <h1>Customer Details</h1><?php echo sectionComplete($claim and $policy and $sname and $fname); ?>
                    <div class="vda-group">
                        <label>Claim No.</label>
                        <span class="res"><?php echo $claim ?></span>
                    </div>
                    <div class="vda-group">
                        <label>Policy Number</label>
                        <span class="res"><?php echo $policy ?></span>
                    </div>
                    <div class="vda-group">
                        <label>Date of Loss</label>
                        <span class="res"><?php echo $dateLoss ?></span>
                    </div>
                    <div class="vda-group">
                        <label>Customer Surname</label>
                        <span class="res"><?php echo $sname ?></span>
                    </div>
                    <div class="vda-group">
                        <label>Customer Firstname</label>
                        <span class="res"><?php echo $fname ?></span>
                    </div>
                    <a href="vda-form-claim.php?formId=<?php echo $form; ?>&bsid=<?php echo $bsid; ?>"><button>Edit</button></a> 
            </div>

            <!-- ADDRESS DETAILS -->
            <div class="group">
                <h1>Address Details</h1><?php echo sectionComplete($street and $town and $county and $postcode and $phone); ?>
                <div class="vda-group">
                    <label>Street Address</label>
                    <span class="res"><?php echo $street ?></span>
                </div>
                <div class="vda-group">
                    <label>Town</label>
                    <span class="res"><?php echo $town ?></span>
                </div>
                <div class="vda-group">
                    <label>County</label>
                    <span class="res"><?php echo $county ?></span>
                </div>
                <div class="vda-group">
                    <label>Postcode</label>
                    <span class="res"><?php echo $postcode ?></span>
                </div>
                <div class="vda-group">
                    <label>Phone Number</label>
                    <span class="res"><?php echo $phone ?></span>
                </div>
                <a href="vda-form-address.php?formId=<?php echo $form; ?>&bsid=<?php echo $bsid; ?>"><button>Edit</button></a> 
            </div>
            


    <div class="group">
        <h1>Vehicle Details</h1><?php echo sectionComplete($reg and $make and $model and $miles and $vin and $adas); ?>
        <div class="vda-group">
            <label>Registration Number</label>
            <span class="res"><?php echo $reg ?></span>
        </div>
        <div class="vda-group">
            <label>Make</label>
            <span class="res"><?php echo $make ?></span>
        </div>
        <div class="vda-group">
            <label>Model</label>
            <span class="res"><?php echo $model ?></span>
        </div>
        <div class="vda-group">
            <label>Mileage</label>
            <span class="res"><?php echo $miles ?></span>
        </div>

        <div class="vda-group">
            <label>VIN</label>
            <span class="res"><?php echo $vin ?></span>
        </div>

        <div class="vda-group">
            <label>ADAS</label>
            <span class="res"><?php echo $adas ?></span>
        </div>
        <a href="vda-form-vehicle-details.php?formId=<?php echo $form; ?>&bsid=<?php echo $bsid; ?>"><button>Edit</button></a> 
    </div>


    <div class="group">
        <h1>Vehicle Condition</h1><?php echo sectionComplete($tyres and $brakes and $steering and $preAcc and $paint and $colour and $body and $vehStatus); ?>
        <div class="vda-group">
            <label>Tyres</label>
            <span class="res"><?php echo $tyres ?></span>
        </div>

        <div class="vda-group">
            <label>Brakes</label>
            <span class="res"><?php echo $brakes ?></span>
        </div>

        <div class="vda-group">
            <label>Steering</label>
            <span class="res"><?php echo $steering ?></span>
        </div>

        <div class="vda-group">
            <label>Pre-Accident</label>
            <span class="res"><?php echo $preAcc ?></span>
        </div>

        <div class="vda-group">
            <label>Paint</label>
            <span class="res"><?php echo $paint ?></span>
        </div>

        <div class="vda-group">
            <label>Colour</label>
            <span class="res"><?php echo $colour ?></span>
        </div>

        <div class="vda-group">
            <label>Body Style</label>
            <span class="res"><?php echo $body ?></span>
        </div>

        <div class="vda-group">
            <label>Vehicle Status</label>
            <span class="res"><?php echo $vehStatus ?></span>
        </div>

        <a href="vda-form-vehicle-condition.php?formId=<?php echo $form; ?>&bsid=<?php echo $bsid; ?>"><button>Edit</button></a> 
    </div>

    <div class="group">
        <h1>Tyre Condition</h1><?php echo sectionComplete($nsfTyre and $osfTyre and $nsrTyre and $osrTyre); ?>
        <div class="vda-group">
            <label>NSF Tyre</label>
            <span class="res"><?php echo $nsfTyre ?></span>
        </div>

        <div class="vda-group">
            <label>OSF Tyre</label>
            <span class="res"><?php echo $osfTyre ?></span>
        </div>

        <div class="vda-group">
            <label>NSR Tyre</label>
            <span class="res"><?php echo $nsrTyre ?></span>
        </div>

        <div class="vda-group">
            <label>OSR Tyre</label>
            <span class="res"><?php echo $osrTyre ?></span>
        </div>

        <a href="vda-form-tyres.php?formId=<?php echo $form; ?>&bsid=<?php echo $bsid; ?>"><button>Edit</button></a> 
    </div>


        </div>

        <div class="col-sm-2"></div>

    </div>
</div>


<?php
    require 'footer.php';
?>