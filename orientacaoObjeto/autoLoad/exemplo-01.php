<?php

function __autoload($nomeClass){

    require_once("$nomeClass.php");
}

$carro = new DelRey();
$carro->acelerar(80);

?>