<?php
ini_set('display_errors',1);

require_once "autoload.php";


use classes\funcionarios\Diretor;
use classes\funcionarios\Designer;
use classes\abstratas\Funcionario;
use classes\sistemaInterno\GerenciadorBonificacao;


$gerenciador = new GerenciadorBonificacao();


$joao = new Diretor("361.313.578.50",10000.00);
$joao->senha = "1212121";

$gerenciador->AutentiqueAqui($joao,"1212121");
$gerenciador->registrar($joao);

var_dump($gerenciador->getTotalBonificacoes());


var_dump($joao);
var_dump($joao->getBonificacao());



$fernanda = new Designer("358.939.428.50",3000.00);



var_dump($fernanda);
var_dump($fernanda->getBonificacao());
