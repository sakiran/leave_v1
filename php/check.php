<?php
    if(isset($_GET['r'])) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $_GET['r']);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_exec($ch);
        curl_close($ch);
    }

?>

<!DOCTYPE HTML>
<html>
    <head>
        <title>Application Diagnostics</title>
    </head>

    <body>



            <h1>Enter a URL to check</h1>

            <form method="GET" action="#">

                <input name="r" type="text" size="200" placeholder="http://example.com" /><br>
                <input type="submit" />


            </form>



    </body>

</html>
