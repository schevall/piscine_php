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
	sort ($output);
	foreach ($output as $elem)
		echo $elem . "\n";
}
 ?>
