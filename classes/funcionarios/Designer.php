<?php

namespace classes\funcionarios;

use classes\abstratas\Funcionario;

class Designer extends Funcionario{




  public function getBonificacao(){

    return $this->salario * 0.5;
  }

  public function aumentarSalario(){

    $this->salario *= 1.5;
  }

}
?>
