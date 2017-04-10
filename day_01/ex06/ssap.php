#!/usr/bin/php
<?php
if ($argc == 1)
  exit();
else {
	unset($arvg[0]);
	foreach ($argv as $elem) {
			$tab = explode (" ", $elem);
			foreach ($tab as $value) {
				if ($value)
					$output[] = $value;
		  }
	}
	sort ($output, SORT_STRING);
	foreach ($output as $elem)
		echo $elem . "\n";
}
?>
