<?php


require_once 'db.php';

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	// getting posted data
	$data = json_decode(file_get_contents("php://input", true));
	
	$sql = "INSERT INTO customer(first_name,last_name, dob, age, email) 
    VALUES('" . mysqli_real_escape_string($dbConnection, $data->first_name) . "',
     '" . mysqli_real_escape_string($dbConnection, $data->last_name) . "',
     '" . mysqli_real_escape_string($dbConnection, $data->dob) . "',
     '" . mysqli_real_escape_string($dbConnection, $data->age) . "',
     '" . mysqli_real_escape_string($dbConnection, $data->email) . "')";
	dbQuery($sql);
}

