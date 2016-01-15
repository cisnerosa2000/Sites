<?php

if ($_GET["city"] && $_GET["state"]) {
	$city = $_GET["city"];
	$state = $_GET["state"];
} else {
	die("Malformed Url");
}

$servername = "71.90.87.107";
$username = "cisnerosa";
$password = "listentothesoundofmyvoice";
$dbname = "mobiledatabase";


$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$query = "SELECT * FROM posts WHERE city = '". $city."' AND state = '".$state."';";
$result = mysqli_query($conn, $query);

while($row=mysqli_fetch_assoc($result)) {
	echo "[".$row['score'].",'".$row["user"]."','".$row["content"]."','". $row["timestamp"]."','". $row['id'] ."'] <br>";
}


mysqli_close($conn);
	
?>

<html>
<head>
	<title>SQL Query</title>
</head>
<body>

	
    
</body>
<html>



