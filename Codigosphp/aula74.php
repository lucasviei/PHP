<?php

#SPACESHIFT OPERATOR

foreach(range(0,9) as $key => $v){
    $x = rand(0,9);
    $rel = $v <=> $x;

    echo "v=$v <=> x=$x é $rel \n";
}

?>