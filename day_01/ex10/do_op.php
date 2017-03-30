#!/usr/bin/php
<?php

if ($argc != 4)
  echo "Incorrect Parameters\n";
else {
  $nb1 = trim($argv[1]);
  $nb2 = trim($argv[3]);
  $op = trim($argv[2]);
  if ($op == "+")
    $result = $nb1 + $nb2;
  else if ($op == "-")
    $result = $nb1 - $nb2;
  else if ($op == "*")
    $result = $nb1 * $nb2;
  else if ($op == "/")
    $result = $nb1 / $nb2;
  else if ($op == "%")
    $result = $nb1 % $nb2;
  echo $result . "\n";
}

?>
