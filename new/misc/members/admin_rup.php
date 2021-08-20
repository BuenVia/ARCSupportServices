<?php
    require 'header.php';
?>

    <div class="background4">
        <div class="container">
            <div class="row">
    
<?php
    require 'admin_cpan.php';
?>
    
    <div class="column-33">
        <div class="contactcard2" style="width:100%">
            <div class="cardcontainer">
    
                <h1 style="color:#FFFF00"><i class="far fa-file-alt"></i></i> <b>Upload Reports</b></h1>
                
                <?php
                
                if (isset($_GET['success'])) {
                    echo 'Uploaded Successfully';
                }
                
                ?>
                
                    <div class="card">
                        <body>
    
                        <form action="includes/upload.inc.php" method="POST" enctype="multipart/form-data">
                            
                            <h4>Select Client</h4>
                            <?php
                                $dirpath = "clients";
                                $report = "";
                                if(is_dir($dirpath)) {
                                    $files = opendir ($dirpath);
                                    if ($files) {
                                        while (($filereport=readdir($files)) != false) {
                                            if ($filereport != "." && $filereport !="..")
                                            {
                                                $report = $report."<option>$filereport</option>";
                                            }
                                        }
                                    }
                                }
                            ?>
                            <select type="text" name="client"><option>Select a client...</option><?php echo $report; ?></select>
                            <br><br>
                            <input type="file" name="file">
                            <br><br>
                            <button type="submit" name="submit" class="btn2 lnk">Upload</button>
                        </form>
                    
                        </body>
                    </div>
    
            </div>
        </div>
    </div>
                            
            </div>
        </div>
    </div>


<?php
    require'footer.php';
?>