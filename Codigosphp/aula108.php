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
class PFisica extends Pessoa{
    public function getNomeCompleto(): string
    {
        return "PFisica: {$this->getNome()} {$this->getSobrenome()} ";
    }
}

$pf = new PFisica();
$pf->setNome("eXcript");
$pf->setSobrenome("Brasil");
echo $pf->getNomeCompleto();

?>