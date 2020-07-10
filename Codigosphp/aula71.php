<?php

declare(strict_types=1);

#Funções com parÂmetros tipados
function getArea(int $x, int $y){
    return $x * $y;
}
echo getArea(10,5) . "\n";

function getSum(int ...$valores){
    return array_sum($valores);
}
//echo getSum(1,2,3,4,5,6,"100");
?>