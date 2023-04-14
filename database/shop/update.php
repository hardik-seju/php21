<?php
session_start();
require_once("..//connection.php");
extract($_POST);
var_dump($_POST);   

try
{
     $sql = "update shop set name=?,address=?,status=?,city=?,contactno=?,openingdate=? where id =?";
     $stat = $db->prepare($sql);
     $stat->bindparam(1,$name);
     $stat->bindparam(2,$address);
     $stat->bindparam(3,$status);
     $stat->bindparam(4,$city);
     $stat->bindparam(5,$contactno);
     $stat->bindparam(6,$openingdate);
     $stat->bindparam(7,$id);

     $stat->execute();
     $_SESSION['message'] = "Employee Updated Successfully";
     header("location:crudshop.php");
}
catch(PDOException $error)
{
     echo $error;
}


?>