<?php
$a = floatval(readline());
$b = floatval(readline());
$c = floatval(readline());
if ($a or $b or $c <= 10)
{
    $a = $a*2;
    $b = $b*3;
    $c = $c*5;
    $d = ($a + $b + $c)/10;
    
}
    $d = number_format($d,1, ".","");
    echo "MEDIA = ".$d."\n";
?>
