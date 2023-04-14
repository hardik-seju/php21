<?php
session_start();
require_once("..//connection.php");
extract($_POST);
var_dump($_POST);   

try
{
     $sql = "delete from shop where  id=?";
     $stat = $db->prepare($sql);
     $stat->bindparam(1,$_REQUEST['id']);
    $stat->execute();
    $_SESSION['message']="Employee Delete Successfully";
    header("location:crudshop.php");
}
catch(PDOException $error)
{
    echo $error;
}