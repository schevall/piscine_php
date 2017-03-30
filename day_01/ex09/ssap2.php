#!/usr/bin/php
<?php

if ($argc == 1)
  return NULL;
else {
    $nb = $argc;
    $tab = array();
    for ($i = 1; $i < $nb; $i++) {
      $tab2 = explode(" ", $argv[$i]);
      $len = count($tab2);
      $j = 0;
      $tab3 = array();
      for ($k = 0; $k < $len; $k++) {
        if ($tab2[$k]) {
          $tab3[$j] = $tab2[$k];
          $j++;
        }
      }
      $len = count($tab3);
      for ($l = 0; $l < $len; $l++)
        array_push ($tab, $tab3[$l]);
    }
    print_r ($tab);
    $len = count ($tab);
    $i = 0;
    $tab1 = array();
    while ($i < $len) {
      for ($j = 0; $j < $len; $j++) {
        $min_ord = 300;
        $min_pos = 1500;
        if ($tab[$j]) {
          if (ord($tab[$j]) < $min_ord) {
            $min_ord = ord($tab[$j]);
            $min_pos = $j;
          }
        }
      }
      array_push ($tab1, $tab[$min_pos]);
      unset ($tab[$min_pos]);
      $i++;
    }
    $len = count($tab);
    for ($i = 0; $i < $len; $i++)
      echo $tab[$i] . "\n";
  }

 ?>
