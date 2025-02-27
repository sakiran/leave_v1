<?php 
    include 'config.php';
    session_start();
    $username = $_SESSION["username"];
    $serialno = time();
    $serialno = $username . $serialno ;
    $serialno = mysqli_real_escape_string($dbconfig, $serialno);
    $username  = mysqli_real_escape_string($dbconfig, $username);
    $department  = mysqli_real_escape_string($dbconfig, $_POST['department']);
    $fromdate  = mysqli_real_escape_string($dbconfig, $_POST['fromdate']);
    $todate  = mysqli_real_escape_string($dbconfig, $_POST['todate']);
    $reasonforleave  = mysqli_real_escape_string($dbconfig, $_POST['reasonforleave']);
    $contactnumber  = mysqli_real_escape_string($dbconfig, $_POST['phonenumber']);
    $approvalstatus = "pending with class incharge";
    $sql_query = "INSERT INTO leavemanagement (serialno,username, department, fromdate, todate,reason,contactnumber,approvalstatus) VALUES ('$serialno','$username', '$department', '$fromdate', '$todate', '$reasonforleave', '$contactnumber', '$approvalstatus')";

if (mysqli_query($dbconfig, $sql_query)) {
    echo "success";
} else {
    echo "Error: " . $sql_query . "<br>" . mysqli_error($conn);
}

    ?>
