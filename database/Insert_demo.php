<?php
require_once ("connection.php");

try{
    $sql="insert into student(name,city,gender,course) values ('raj','daman',1,'maths')";
    $statement =$db->prepare($sql);
     $statement->bindparam(1,$name);
     $statement->bindparam(2,$city);
     $statement->bindparam(3,$gender);
     $statement->bindparam(4,$course);
     $statement->execute();
     echo "Data added";

}
catch(PDOException $error)
{
    echo "error";
}
?>