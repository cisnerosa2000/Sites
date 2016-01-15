<?
if ($_GET['user']) {
	$user = $_GET['user'];
} else {
	die('malformed url');
}


$servername = "71.90.87.107";
$username = "cisnerosa";
$password = "listentothesoundofmyvoice";
$dbname = "mobiledatabase";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$query = "SELECT * FROM users WHERE username = ". $user;
$query_results = mysqli_query($conn,$query);

if (mysql_num_rows($query_results) == 0) {
	echo "1";
} else {
	echo "0";
}

	
	
	
	
	
	
	
?>