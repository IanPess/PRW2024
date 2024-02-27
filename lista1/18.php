<?php
    $t=floatval(readline());
    $v=floatval(readline());

    $l = $t*$v/12;
    $l = number_format($l, 3, ".", "");

    echo "$l\n";
?>
