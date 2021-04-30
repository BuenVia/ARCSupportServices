<?php
    require 'header.php';
?>

<div class="container-fluid">
    <div class="row">

        <div class="col-sm-2"></div>
        
        <div class="col-sm-8">
            <form action="vda-form-review.php" method="post" class="vdaform">
               
                <div class="group">
                    <h1>Vehicle Details</h1>

                        <div class="vda-group">
                            <label>Repair Instruction</label><br>
                            <textarea name="" id="" cols="30" rows="10" class="vda-text"></textarea>
                        </div>

                        <div class="vda-group">
                            <label>Supplementary Repair Instruction</label><br>
                            <textarea name="" id="" cols="30" rows="10" class="vda-text"></textarea>
                        </div>

                        <div class="vda-group">
                            <label>Any further notes</label><br>
                            <textarea name="" id="" cols="30" rows="10" class="vda-text"></textarea>
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