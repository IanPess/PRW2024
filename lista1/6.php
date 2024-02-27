<?php
$a = floatval(readline());
$b = floatval(readline());
if ($a or $b <= 10)
{
    $a = $a*3.5;
    $b = $b*7.5;
    $c = ($a + $b)/11;
    
}
    $c = number_format($c,5, ".","");
    echo "MEDIA = ".$c."\n";
?>
