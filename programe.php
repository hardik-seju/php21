<?php
$a=10;
$b=5;
$c= add($a,$b);

function add($a,$b)
{
    $b=3;
    return  $a+$b-$b-$a;

}

echo "A is " ,$a;
echo "<br>b is " ,$b;
echo "<br>c is " ,$c;
echo  "<br><br>";


for($i=1;$i<=5;$i++)
{
    for($j=1;$j<=$i;$j++)
    {
        echo $j;
    }
    echo "<br>";
}
echo  "<br><br>";
$a=14;

if($a%2==0)
{
    echo "Number is even";
}
else
{
    echo "Number is odd";

}

?>