<?php

$lista = ["Domingo", "Segunda", "Terça", "Quarta", "Quinta", "Sexta", "Sábado"];
$qnt = count($lista);
echo $qnt . "\n";

for($x=0;$x<$qnt;$x++){
    echo $x . ": " . $lista[$x] . "\n";
}

?>