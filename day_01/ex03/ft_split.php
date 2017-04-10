<?php
function ft_split($str) {
	if (!$str)
		return NULL;
	$tab = explode(" ", $str);
	foreach ($tab as $elem) {
		if ($elem)
			$output[] = $elem;
	}
  if ($str)
    sort($output, SORT_STRING);
  return ($output);
}
?>
