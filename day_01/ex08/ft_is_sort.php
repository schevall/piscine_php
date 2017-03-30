#!/usr/bin/php
<?php
function ft_is_sort($tab) {
  $tab2 = $tab;
  sort ($tab2);
  $len = count ($tab);
  for ($i = 0; $i < $len; $i++) {
    echo "tab = " . $tab[$i] . " tab2 = " .$tab2[$i] . "\n";
    if ($tab[$i] != $tab2[$i])
      return FALSE;
  }
  return TRUE;
}
 ?>
