<?php
$con = mysql_connect("mysql11.000webhost.com", "a1187286_Moses", "kavishe2015", "a1187286_FudOda");

	$name = $_POST["fname"];
	$sname = $_POST["sname"];
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