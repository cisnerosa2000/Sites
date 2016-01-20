<?php

if ($_GET['id'] && $_GET['direction']) {
	$direction = $_GET['direction'];
	$id = $_GET['id'];
}
else {
	die('malformed url');
}


$servername = "172.25.49.119";
$username = "cisnerosa";
$password = "listentothesoundofmyvoice";
$dbname = "mobiledatabase";




$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


$modifier = 0;

if ($direction == 'UP') { 
    $modifier += 1;
} else if ($direction == 'DOWN') {
	$modifier -= 1;
}


$get_score = "SELECT score FROM posts WHERE id = '". $id ."';";
$score_query = mysqli_query($conn, $get_score);

while($score=mysqli_fetch_assoc($score_query)) {
	$final_score = $score['score'];
}
$final_score++;
$update_score_query = "UPDATE posts SET score = " . $final_score . " WHERE id = '". $id ."';";

$last_query = mysqli_query($conn,$update_score_query);

if (!$last_query){
	echo "false";
	echo mysqli_connect_error();
}
mysqli_close($conn);

	
	
?>