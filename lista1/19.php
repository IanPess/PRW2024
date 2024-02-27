<?php
    
    $not = intval(readline());

    echo "$not\n";
    echo intval($not/100)." nota(s) de R$ 100,00\n";
    $not = ($not%=100);
    
    echo intval($not/50)." nota(s) de R$ 50,00\n";
    $not = ($not%=50);
    
    echo intval($not/20)." nota(s) de R$ 20,00\n";
    $not = ($not%=20);
    
    echo intval($not/10)." nota(s) de R$ 10,00\n";
    $not = ($not%=10);
    
    echo intval($not/5)." nota(s) de R$ 5,00\n";
    $not = ($not%=5);
    
    echo intval($not/2)." nota(s) de R$ 2,00\n";
    $not = ($not%=2);
    
    echo intval($not/1)." nota(s) de R$ 1,00\n";
    $not = ($not%=1);
?>
