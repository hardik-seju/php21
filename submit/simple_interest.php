<?php

// var_dump($_POST);
extract($_POST);

$ans = ($principal * $rate * $year) / 100;
echo 'the simple intrest is '.$ans;


// $principal = $_POST['principal'];

// $rate = $_POST=['rate'];

// $year = $_POST=['year'];

// echo $si = ($principal * $rate * $year )/100;

// echo 'the simple intrest is '.$si;
?>