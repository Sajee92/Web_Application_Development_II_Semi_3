<?php
// User Define functions

function greetings()
{
    echo"Good Morning";
}

greetings();

echo "</br>";

function writethis()
{
    echo "I am an Undergraduate Student";
}
writethis();

echo "</br>";

function week($day)
{
    echo "Today is $day. </br>";
}

week("Monday");
week("Tuesday");
week("Wednesday");
week("Thursday");
week("Friday");
week("Saturday");
week("Sunday");

echo "</br>";

function sum($a,$b,$c)
{
    echo $a*$b*$c;
}
sum(2,4,6);
?>