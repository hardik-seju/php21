<?php
require_once ("connection.php");

try
{
    
     $name = "sagar";
     $city="sihor";
     $course ="laravel";
     $gender = 1;
     $name ="rajaaa";
     $sql = "update student set name=?,city=?,gender=?,course=? where name = ? ";
     $statement = $db->prepare($sql);
     $statement -> bindparam(1,$name);
     $statement -> bindparam(2,$city);
     $statement -> bindparam(3,$gender);
     $statement -> bindparam(4,$course);
     $statement -> bindparam(5,$name);
     $statement->execute();
     echo "Record updated successfully";
}
catch(PDOException $error)
{
     echo $error;
}
?>
