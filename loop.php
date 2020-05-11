<?php

// while loop
    //if doesn't $a++ , $a prints infinity time
    // if does $a++ only print 5,6 value
$a=0;
while($a<=6)
{
    echo "$a";
    $a++;
}

echo "</br>";

// Do while loop

$b=0;
do
{
    echo "Number is : $b" , "</br>";
    $b++;
}
    
while($b<=20);

echo "</br>";

// for loop
$d=4;

for($c=$d; $c<=10 ;$c++)
{
    echo "This is : $c" , "</br>";
}

echo "</br>";

//foreach

$week=array("Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday");

foreach($week as $value)
{
    echo "$value </br>";
}
?>