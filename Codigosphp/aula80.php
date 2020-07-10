<?php

#string
$str = "abc";

echo $str . "123\n";

//echo $str[3] . "\n";
//echo $str{0};

$len = strlen($str);
for($i=0;$i<$len;$i++){
    echo $str[$i] . "\n";
}
?>