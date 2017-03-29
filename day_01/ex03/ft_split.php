#!/usr/bin/php
<?PHP
function ft_split($str) {
  $tab = explode(" ", $str);
  if ($str != NULL)
    sort($tab);
  return ($tab);
}
?>
