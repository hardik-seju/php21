<?php
require_once("connection.php");
echo "connection established...";

$sql = "Select * from student";
$statement = $db->prepare($sql);
$statement->setFetchMode(PDO::FETCH_ASSOC);
$statement->execute();
$table = $statement->fetchAll();

var_dump($table);

?>