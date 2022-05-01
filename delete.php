<?php

require_once 'db.php';

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: DELETE");

//removing database value depending on the id
if ($_SERVER['REQUEST_METHOD'] === 'DELETE' && isset($_GET['id'])) {
	$sql = "DELETE FROM customer WHERE id = " . mysqli_real_escape_string($dbConnection, $_GET['id']);
	dbQuery($sql);
}