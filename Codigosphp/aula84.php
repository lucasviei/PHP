<?php

#FUNÇÔES PARA MANIPULAR STRINGS

#FUNÇÂO - strlen - QUANTIDADE DE CARACTES
$len = strlen('123456abc');
echo "Quantidade de caracteres: $len \n";

#FUNÇÂO - substr(<str>,<indice>,<len>) - RETORNA UM PEDAÇO DA STRING
# aaabbbccc substr(str, 3, 3)

$str = 'aaabbbccc';
$sub = substr($str, 3, 3);
echo "A parte retornada é: $sub. \n";
$sub = substr($str, 3);
echo "A parte retornada sem <len> é: $sub. \n";

#FUNÇÂO - strtoupper(<str>) - CONVERTE PARA LETRAS MAIÙSCULAS

$str = 'eXcript';
$up = strtoupper($str);
echo "Maiúsculo: $up.\n";

$low = strtolower($str);
echo "Minúsculo: $low.\n";

#FUNÇÂO - str_replace(<chars>, <novastr>, <str>) - SUBSTITUI UMA PARTE DA STRING.

$str = 'aaabbbccc';
$nova = str_replace('bbb','---',$str);
echo "Original: $str - Mod: $nova \n";
?>