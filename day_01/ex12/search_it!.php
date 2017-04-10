#!/usr/bin/php
<?php

if ($argc < 3)
  exit();
else {
  $key = $argv[1];
  for ($i = 2; $i < $argc; $i++) {
    $tab[] = $argv[$i];
  }
  $len = count($tab);
  for ($i = 0; $i < $len; $i++) {
    $tmp = explode(":", $tab[$i]);
    if ($tmp[0] == $key) {
      $res = $tmp[1];
    }

  }
  if (!$res)
    exit();
  echo $res . "\n";
}

 ?>
