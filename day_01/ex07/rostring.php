#!/usr/bin/php
<?php
if ($argc < 2)
  exit();
$tab = explode(" ", $argv[1]);
foreach ($tab as $elem) {
	if ($elem)
		$output[] =  $elem;
}
$nb = count($output);
$tmp = $output[0];
$output[0] = $output[$nb];
$output[$nb] = $tmp;
$str = implode(" ", $output);
echo trim($str) . "\n";
 ?>
