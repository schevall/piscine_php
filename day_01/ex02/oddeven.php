#!/usr/bin/php
<?PHP
function looping() {
  echo "Entrez un nombre: ";
  $line = trim(fgets(STDIN));
  if (feof(STDIN) == TRUE)
    echo "^D\n";
    exit();
  if (!is_numeric($line))
    echo "'$line' n'est pas un chiffre\n";
  else if ($line % 2 == 0)
    echo "Le chiffre " . $line . " est Pair\n";
  else if ($line % 2 != 0)
    echo "Le chiffre " . $line . " est Impair\n";
  looping();
}
looping();
?>
