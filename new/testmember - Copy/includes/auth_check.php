<?php

if (!isset($_SESSION['user'])) {
    header ("Location: /testmember/index.php");
}

?>
