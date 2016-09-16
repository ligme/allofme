<?php
$con = mysql_connect("mysql12.000webhost.com", "a2520077_Moses", "kavishe2015", "a2520077_FoodOda");

	$name = $_POST["fname"];
	$age = $_POST["sname"];
	$username = $_POST["username"];
	$password = $_POST["password"];
	$rpassword = $_POST["rpassword"];


	$statement= mysqli_prepare($con, "INSERT INTO user (fname, sname, username, password, rpassword) VALUES (?, ?, ?, ?)");
	mysqli_stmt_blind_param($statement, "siss", $name, $age, $username, $password);
	mysql_stmmt_execute($statement);

	$response = array();
	$response["success"] = true;

	echo json_encode($response);
?>