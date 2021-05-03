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
                    <h1>Tyre Condition</h1>
                    <div class="vda-group">
                        <label>NSF Tyre</label>
                        <select class="form-select form-select-sm" name="nsf" id="">
                            <option value="" readonly>Select</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="+">+</option>
                        </select>      
                    </div>

                    <div class="vda-group">
                        <label>OSF Tyre</label>
                        <select class="form-select form-select-sm" name="osf" id="">
                            <option value="" readonly>Select</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="+">+</option>
                        </select>      
                    </div>

                    <div class="vda-group">
                        <label>NSR Tyre</label>
                        <select class="form-select form-select-sm" name="nsr" id="">
                            <option value="" readonly>Select</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="+">+</option>
                        </select>      
                    </div>

                    <div class="vda-group">
                        <label>OSR Tyre</label>
                        <select class="form-select form-select-sm" name="osr" id="">
                            <option value="" readonly>Select</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="+">+</option>
                        </select>      
                    </div>

                    <button formaction="includes/vda.inc.php?formId=<?php echo $form?>&bsid=<?php echo $bsid?>" class="btn88 cl8" name="vda-tyres-submit">Submit</button>
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