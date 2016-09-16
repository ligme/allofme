<?php
$con = mysql_connect("mysql11.000webhost.com", "a1187286_Moses", "kavishe2015", "a1187286_FudOda");

	$username = $_POST["username"];
	$password = $_POST["password"];

	$statement= mysqli_prepare($con, "SELECT * FROM user where username= ?");
	mysqli_stmt_blind_param($statement, "ss", $username, $password);
	mysql_stmmt_execute($statement);

	myssqli_stmt_store_result($statement);
	mysqli_stmt_blind_result($statement, $userID, $name, $age, $username, $password);

	$response = array();
	$response["success"] = false;

	while(mysqli_stmt_fetch($statement)){
		$response["success"] = true;
		$response["name"] = $name;
		$response["age"] = $age;
		$response["username"] = $username;
		$response["password"] = $password;
		//$response["success"] = true;

	}

	echo json_encode($response);
?>