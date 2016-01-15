<?php
if ($_GET['pass'] && $_GET['id']) {
	$pass = $_GET['pass'];
	$id = $_GET['id']
}
else {
	die("malformed url");
}

$servername = "71.90.87.107";
$username = "cisnerosa";
$password = "listentothesoundofmyvoice";
$dbname = "mobiledatabase";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


$query = "SELECT hash FROM posts WHERE id = '".$id ."';";

$old_hash = mysql_fetch_assoc(mysqli_query($conn,$query));
$new_hash = crypt($pass);



	
	
	
	
	
	
	
	
	
	
	
?>