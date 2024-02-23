<?php
$server ="localhost";
$username ="root";
$password = "";
$database ="users";

$conn = new mysqli($server, $username, $password, $database);
if(!$conn)
{

    die("ERROR UNKNOWN");
}
?>