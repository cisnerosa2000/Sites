<?php
if ($_GET['user'] && $_GET['pass']) {
	$user = $_GET['user'];
	$pass = $_GET['pass'];
} else {
	die('Malformed url');
}

$servername = "172.25.49.119";
$username = "cisnerosa";
$password = "listentothesoundofmyvoice";
$dbname = "mobiledatabase";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$options = [
    'cost' => 8,
];
$hash = password_hash($pass,PASSWORD_BCRYPT,$options);
$id = uniqid();
$query = "INSERT INTO users (username, id, hash) VALUES ('". $user ."','". $id ."','".$hash."');";

$insert = mysqli_query($conn,$query);

if (!$insert) {
	echo "false";
}
	


mysqli_close($conn);




	
	
	
	
	
	

?>