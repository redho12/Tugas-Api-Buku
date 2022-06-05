<?php 
require_once 'index.php';

$query = "select * from buku";

$statement = $dbConn -> query($query);
$statement->setfetchMode(PDO::FETCH_OBJ);
$result = $statement->fetchALL();
header("Content-Type: application/json; charset=UTF-8");
echo json_encode($result);

// include_once 'index.php';

// $query = "select * from buku";

// $statement = $dbConn->query($query);

// $statement->setfetchMode(PDO::FETCH_OBJ);

// $result = $statement->fetchALL();

// header('Content-Type: application/json');

// echo json_encode($result);


?>