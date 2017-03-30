#!/usr/bin/php
<?php

if ($argc < 3)
  return NULL;
else {
  $key = $argv[1];
  $tab = array();
  for ($i = 2; $i < $argc; $i++) {
    array_push ($tab, $argv[$i]);
  }
  $len = count ($tab);
  for ($i = 0; $i < $len; $i++) {
    $tmp = explode (":", $tab[$i]);
    if ($tmp[0] == $key) {
      $res = $tmp[1];
    }

  }
  if (!$res)
    return NULL;
  echo $res . "\n";
}

 ?>
