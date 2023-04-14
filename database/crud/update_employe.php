<?php
session_start();
require_once("..//connection.php");
extract($_POST);
var_dump($_POST);
try
{
     $sql = "update employe set name=?,email=?,doj=?,gender=? where id =?";
     $stat = $db->prepare($sql);
     $stat->bindparam(1,$name);
     $stat->bindparam(2,$email);
     $stat->bindparam(3,$doj);
     $stat->bindparam(4,$gender);
     $stat->bindparam(5,$id);
     $stat->execute();
     $_SESSION['message'] = "Employee Updated Successfully";
     header("location:crud.php");
}
catch(PDOException $error)
{
     echo $error;
}

?>
