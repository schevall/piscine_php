#!/usr/bin/php
<?php

if ($argc < 2)
  return NULL;
$str = $argv[1];
$tab = explode(" ", $str);
$len = count ($tab);
$j = 0;
for ($i = 0; $i < $len; $i++) {
  if ($tab[$i]) {
    $tab2[$j] = $tab[$i];
    $j++;
  }
}
$len = count ($tab2);
$tab = array();
$j = 0;
if ($len == 1)
  $str = $tab2[0];
else {
  for ($i = 1; $i < $len; $i++) {
    $tab[$j] = $tab2[$i];
    $j++;
  }
  $tab[$j] = $tab2[0];
  $str = implode (" ", $tab);
}
echo $str . "\n";

 ?>
