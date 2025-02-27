<?php 
    include 'config.php';
    session_start();
    $username = $_SESSION["username"];
    $username  = mysqli_real_escape_string($dbconfig, $username);
    $sql_query = "SELECT * FROM usermanagement WHERE username='$username'";
    $result    = mysqli_query($dbconfig, $sql_query);
    $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
    print json_encode($row);
    ?>
