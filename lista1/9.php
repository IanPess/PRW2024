<?php
$n = intval(readline());
$s = floatval(readline());
$x = floatval(readline());

$t = $x*$s;
$t = number_format($t,2, ".","");

echo "NUMBER = ".$n."\n";
echo "SALARY = U$ ".$t."\n";
?>
