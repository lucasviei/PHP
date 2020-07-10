<?php

//ARRAYS ASSOCIATIVOS

$pontos = ["Zé"=>11, "José"=>4, "Zeca"=>22];

echo "Zé: " . $pontos["Zé"]."\n";
echo "José: " . $pontos["José"]."\n";
echo "Zeca: " . $pontos["Zeca"]."\n";

$pontos["Zeca"] += 1;
echo $pontos["Zeca"];

?>