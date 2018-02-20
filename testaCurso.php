<?php
/**
 * Created by PhpStorm. */

include 'vendor/autoload.php';

$c = new App\Model\Curso();


$c->setNome("Programação com android");
$c->setValor(300.50);

$cDAO = new App\DAO\CursoDAO();
$cDAO->inserir($c);

echo $c->getNome() . " - " . $c->getValor();
