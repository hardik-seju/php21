<?php
// echo "this is submit bmi page";
// bmi = weight / meter * meter 
// var_dump($_POST);
extract($_POST);
$foot_inch = 12 * $height_foot ;
echo "this is foot to inch ".$foot_inch;
$total_inch = $foot_inch + $height_inch;
echo "<br>this is total inch ".$total_inch;
$meter = $total_inch / 39.37;
echo "<br>this is meter ".$meter;
$bmi = $weight / ($meter * $meter);

echo "<br>this is bmi ".$bmi;
  echo '<br><br>';
  
if($bmi<18.5)
{
    echo 'The Weight is Underweight';
}
else if($bmi>18.5 && $bmi<24.9)
{
    echo 'The Weight is Normalweight';

}
else if($bmi>25 && $bmi<29.9)
{
    echo 'The Weight is Overweight';

}
else if($bmi>31)
{
    echo 'The Weight is Obese';

}
?>