<?php 

define("TESTE", 10);

echo TESTE . "\n";

for($x=0;$x<5;$x++){
    define("CONSTANTE".$x, $x);
}

echo CONSTANTE0 . "\n";
echo CONSTANTE4 . "\n";

const VALOR = 1000;
echo VALOR . "\n";

?>