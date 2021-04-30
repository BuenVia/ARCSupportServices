<?php
    require 'header.php';
?>

<div class="container-fluid">
    <div class="row">

        <div class="col-sm-2"></div>
        
        <div class="col-sm-8">

            <form action="includes/vda.inc.php" method="post" class="vdaform">
               
            <div class="group">
                <h1>Customer Details</h1>
                <div class="vda-group">
                    <label>Customer Suffix.</label>
                    <select class="form-select form-select-sm" name="suffix" id="">
                        <option value="" disabled selected>Select</option>
                        <option value="mr">Mr</option>
                        <option value="mrs">Mrs</option>
                    </select>
                </div>
                <div class="vda-group">
                    <label>Customer Surname.</label>
                    <input class="form-control" type="text" name="sname" id="" placeholder="Surname...">
                </div>
                <div class="vda-group">
                    <label>Customer Firstname.</label>
                    <input class="form-control" type="text" name="fname" id="" placeholder="First Name...">
                </div>

                <h1>Address Details</h1>
                <div class="vda-group">
                    <label>Street Address</label>
                    <input class="form-control" type="text" name="street" id="" placeholder="Street and Number...">
                </div>
                <div class="vda-group">
                    <label>Town</label>
                    <input class="form-control" type="text" name="town" id="" placeholder="Town...">
                </div>

                <div class="vda-group">
                    <label>County</label>
                    <input class="form-control" type="text" name="county" id="" placeholder="County...">
                </div>
                <div class="vda-group">
                    <label>Postcode</label>
                    <input class="form-control" type="text" name="postcode" id="" placeholder="Postcode...">
                </div>
                <div class="vda-group">
                    <label>Phone Number</label>
                    <input class="form-control" type="text" name="phone" id="" placeholder="Phone...">
                </div>

                <input type="submit" class="btn1" name="customer-submit">

            </div>

            </form>
        </div>

        <div class="col-sm-2"></div>

    </div>
</div>


<?php
    require 'footer.php';
?>