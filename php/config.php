<?php
header('Access-Control-Allow-Origin: *');
$host     = 'mariadb';
$username = 'root';
$password = 'adminpassword';
$database = 'dbleave';
$dbconfig = mysqli_connect($host, $username, $password, $database);
?>
