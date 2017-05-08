<?php
if (!session_id()) {
    session_start();
}
if (!$_SESSION['logon']) {
    header("Location:LooksGood.php");
    die();
}
	include "SQL/connection.php";
	include "SQL/query.php";
    $id = $_SESSION['id'];
?>
<!DOCTYPE html>
<html>
<head>
		<meta charset="utf-8">
        <title>Chat</title>
        <link rel="stylesheet" type="text/css" href="css/styles.css">
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.0/jquery.min.js"></script>
        <script type="text/javascript" src="Javascript/clock.js"></script>
</head>
<body onload="getLocation()">
<script type="text/javascript" src="Javascript/enter.js"></script>
<script type="text/javascript" src="Javascript/Reload.js"></script>
<div id="map"></div>
<?php 
include "Chat.php";
include "UmEinstakling.php";
?>

    <div class="clock"></div>
    <script>
var x = document.getElementById("map");

function getLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition);
    } else { 
        x.innerHTML = "Geolocation is not supported by this browser.";
    }
}

function showPosition(position) {
    console.log(position.coords.latitude);
    console.log(position.coords.longitude);
    x.innerHTML = "Latitude: " + position.coords.latitude + 
    "<br>Longitude: " + position.coords.longitude;
}
</script>

<a href="SQL/logout.php"><button id="Takki1"><strong>Logout</strong></button></a>
<a href="SQL/changeName.html"><button id="Takki2"><strong>Change Name</strong></button></a>
<a href="SQL/changeImage.html"><button id="Takki3"><strong>Change Image</strong></button></a>
</body>
</html>