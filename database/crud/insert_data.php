<?php
session_start();
require_once("../connection.php");


extract($_POST);

try{
    $sql="insert into employe (name,email,doj,gender) values (?,?,?,?)";
    $statement=$db->prepare($sql);
    $statement->bindparam(1,$name);
    $statement->bindparam(2,$email);
    $statement->bindparam(3,$doj);
    $statement->bindparam(4,$gender);
    $statement->execute();
    echo "Record insert successfully";
    $_SESSION['message'] = "Employee added successfully";
    header("location:crud.php");
}
catch(PDOException $error)
{
    echo $error;
}

?>