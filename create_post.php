<?php

date_default_timezone_set('UTC');

if ($_GET["user"] || $_GET["content"] || $_GET["timestamp"] || $_GET["state"] || $_GET["city"] || $_GET["school"]) {
	$user = $_GET["user"];
	$content = $_GET["content"];
	$timestamp = date("Y-m-d");
	$state = $_GET["state"];
	$city = $_GET["city"];
	$school = $_GET["school"];
	$id = uniqid();
} else {
	die("Malformed Url");
}

$servername = "71.90.87.107";
$username = "cisnerosa";
$password = "listentothesoundofmyvoice";
$dbname = "mobiledatabase";


$conn = mysqli_connect($servername, $username, $password, $dbname);

$query = "INSERT INTO posts (user, content, timestamp, state, city, school,score, id) VALUES ( '". $user."', '".$content."', '".$timestamp."', '".$state."','".$city."', '".$school."',0,'".$id."');";
$insert = mysqli_query($conn,$query);



?>
