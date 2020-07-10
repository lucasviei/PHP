<?php

#Verifica se a estrutura é um array
echo "FUNÇÂO: is_array() - " . "\n";
echo "Valor = [] - " . is_array([])."\n";
echo "Valor = array() - " . is_array(array())."\n";
echo "Valor = [1, 2, 3] - " . is_array([1,2,3])."\n";
echo "Valor = 1 - " . is_array(1)."\n";
echo "\n";

#RETORNA A QUANTIDADE DE ELEMENTOS
echo "FUNÇÂO: count() "."\n";
echo "Valor = [1,2,3,4] - " . count([1,2,3,4])."\n";
echo "Valor = range(0,1000) - " . count(range(0,1000))."\n";
echo "\n";

#VERIFICA SE UM ELEMENTO ESTÁ CONTIDO
echo "FUNÇÂO: in_array(valor, array)" . "\n";
echo "Valor = in_array(2, [1,2,3,4,5]) " . in_array(2, [1,2,3,4,5])."\n";
echo "Valor = in_array(6, [1,2,3,4,5]) " . in_array(6, [1,2,3,4,5])."\n";
echo "\n";

#ORDENAÇÂO
echo "FUNÇÂO: sort()\n";
$arr = ["c","a","b","f"];
sort($arr);
print_r($arr);

#INVERSÃO
echo "FUNÇÂO: array_reverse()\n";
$arr = [1,2,3,4];
$arr = array_reverse($arr);
print_r($arr);

#SOMA
echo "FUNÇÂO: array_sum()\n";
$arr = [1,2,3,4];
echo "A soma é: " . array_sum($arr);

#JUNÇÂO DE ARRAYS
echo "FUNÇÂO: array_merge()\n";
$arr1 = [1,2];
$arr2 = ["a","b"];
$x = array_merge($arr1,$arr2);
print_r($x);

?>