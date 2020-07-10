<?php

#Herança
class SuperClasse{
    public $a = 'variável $a';

    public function ini(){
        echo "SuperClasse->ini()";
    }
}

class SubClasse extends SuperClasse{

}

$sub = new SubClasse();
$sub -> ini();
echo $sub -> a;


?>