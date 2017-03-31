#!/usr/bin/php
<?php
if ($argc != 2) {
  return NULL;
}
else {
	$tab = explode(" ", $argv[1]);
	$output = array();
	foreach ($tab as $elem) {
		if ($elem != NULL)
			array_push($output, $elem);
	}
	$str = implode(" ", $output);
	echo $str . "\n";
  }
?>
