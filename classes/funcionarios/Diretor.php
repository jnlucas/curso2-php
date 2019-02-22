<?php

namespace classes\funcionarios;

use classes\abstratas\FuncionarioAutenticavel;

class Diretor extends FuncionarioAutenticavel{


  public function getBonificacao(){

    return $this->salario * 0.5;
  }

  public function aumentarSalario(){

    $this->salario *= 1.5;
  }

}
?>
