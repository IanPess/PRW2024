<?php
$a = $_GET['a'];
$u = $_GET['u'];
$i = $_GET['i'];
if ($a<=1412){
    echo "INSS:";
    $c=($a/100)*7.5;
    echo $a-$c;
    echo $u;
    echo $i;
} else if ($a>=1413 and $a<=2666.68) {
    echo "INSS:";
    $c = ($a/100)*9;
    echo $a-$c;
    echo $u;
    echo $i;
} else if ($a>=2666.69 and $a<=4000.03) {
    echo "INSS:";
    $c= ($a/100)*12;
    echo $a-$c;
    echo $u;
    echo $i;
} else if ($a>=4000.04) {
    echo "INSS:";
    $c= ($a/100)*14;
    echo $a-$c;
    echo $u;
    echo $i;
}


if ($i<65){
    if($a<=1903.99 and $a<=2826.65){
        echo "IRPF:";
        $d=($a/100)*7.5;
        echo $a-$d;
        echo $u;
        echo $i;
    } else if($a>=2826.66 and $a<=3751.05){
        echo "IRPF:";
        $d=($a/100)*15;
        echo $a-$d;
        echo $u;
        echo $i;
    } else if($a>=3751.06 and $a<=4664.68){
        echo "IRPF:";
        $d=($a/100)*22.5;
        echo $a-$d;
        echo $u;
        echo $i;
    } else if($a>=4664.69){
        echo "IRPF:";
        $d=($a/100)*27.5;
        echo $a-$d;
        echo $u;
        echo $i;
    }
    
} else{
    echo "IRPF:";
    echo "Nao paga";
} 

?>