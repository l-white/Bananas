<?php

// Write your own max program using only loops and if statements

// This program will find the largest value of five inputs

$num1;
$num2;
$num3;
$num4;
$num5;


function find_the_max($num1, $num2, $num3, $num4, $num5) {
    if ($num1 > $num2 && $num1 > $num3 && $num1 > $num4 && $num1 > $num5) {
        echo "$num1 is the largest number.";
  }
}

find_the_max(5, 4, 3, 2, 1);
?>
