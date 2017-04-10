#!/usr/bin/php
<?php
if ($argc < 2) {
  exit();
}
else {
	$tab = explode(" ", $argv[1]);
	foreach ($tab as $elem) {
		if ($elem)
			$output[] = $elem;
	}
	$str = implode(" ", $output);
	echo $str . "\n";
  }
?>
