<?php
declare(strict_types=1);
#VALORES DE RETORNO TIPADO
function cubo(float $num) : float{
    return $num*$num*$num;
}
function teste():array{
    return [10, "Excript", 5.1];
}
/*function x() : int{
    return "aa";
}*/
echo cubo(10.5);
var_dump(teste());

?>