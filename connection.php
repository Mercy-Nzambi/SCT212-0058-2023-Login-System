<?php

$dbhost ="localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "phpproject2.0";

if(!$con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname))
{
    die("failed to connect!");
}
