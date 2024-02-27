<?php

    $A = floatval(readline());
    
    $N = $A;
    
    $a = intval($N/100);
    $b = intval($N%100);
    $c = intval($b/50);
    $d = intval($b%50);
    $e = intval($d/20);
    $f = intval($d%20);
    $g = intval($f/10);
    $h = intval($f%10);
    $i = intval($h/5);
    $j = intval($h%5);
    $k = intval($j/2);
    $l = intval($j%2);
    
    $E = $A*100;
    
    $B=intval($E);
    $m=intval($B%100);
    $n=intval($m/50);
    $o=intval($m%50);
    $p=intval($o/25);
    $q=intval($o%25);
    $r=intval($q/10);
    $s=intval($q%10);
    $t=intval($s/5);
    $u=intval($s%5);

echo "NOTAS:". "\n" . 
         $a. " nota(s) de R$ 100.00" . "\n" .
         $c . " nota(s) de R$ 50.00" . "\n" .
         $e . " nota(s) de R$ 20.00"  . "\n" .
         $g . " nota(s) de R$ 10.00" . "\n" .
         $i . " nota(s) de R$ 5.00" . "\n" .
         $k . " nota(s) de R$ 2.00" . "\n" .
         "MOEDAS:". "\n" . 
         $l . " moeda(s) de R$ 1.00" . "\n" .
         $n . " moeda(s) de R$ 0.50" . "\n" .
         $p . " moeda(s) de R$ 0.25"  . "\n" .
         $r . " moeda(s) de R$ 0.10" . "\n" .
         $t . " moeda(s) de R$ 0.05" . "\n" .
         $u . " moeda(s) de R$ 0.01" . "\n";
?>
