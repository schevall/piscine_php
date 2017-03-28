#!/usr/bin/php
<?PHP

$x = 0;
$y = 0;

while ($x < 1000)
{
	$y = 0;
	while ($y < 90 && $x < 1000)
	{
		echo "X";
		$y++;
		$x++;
	}
	echo "\n";
}
?>
