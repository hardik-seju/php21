<?php
var_dump($_POST);
extract($_POST);
$cnt=0;
$flash=0;
if($color == 0)
{
     $myBgColor="red";
}
elseif($color == 1)
{
     $myBgColor="Blue";
}
else
{
     $myBgColor="Green";
}
if($text_color==0)
{
     $myTextColor = "white";
}
else
{
     $myTextColor=  "Black";
}
echo "<table border='2' align='center' width='50%' cellpadding='10px' bgcolor=".$myBgColor." style='color:".$myTextColor.";'>";
if($loop==0)
{
    while($flash<$row)
    {
    echo '<tr>';
    $cnt=0;
    while($cnt<$colum)
    {
        echo '<td>'.$text.'</td>';
        $cnt++;
    }
    echo '</tr>';
    $flash++;
    }
}
else if($loop==1)
{
    for($flash=0;$flash<$row;$flash++)
    {
    echo '<tr>';
    $cnt=0;
    for($cnt=0;$cnt<$colum;$cnt++)
    {
        echo '<td>'.$text.'</td>';
    }
    echo '</tr>';
    }
}
else
{
    do
    {
    echo '<tr>';
    $cnt=0;
    do
    {
        echo '<td>'.$text.'</td>';
        $cnt++;
    }while($cnt<$colum);
    echo '</tr>';
    $flash++;
    }while($flash<$row);
}
echo '</table>';

?>