<?php

#VISIBILIDADE DAS FUNÇÕES

class SuperClasse{

  public function funcPublica(){echo "funcPublica \n";}
  protected function funcProtegida(){echo "funcProtegida\n";}
  private function funcPrivada(){echo "funcPrivada\n";}

  function super(){
      $this->funcPublica();
      $this->funcProtegida();
      $this->funcPrivada();

  }
}

//$super = new SuperClasse();
//$super -> super();
//$super -> funcPublica();
//$super -> funcProtegida();
//$super -> funcPrivada();

class SubClasse extends SuperClasse{
    function __construct()
    {
        $this -> funcPublica();
        $this -> funcProtegida();
        //$this -> funcPrivada();
    }

}
$sub = new SubClasse();
$sub->funcPublica();
$sub->super();

?>