<?php
include 'config.php';
session_start();
$status  = mysqli_real_escape_string($dbconfig, $_GET['status']);
$serialno  = mysqli_real_escape_string($dbconfig, $_GET['serialno']);
$sql_query = "UPDATE leavemanagement SET approvalstatus= '$status' WHERE serialno = '$serialno'";
$result    = mysqli_query($dbconfig, $sql_query);;


if (mysqli_query($dbconfig, $sql_query)) {
	#header('Location: ../www/approveclassincharge.html');
    echo "success";
} else {
    echo "Error updating record: " . mysqli_error($dbconfig);
}

?>