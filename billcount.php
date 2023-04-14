<?php
//Write A Programme to Calculate Final Electricity_Bill Based Upon Below Given Criteria...
$unit = 205;

if($unit<=100)
{
    $Total_bill = $unit * 1;
    echo 'Total bill is = '.$Total_bill;
}
else if($unit>=100 && $unit<=200)
{
    $Total_bill = $unit * 2;
    echo 'Total bill is = '.$Total_bill;
}
else if($unit>=200 && $unit<=300)
{
    $Total_bill = $unit * 3;
    echo 'Total bill is = '.$Total_bill;
}
else if($unit>=300 && $unit<=400)
{
    $Total_bill = $unit * 4;
    echo 'Total bill is = '.$Total_bill;
}
else
{
    $Total_bill = $unit * 5;
    echo 'Total bill is = '.$Total_bill;
}
?>