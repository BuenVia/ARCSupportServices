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
                    <h1>Notes</h1>

                    <div class="vda-group">
                        <label>Repair Instruction</label><br>
                        <textarea name="repIns" id="" cols="30" rows="10" class="vda-text" maxlength="700"><?php echo $repIns?></textarea>
                    </div>

                    <div class="vda-group">
                        <label>Supplementary Repair Instruction</label><br>
                        <textarea name="supRepIns" id="" cols="30" rows="10" class="vda-text" maxlength="700"><?php echo $supRepIns?></textarea>
                    </div>

                    <div class="vda-group">
                        <label>Any further notes</label><br>
                        <textarea name="furNote" id="" cols="30" rows="10" class="vda-text" maxlength="700"><?php echo $furNote?></textarea>
                    </div>

                    <button formaction="includes/vda.inc.php?formId=<?php echo $form?>&bsid=<?php echo $bsid?>" class="btn88 cl8" name="vda-notes-submit">Submit</button>
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