<?php

#Funções Modificadoras

class Pessoa{

    private $nome;
    private $sobrenome;

    public function getNome() : string{
        return $this->nome;
    }
    public function setNome(string $nome){
        $this->nome = $nome;
    }
    public function getSobrenome() : string{
        return $this->sobrenome;
    }
    public function setSobrenome(string $sobrenome){
        $this->sobrenome = $sobrenome;
    }
    public function getNomeCompleto() : string{
        return $this->getNome() . " " . $this->getSobrenome();
    }
}
$p1 = new Pessoa();
$p1->setNome("eXcript");
$p1->setSobrenome("Brasil");

//echo $p1->getNome()."\n";
//echo $p1->getSobrenome()."\n";

echo $p1->getNomeCompleto();

?>