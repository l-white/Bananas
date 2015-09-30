<?php

$sentence = "Hello my name is Inigo Montoya";
$space = " ";

function output($space, $sentence) {
  for ($i = 0; $i <= strlen($sentence); $i++) {
  print_r($sentence[$i]);
  }
}
output(" ", "Hello my name is Indigo Montoya");
?>
