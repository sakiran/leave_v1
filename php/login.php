<?php
include("config.php");
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // username and password received from loginform
    //$username  = mysqli_real_escape_string($dbconfig, $_POST['username']);
    $username  = $_POST['username'];
    //$password  = mysqli_real_escape_string($dbconfig, $_POST['password']);
    $password  = $_POST['password'];
	//keerthana ' or username = 'keerthana
    $sql_query = "SELECT userid FROM usermanagement WHERE username='$username' and password='$password'";
    $result    = mysqli_query($dbconfig, $sql_query);
    $row       = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $count     = mysqli_num_rows($result); // If result matched $username and $password, table row must be 1 row
    if ($count == 1) {
        $_SESSION['username'] = $username;
        
        $sql_query_role = "SELECT role FROM usermanagement WHERE username='$username' and password='$password'";
        $result         = mysqli_query($dbconfig, $sql_query_role);
        
        $row  = mysqli_fetch_assoc($result);
        $role = $row['role'];
        echo $role;
        
    } else {
       echo "login failed";
    }
}
?>