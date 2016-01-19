<?php
if ($_GET['pass'] && $_GET['user']) {
	$pass = $_GET['pass'];
	$user = $_GET['user'];
}
else {
	die("malformed url");
}

$servername = "172.25.49.119";
$username = "cisnerosa";
$password = "listentothesoundofmyvoice";
$dbname = "mobiledatabase";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


$query = "SELECT hash FROM users WHERE username = '".$user ."';";

$old_hash = mysql_fetch_assoc(mysqli_query($conn,$query));
$new_hash = crypt($pass);

if ($old_hash == $new_hash) {
	echo "Success!";
} else {
	echo "Failure!";
}



	
	
	
	
	
	
	
	
	
	
	
?>