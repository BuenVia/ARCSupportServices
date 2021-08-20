<?php
    require 'header.php';
?>

<?php
    require 'includes/dbh.inc.php';
?>

<!DOCTYPE hmtl>
<html>
    <head>
        <title></title>
    </head>
    <body>
        
        <?php
            $sql = "SELECT * FROM memberlist;";
            $result = mysqli_query($conn, $sql);
            
            if ($row = mysqli_fetch_assoc($result)) {
                    
                        echo $result . '<br>';
            }
        ?>
        
    </body>
</html>