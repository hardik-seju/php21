<?php
session_start();
require_once("..//connection.php");
// echo "Success";
extract($_POST);
 try
 {
    $sql="insert into shop (name,address,status,city,contactno,openingdate)values(?,?,?,?,?,?)";
    $state=$db->prepare($sql);
    $state->bindparam(1,$name);
    $state->bindparam(2,$address);
    $state->bindparam(3,$status);
    $state->bindparam(4,$city);
    $state->bindparam(5,$contactno);
    $state->bindparam(6,$openingdate);
    $state->execute();
    // echo "Data Insert Successfully";
    $_SESSION['message']="Data Inserted Successfully";
    header("location:crudshop.php");

 }
 catch(PDOException $error)
 {
      echo $error;
 } 

?>