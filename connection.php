<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpassword = "";
$dbname = "phone_place";


if(!$con = mysqli_connect($dbhost,$dbuser,$dbpassword,$dbname))
{
    die("Failed to connect");
}
?>