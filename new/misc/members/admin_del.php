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
                            
                <h1 style="color:#FFFF00"><i class="far fa-file-alt"></i></i> <b>Delete Reports</b></h1>
                    <div class="card">
                        <form action='includes/deletefile.inc.php' method='post'>
                            <input type="text" name="filename" placeholder="Seperate each name with a comma (,)">
                                <br><br>

                                    <?php
                                        $dirpath = "uploads";
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
                                <select type="text" name="filename"><option>Select a file...</option><?php echo $report; ?></select>
                                <br><br>
                            <button type='submit' name='delete' class='btn2 lnk'>Delete File</button>
                        </form>
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