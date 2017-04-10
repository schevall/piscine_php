#!/usr/bin/php
<?php

function my_ctype_alpha($str) {
  $len = strlen($str);
  for ($i = 0; $i < $len; $i++) {
    if (ord($str[$i]) < 65 || ord($str[$i]) > 122)
        return FALSE;
    if (ord($str[$i]) < 97 && ord($str[$i]) > 90)
        return FALSE;
  }
  return TRUE;
}

if ($argc == 1)
  exit();
else {
  unset($argv[0]);
	foreach ($argv as $elem) {
			$tab = explode(" ", $elem);
			foreach ($tab as $value) {
				if ($value)
					$output[] = $value;
			}
	}
	foreach ($output as $elem) {
		if (is_numeric($elem) == TRUE)
			$num[] = $elem;
	}
	foreach ($output as $elem) {
		if (my_ctype_alpha($elem) == TRUE)
			$str[] = $elem;
	}
	foreach ($output as $elem) {
		if (is_numeric($elem) == FALSE && my_ctype_alpha($elem) == FALSE)
			$left[] = $elem;
	}
	sort ($num, SORT_STRING);
	sort ($str, SORT_FLAG_CASE | SORT_NATURAL);
	sort ($left);
	foreach ($str as $elem)
		echo $elem . "\n";
	foreach ($num as $elem)
		echo $elem . "\n";
	foreach ($left as $elem)
		echo $elem ."\n";
}
 ?>
