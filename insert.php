<?php
if (!empty($_POST)){
	
	//Connect to MySQL
	$mysqli = new mysqli('mysql.hostinger.com','u789404973_root','root11','u789404973_pool');
	
	//check if connected
	if($mysqli->connect_error){
		die('Connect Error: ' .$mysqli->connect_errno . ': ' . $mysqli->connect_error);
	}
	
	//inserts data
	$sql = "INSERT INTO picks ( name, favTeam, pick1, games1, pick2, games2, pick3, games3, pick4, games4, pick5, games5, pick6, games6, pick7, games7, pick8, games8 ) 
	VALUES ('{$mysqli->real_escape_string($_POST['name'])}', '{$mysqli->real_escape_string($_POST['favTeam'])}', '{$mysqli->real_escape_string($_POST['pick1'])}', '{$mysqli->real_escape_string($_POST['games1'])}', '{$mysqli->real_escape_string($_POST['pick2'])}', '{$mysqli->real_escape_string($_POST['games2'])}', '{$mysqli->real_escape_string($_POST['pick3'])}', '{$mysqli->real_escape_string($_POST['games3'])}', '{$mysqli->real_escape_string($_POST['pick4'])}', '{$mysqli->real_escape_string($_POST['games4'])}', '{$mysqli->real_escape_string($_POST['pick5'])}', '{$mysqli->real_escape_string($_POST['games5'])}', '{$mysqli->real_escape_string($_POST['pick6'])}', '{$mysqli->real_escape_string($_POST['games6'])}', '{$mysqli->real_escape_string($_POST['pick7'])}', '{$mysqli->real_escape_string($_POST['games7'])}', '{$mysqli->real_escape_string($_POST['pick8'])}', '{$mysqli->real_escape_string($_POST['games8'])}' )";
	$insert = $mysqli->query($sql);
	
	//print response from MySQL
	if ( $insert ){
		echo "success! your picks have been selected -- Row ID: {$mysqli->insert_id}<br />";
		echo "<a href=\"submit.html\">Click here to return to submit page</a>";
	}
	else{
		die("Error: {$mysqli->errno} : {$mysqli->error}");
	}
	
	//close connection
	$mysqli->close();
}
?>
