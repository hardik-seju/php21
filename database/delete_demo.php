<?php
require_once("connection.php");
$id=2;
try
{
     $sql = "delete from student where id = ? ";
     $statement =$db->prepare($sql);
     $statement->bindparam(1,$id);
     $statement->execute();
     echo "Delete Successfully ";
}
catch(PDOException $error )
{
     echo "error ";
}
?>