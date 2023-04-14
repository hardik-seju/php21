<?php
//Write a program to accept male and female person birth day and month separately and calculate the compatibility for relationship using following criteria..

$male_month = 4;
$male_date = 24;
$female_month = 4;
$female_date = 15;

if((($male_month==3 && $male_date>=21) || ($male_month==4 && $male_date<=19)) && (($female_month==3 && $female_date>=21) || ($female_month==4 && $female_date<=19)))
{
    echo 'Favourable';
}
else if((($male_month==4 && $male_date>=20) || ($male_month==5 && $male_date<=20)) && (($female_month==3 && $female_date>=21) || ($female_month==4 && $female_date<=19)))
{
    echo 'Less Favorable';
}
else if((($male_month==5 && $male_date>=21) || ($male_month==6 && $male_date<=20)) && (($female_month==3 && $female_date>=21) || ($female_month==4 && $female_date<=19)))
{
    echo 'Favorable';
}
else if((($male_month==6 && $male_date>=21) || ($male_month==7 && $male_date<=22)) && (($female_month==3 && $female_date>=21) || ($female_month==4 && $female_date<=19)))
{
    echo 'Critical';
}
else if((($male_month==7 && $male_date>=23) || ($male_month==8 && $male_date<=22)) && (($female_month==3 && $female_date>=21) || ($female_month==4 && $female_date<=19)))
{
    echo 'Favorable';
}
else if((($male_month==8 && $male_date>=23) || ($male_month==9 && $male_date<=22)) && (($female_month==3 && $female_date>=21) || ($female_month==4 && $female_date<=19)))
{
    echo 'Less Favorable';
}
else if((($male_month==9 && $male_date>=23) || ($male_month==10 && $male_date<=22)) && (($female_month==3 && $female_date>=21) || ($female_month==4 && $female_date<=19)))
{
    echo 'favorable';
}
else if((($male_month==10 && $male_date>=22) || ($male_month==11 && $male_date<=21))&& (($female_month==3 && $female_date>=21) || ($female_month==4 && $female_date<=19)))
{
    echo 'Less favorable';
}
else if((($male_month==11 && $male_date>=22) || ($male_month==12 && $male_date<=21))&& (($female_month==3 && $female_date>=21) || ($female_month==4 && $female_date<=19)))
{
    echo 'Favorable';
}
else if((($male_month==12 && $male_date>=22) || ($male_month==1 && $male_date<=19))&& (($female_month==3 && $female_date>=21) || ($female_month==4 && $female_date<=19)))
{
    echo 'Critical';
}
else if((($male_month==1 && $male_date>=20) || ($male_month==2 && $male_date<=18))&& (($female_month==3 && $female_date>=21) || ($female_month==4 && $female_date<=19)))
{
    echo 'Favorable';
}
else if((($male_month==2 && $male_date>=19) || ($male_month==3 && $male_date<=20))&& (($female_month==3 && $female_date>=21) || ($female_month==4 && $female_date<=19)))
{
    echo 'Less Favorable';
}



?>