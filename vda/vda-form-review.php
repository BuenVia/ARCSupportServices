<?php
    require 'header.php';
    require 'includes/form.inc.php';
?>

<div class="container-fluid">
    <div class="row">

        <div class="col-sm-2"></div>
        
        <div class="col-sm-8">

            <form action="vda-photo.php" method="post" class="vdaform">
            <!--FORM DETAILS-->
            <div class="group">
                <h1>Form Details</h1>
                    <div class="vda-group">
                        <label>Form No.</label>
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
                <h1>Customer Details</h1>
                    <div class="vda-group">
                        <label>Claim No.</label>

                        <span class="res"><?php echo $claim ?></span>

                    </div>
                    <div class="vda-group">
                        <label>Policy Number</label>

                        <span class="res"><?php echo $policy ?></span>

                    </div>
                    <div class="vda-group">
                        <label>Customer Surname.</label>
                        <span class="res"><?php echo $sname ?></span>
                    </div>
                    <div class="vda-group">
                        <label>Customer Firstname.</label>
                        <span class="res"><?php echo $fname ?></span>
                    </div>
            </div>


            <div class="group">
                <h1>Address Details</h1>
                <div class="vda-group">
                    <label>Street Address</label>

                </div>
                <div class="vda-group">
                    <label>Town</label>

                </div>

                <div class="vda-group">
                    <label>County</label>

                </div>
                <div class="vda-group">
                    <label>Postcode</label>

                </div>
                <div class="vda-group">
                    <label>Phone Number</label>

                </div>
            </div>
            
    <div class="group">
        <h1>Claim Details</h1>
        <div class="vda-group">
            <label>Claim No.</label>

        </div>
        <div class="vda-group">
            <label>Policy Number</label>

        </div>
        <div class="vda-group">
            <label>Vehicle Location</label>

        </div>
        <div class="vda-group">
            <label>Date of Loss</label>

        </div>
    </div>

    <div class="group">
        <h1>Vehicle Details</h1>
        <div class="vda-group">
            <label>Registration Number</label>

        </div>
        <div class="vda-group">
            <label>Make</label>

        </div>
        <div class="vda-group">
            <label>Model</label>

        </div>
        <div class="vda-group">
            <label>Mileage</label>

        </div>

        <div class="vda-group">
            <label>VIN</label>

        </div>

        <div class="vda-group">
            <label>ADAS</label>
  
        </div>
    </div>


    <div class="group">
        <h1>Vehicle Condition</h1>
        <div class="vda-group">
            <label>Tyres</label>
   
        </div>

        <div class="vda-group">
            <label>Brakes</label>

        </div>

        <div class="vda-group">
            <label>Steering</label>
  
        </div>

        <div class="vda-group">
            <label>Pre-Accident</label>
     
        </div>

        <div class="vda-group">
            <label>Paint</label>
     
        </div>

        <div class="vda-group">
            <label>Colour</label>
  
        </div>

        <div class="vda-group">
            <label>Body Style</label>
     
        </div>

        <div class="vda-group">
            <label>Vehicle Status</label>
 
        </div>
    </div>

    <div class="group">
        <h1>Tyre Condition</h1>
        <div class="vda-group">
            <label>NSF Tyre</label>
     
        </div>

        <div class="vda-group">
            <label>OSF Tyre</label>
     
        </div>

        <div class="vda-group">
            <label>NSR Tyre</label>
   
        </div>

        <div class="vda-group">
            <label>OSR Tyre</label>
    
        </div>
    </div>


                <input type="submit" class="btn1">
            </form>
        </div>

        <div class="col-sm-2"></div>

    </div>
</div>


<?php
    require 'footer.php';
?>