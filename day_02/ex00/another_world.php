#!/usr/bin/php
<?php
if ($argc < 1)
  return NULL;
$str = preg_replace("/[ |\t]{2,}/", " ", trim($argv[1]));
echo $str . "\n";
?>
