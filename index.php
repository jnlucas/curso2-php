<?php
ini_set('display_errors',1);

require_once "autoload.php";


use classes\funcionarios\Diretor;
use classes\funcionarios\Designer;


$joao = new Diretor("361.313.578.50",10000.00);


$fernanda = new Designer("358.939.428.50",11000.00);


var_dump($joao);

var_dump($fernanda);
