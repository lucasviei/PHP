<?php

#STRING DOUBLE-QUOTED

#concatenar a + b
#interporlar

$num = 55;

echo "O valor da variável num é: " . $num . "\n";
echo "O valor da variável num é: $num \n";

$arr = ["Preto", "Azul", "Amarelo"];
echo "A cor da bola é: $arr[1]" . "\n";

$a = 10;
$$a = 50;

echo "O valor de a é: $a e o valor de aa é: $$a \n";
echo "O valor de a é: $a e o valor de aa é: ${$a} \n";

${$arr[2]} = 'Marrom';

echo "Var: $arr[2] , ${$arr[2]} \n";

echo $Amarelo;

?>