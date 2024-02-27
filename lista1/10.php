<?php
$n = strval(readline());
$s = floatval(readline());
$x = floatval(readline());

$t = ($x*0.15)+$s;
$t = number_format($t,2, ".","");

echo "TOTAL = R$ ".$t."\n";
?>
