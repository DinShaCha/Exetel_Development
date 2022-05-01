<?php

require_once 'db.php';

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: PUT");

if ($_SERVER['REQUEST_METHOD'] === 'PUT') {
	//collecting posted data
	$data = json_decode(file_get_contents("php://input", true));
	
	$sql = "UPDATE customer 
    SET first_name = '" . mysqli_real_escape_string($dbConnection, $data->first_name) . "',
    last_name = '" . mysqli_real_escape_string($dbConnection, $data->last_name) . "',
    dob = '" . mysqli_real_escape_string($dbConnection, $data->dob) . "',
    age = '" . mysqli_real_escape_string($dbConnection, $data->age) . "',
    email = '" . mysqli_real_escape_string($dbConnection, $data->email) . "' 
    WHERE id = " . $data->id;
	dbQuery($sql); 
}
