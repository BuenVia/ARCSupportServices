<?php

$servername = "mysql1.clarahost.co.uk";
$dBUsername = "membersdb";
$dBPassword = "admiral";
$dBName = "membersdb";

$conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);

if (!$conn) {
    die("Connection failed: ".mysqli_connect_error());
}
