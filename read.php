<?php

require_once 'db.php';

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET");

//fetching data from the sample table and sending them to the api request
if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])) {
	$sql = "SELECT * FROM customer WHERE id = " . mysqli_real_escape_string($dbConnection, $_GET['id']) . " LIMIT 1";
	$result = dbQuery($sql);
	
	$row = dbFetchAssoc($result);
	
	echo json_encode($row);
} else {
	$sql = "SELECT * FROM customer";
	$results = dbQuery($sql);
	
	$rows = array();
	
	while($row = dbFetchAssoc($results)) {
		$rows[] = $row;
	}
	
	echo json_encode($rows);
}
