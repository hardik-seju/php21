<?php
session_start();
require_once("../connection.php");

try
{
    $sql="delete from employe where id=?";
$statement=$db->prepare($sql);
$statement->bindparam(1,$_REQUEST['id']);
$statement->execute();

$_SESSION['message']='Record deleted';
header("location:crud.php");
}
catch(PDOException $error)
{
    echo $error;
}
?>