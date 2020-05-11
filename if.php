<?php

//if statement


$a=10;

if($a>=10)
{
    echo "It's Correct!!!";
}

echo '</br>';

//if else statement
$b=10;
$c=15;


if(($b + $c)>20)
{
    echo $b+$c;
}
else
{
    echo "Please check the value!!!";
}

echo '</br>';

//if elseif else statement

    //date
echo "Date : ". date("d-F-Y");

echo '</br>';

    //week
echo "Day : ". date("l");

echo '</br>';
    //time
date_default_timezone_set("Asia/Colombo");
echo "Time : ". date("h:i A");

echo '</br>';

    //Greethings 
$d=date("H:i");

if($d>00  && $d<12 )
{
    echo "Good Morning!!";
}
elseif($d>=12 && $d<15 )
{
    echo "Good Afternoon!!";
}

elseif($d>15  && $d<21 )
{
    echo "Good Evening!!";
}
else
{
    echo "Good Night!!";
}

echo '</br>';

// elseis example

$marks=5;

if($marks>=0 && $marks<=100)
{
    if($marks>=75)
    {
        echo "Your Grade is : A";
    }
    elseif($marks>=65)
    {
        echo "Your Grade is : B";
    }
    elseif($marks>=55)
    {
        echo "Your Grade is : C";
    }
    elseif($marks>=35)
    {
        echo "Your Grade is : S";
    }
    else
    {
        echo "Your Grade is : W";
    }
    
} 
else 
{
    echo "Invalid Marks! Please check your marks";
}

echo '</br>';

// Switchcase
    // if not using break comand, after run print all days. 
    // if using break comand, after run print specific day. using week no 0 after run sunday wil be print.

$week = 0;

switch ($week) {
    case 0:
        echo "Sunday", "</br>";
        break;
    case 1:
        echo "Monday", "</br>";
        break;
    case 2:
        echo "Tuesday", "</br>";
        break;
    case 3:
        echo "Wednesday", "</br>";
        break;
    case 4:
        echo "Thursday", "</br>";
        break;
    case 5:
        echo "Friday", "</br>";
        break;
    case 6:
        echo "Saturday", "</br>";
        break;
    default:
        echo "Wrong day of week";
}


?>