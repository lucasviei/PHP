<?php

//Operação Ternária 2

$txt = isset($_GET["texto1"])? $_GET["texto1"] : "A chave não existe.";

echo $txt;

?>
