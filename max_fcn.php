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
    if ($num2 > $num1 && $num2 > $num3 && $num2 > $num4 && $num2 > $num5) {
      echo "$num2 is the largest number.";
    }
    if ($num3 > $num1 && $num3 > $num2 && $num3 > $num4 && $num3 > $num5) {
      echo "$num3 is the largest number.";
    }
    if ($num4 > $num1 && $num4 > $num2 && $num4 > $num3 && $num4 > $num5) {
      echo "$num4 is the largest number.";
    }
    if ($num5 > $num1 && $num5 > $num2 && $num5 > $num3 && $num5 > $num4) {
      echo "$num5 is the largest number.";
    }
}
find_the_max(3, 4, 1, 2, 6);
?>
