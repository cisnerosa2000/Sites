<?php
if (!$_GET['user'] || !$_GET['content'] || !$_GET['parent']) {
    die('Malformed Url');
} 


$servername = "172.25.49.119";
$username = "cisnerosa";
$password = "listentothesoundofmyvoice";
$dbname = "mobiledatabase";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


$parent = $_GET['parent'];
$content = $_GET['content'];
$user = $_GET['user'];
$id = uniqid();

$insert_query = "INSERT INTO comments (parent, content, user, id) VALUES ('${parent}', '${content}', '${user}', '${id}');";
$insert = mysqli_query($conn,$insert_query);

mysqli_close($conn);

if (!$insert) {
	echo "Failure!<br>";
	echo $insert_query;
} 

?>