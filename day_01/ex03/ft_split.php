#!/usr/bin/php
<?PHP
function ft_split($str) {
	$tab = explode(" ", $str);
	$output = array();
	foreach ($tab as $elem) {
		if ($elem != NULL)
			array_push($output, $elem);
	}
  if ($str != NULL)
    sort($output);
  return ($output);
}
?>
