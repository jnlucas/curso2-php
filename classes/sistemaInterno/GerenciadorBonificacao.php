<?php

namespace classes\sistemaInterno;

use classes\abstratas\Funcionario;
use classes\abstratas\FuncionarioAutenticavel;

use classes\interfaces\Autenticavel;

class GerenciadorBonificacao implements Autenticavel{

  public $totalBonificacao;

  private $autenticado;

  public function registrar(Funcionario $funcionario){
    if($this->autenticado){
      $this->totalBonificacao += $funcionario->getBonificacao();
    }else{
      throw new \Exception("Voce nao está autenticado");
    }

  }

  public function getTotalBonificacoes(){

    return $this->totalBonificacao;
  }

  public function AutentiqueAqui(FuncionarioAutenticavel $funcionario,$senha){

    $this->autenticado = $funcionario->Autenticar($senha);

  }
}

?>
