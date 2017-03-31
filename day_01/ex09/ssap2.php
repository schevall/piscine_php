#!/usr/bin/php
<?php
if ($argc == 1)
  return ;
else {
	$i = 0;
	$output = array();
	foreach ($argv as $elem) {
		if ($i != 0) {
			$tab = explode (" ", $elem);
			foreach ($tab as $value) {
				if ($value != NULL)
					$output[] = $value;
			}
		}
		$i++;
	}
	foreach ($output as $elem) {
		if (is_numeric($elem) == TRUE)
			$num[] = $elem;
	}
	foreach ($output as $elem) {
		if (ctype_alpha($elem) == TRUE)
			$str[] = $elem;
	}
	foreach ($output as $elem) {
		if (is_numeric($elem) == FALSE && ctype_alpha($elem) == FALSE)
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
