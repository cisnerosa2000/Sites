<?php
<?php
if (!$_GET['parent_id']) {
	die('Malformed url');
}

$parent_id = $_GET['parent_id']

$servername = "172.25.49.119";
$username = "cisnerosa";
$password = "listentothesoundofmyvoice";
$dbname = "mobiledatabase";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$query = "SELECT * FROM comments WHERE parent = '${parent_id}';";

echo mysqli_query($query);
mysqli_close($conn);

if (!$query) {
	echo "Failure!";
}

?>