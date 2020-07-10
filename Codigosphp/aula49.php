<?php 

$varvar = "Teste";
$$varvar = 10;

echo $Teste . "\n";

//echo $varvar . " ". $$varvar;
$num = 10;
$$num = 1000;

echo $num;
echo $$num;
?>