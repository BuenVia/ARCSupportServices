<?php
    require 'header.php';
?>

<div class="container-fluid">
    <div class="row">

        <div class="col-sm-2"></div>
        
        <div class="col-sm-8">

            <form action="vda-notes.php" method="post" class="vdaform">
               
                <div class="group">
                    <h1>Tyre Condition</h1>
                    <div class="vda-group">
                        <label>NSF Tyre</label>
                        <select class="form-select form-select-sm" name="" id="">
                            <option value="" readonly>Select</option>
                            <option value="yes">Yes</option>
                            <option value="no">No</option>
                        </select>      
                    </div>

                    <div class="vda-group">
                        <label>OSF Tyre</label>
                        <select class="form-select form-select-sm" name="" id="">
                            <option value="" readonly>Select</option>
                            <option value="yes">Yes</option>
                            <option value="no">No</option>
                        </select>      
                    </div>

                    <div class="vda-group">
                        <label>NSR Tyre</label>
                        <select class="form-select form-select-sm" name="" id="">
                            <option value="" readonly>Select</option>
                            <option value="yes">Yes</option>
                            <option value="no">No</option>
                        </select>      
                    </div>

                    <div class="vda-group">
                        <label>OSR Tyre</label>
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