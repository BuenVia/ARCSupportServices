<?php

$curdir = getcwd();

if(mkdir($curdir ."/uploads/test" , 0777)) {
    echo "Directory has been created successfully...";
} else {
    echo "Failed to create directory...";
}

?>