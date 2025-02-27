<?php
include 'config.php';
session_start();
$username  = $_SESSION["username"];
$username  = mysqli_real_escape_string($dbconfig, $username);
$sql_query = "SELECT * FROM leavemanagement WHERE username='$username'";
$result    = mysqli_query($dbconfig, $sql_query);
while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
    
    $var[] = $row;
    
}

echo json_encode($var);
?>