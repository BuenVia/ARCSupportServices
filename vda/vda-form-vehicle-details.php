<?php
    require 'header.php';
?>

<div class="container-fluid">
    <div class="row">

        <div class="col-sm-2"></div>
        
        <div class="col-sm-8">

            <form action="vda-form-vehicle-condition.php" method="post" class="vdaform">
               
            <div class="group">
                <h1>Vehicle Details</h1>
                <div class="vda-group">
                    <label>Registration Number</label>
                    <input class="form-control" type="text" name="reg" placeholder="Registration">
                </div>
                <div class="vda-group">
                    <label>Make</label>
                    <input class="form-control" type="text" name="make" placeholder="Make"> 
                </div>
                <div class="vda-group">
                    <label>Model</label>
                    <input class="form-control" type="text" name="model" placeholder="Model"> 
                </div>
                <div class="vda-group">
                    <label>Mileage</label>
                    <input class="form-control" type="text" name="miles" placeholder="Mileage"> 
                </div>

                <div class="vda-group">
                    <label>VIN</label>
                    <input class="form-control" type="text" name="vin" placeholder="VIN"> 
                </div>

                <div class="vda-group">
                    <label>ADAS</label>
                    <select class="form-select form-select-sm" name="suffix" id="">
                        <option value="" disabled selected>Select</option>
                        <option value="yes">Yes</option>
                        <option value="no">No</option>
                    </select>      
                </div>

                <input type="submit" class="btn1">

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