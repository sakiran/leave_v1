<?php

$servername = "mariadb";
$username = "root";
$password = "adminpassword";

// Create connection
$conn = mysqli_connect($servername, $username, $password);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Create database

$sql = "CREATE DATABASE IF NOT EXISTS `dbleave` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci";
if (mysqli_query($conn, $sql)) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . mysqli_error($conn);
}

mysqli_close($conn);


?>

<?php
$mysql_host = "mariadb";
$mysql_database = "dbleave";
$mysql_user = "root";
$mysql_password = "adminpassword";
# MySQL with PDO_MYSQL
$db = new PDO("mysql:host=$mysql_host;dbname=$mysql_database", $mysql_user, $mysql_password);

$query = file_get_contents("leave.sql");

$stmt = $db->prepare($query);

if ($stmt->execute())
     echo "Success";
else
     echo "Fail";

     ?>
