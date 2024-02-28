<?php

echo "Hello everyone!<br>";

$myStr = 'Nayan';
$myInteger = 10;
$myBoolean = true;

echo $myStr . '<br>';
echo $myInteger . '<br>';
echo $myBoolean . '<br>';


//operators in php

//Arithmetic operators : +,-,/,%
$a = 10;
$b = 10;
$sum = $a+$b;
echo "The sum is ".$sum;

//comparism operators: ==,!=,<,>,<=,>=,===

$is_equal = ($a===$b);
echo "<br>" .$is_equal;

// logical operators: &&,||
$andResult = ($a<0 && $b>0);
$orResult = ($a<0 || $b>0);

$hello = 9;
$checking = ($hello<=9);
echo $hello;

//increment decrement
$num = 5;
$num++;
echo $num;

//ternary operator
$check = true;
$true_or_false = true ? 'true' : 'false';
echo "<br>".$true_or_false;

//if else
if ($a===$b) {
    echo "<br> true";
} else {
    echo "<br> false";
}



//assignment:
// for loop table
//switch case 




