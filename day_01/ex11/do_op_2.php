#!/usr/bin/php
<?php

function is_opt($c) {
  if ($c == "+")
    return TRUE;
  if ($c == "-")
    return TRUE;
  if ($c == "*")
    return TRUE;
  if ($c == "/")
    return TRUE;
  if ($c == "%")
    return TRUE;
  else
    return FALSE;
}

if ($argc != 2)
  echo "Incorrect Parameters\n";
else {
  $str = trim ($argv[1]);
  $len = strlen($str);
  $bal = 1;
  for ($i = 0; $i < $len; $i++) {
    if (is_numeric($str[$i]) && $bal == 1)
      $nb1 = $nb1 . $str[$i];
    else if (!is_numeric($str[$i]) && $str[$i] != " ") {
      if (!is_opt($str[$i])) {
        echo "Syntax Error\n";
        return NULL;
      }
      else {
        $op = $str[$i];
        $bal = 0;
      }
    }
    else if (is_numeric($str[$i]) && $bal == 0) {
      $nb2 = $nb2 . $str[$i];
    }
    else if ($str[$i] == " ") {

    }
  }
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
