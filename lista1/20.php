<?php
    
    $seg = intval(readline());
    
    $min = intval($seg/60);
    $seg -= $min*60;
    $hor = intval($min/60);
    $min -= $hor*60;
    
    printf("%d:%d:%d\n", $hor, $min, $seg);
?>
