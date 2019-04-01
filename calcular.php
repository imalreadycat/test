<?php
$n1 = $_GET['n1'];
$n2 = $_GET['n2'];
$n3 = $_GET['n3'];
$n4 = $_GET['n4'];

$op = $_GET['operacao'];

if($op == 'soma'){
    echo $n1 + $n2 + $n3 + $n4;
}

if($op == 'multiplicacao'){
    echo $n1 * $n2 * $n3 * $n4;
}

if($op == 'subtracao'){
    echo $n1 - $n2;
}

if($op == 'divisao'){
    echo $n1 / $n2;
}
?>

