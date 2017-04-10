<?php
function ft_is_sort($tab) {
  $tab2 = $tab;
  $tabr = $tab;
  sort($tab2);
  rsort($tabr);
  $sorted_nat = TRUE;
  $sorted_rev = TRUE;
  $len = count ($tab);
  for ($i = 0; $i < $len; $i++) {
    if ($tab[$i] != $tab2[$i])
      $sorted_nat = FALSE;
  }
  for ($i = 0; $i < $len; $i++) {
    if ($tab[$i] != $tabr[$i])
      $sorted_rev = FALSE;
  }
  if ($sorted_nat == FALSE && $sorted_rev == FALSE)
    return FALSE;
  else
    return TRUE;
}
?>
