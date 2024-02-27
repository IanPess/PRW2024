<?php

    $r = intval(readline());
    $t1 =  (4.0/3.0)*3.14159*($r*$r*$r);
    $t1 = number_format($t1,3, ".","");

echo "VOLUME = ".$t1."\n";
?>
