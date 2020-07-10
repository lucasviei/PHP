<?php

#FUNÇÕES COM PARÂMETROS DEFAULT
function login($user="root", $key="123"){
    echo "user = " . $user;
    echo "key = " . $key;
}
login("eXcript", "123456");
?>