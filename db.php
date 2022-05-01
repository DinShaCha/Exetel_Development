<?php
	
//creating the database connection
$dbConnection = mysqli_connect('localhost', 'root', '', 'exetel') or die('MySQL connection failed. ' . mysqli_connect_error());

function dbQuery($sql) {
	global $dbConnection;
	$result = mysqli_query($dbConnection, $sql) or die(mysqli_error($dbConnection));
	return $result;
}

// associative array
function dbFetchAssoc($result) {
	return mysqli_fetch_assoc($result);
}

//to close a previously opened database connection
function closeConn() {
	global $dbConnection;
	mysqli_close($dbConnection);
}