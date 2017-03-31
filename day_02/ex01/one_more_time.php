#!/usr/bin/php
<?php

function check_format($str) {
  if (preg_match("/(^[L|l]undi||^[M|m]ardi||^[M|m]ercredi|^[J|j]eudi|^[V|v]endredi|^[S|s]amedi|^[D|d]imanche){1} {1}([\d]{1,2}) {1}([J|j]anvier|[F|f][e|é]vrier|[M|m]ars|[A|a]vril|[M|m]ai|[J|j]uin|[J|j]uillet|[A|a]o[u|û]t|[S|s]eptembre|[O|o]tobre|[N|n]ovembre|[D|d][e|é]cembre) {1}([1|2][\d][\d][\d] {1}([0-2][\d]:[0-5][\d]:[0-5][\d])) ",$str)
    return TRUE;
  else
    return FALSE;
}

if ($argc != 2) {
  exit();
} else {
  if (!check_format ($argv[1])) {
    echo "Wrong Format\n";
  } else {
    $tab = explode(" ", $argv[1]);

  }
}

?>
