<?php

    $n = intval(readline());

    $a=intval($n/365);

    $m=intval(($n%365)/30);

    $d=intval(($n%365)%30);

   echo $a." ano(s)\n";
   echo $m." mes(es)\n";
   echo $d." dia(s)\n";

?>
