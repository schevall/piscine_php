#!/usr/bin/php
<?php

if ($argc != 2) {
  return NULL;
}
else {
  $tab = explode(" ", $argv[1]);
  $len = count($tab);
  $j = 0;
  $tab2 = array();
  for ($i = 0; $i < $len; $i++) {
    if ($tab[$i]) {
      $tab2[$j] = $tab[$i];
      $j++;
    }
  }
  $len = count ($tab2);
  for ($i = 0; $i < $len; $i++) {
    if ($i == 0)
      $str = $tab2[$i] . " ";
    else if ($i != $len - 1)
      $str = $str . " " . $tab2[$i] . " ";
    else
      $str = $str . " " . $tab2[$i];
  }
  echo ($str) . "\n";
}

?>
