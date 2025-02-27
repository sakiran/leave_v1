<?php
include 'config.php';
session_start();
$sql_query = "SELECT * FROM leavemanagement";
$result    = mysqli_query($dbconfig, $sql_query);
while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
    
    $var[] = $row;
    
}

echo json_encode($var);
?>