<?php

$nome = "joão rangel";

//////////////////////deixa em MAIUSCULO ////////////////////////
$nome = strtoupper($nome);

echo $nome;

//////////////////////deixa em minusculo ////////////////////////
$nome = strtolower($nome);

echo '<br>';
echo '<br>';

echo $nome;

echo '<br>';
echo '<br>';

//////////////////////deixa a primeira letra de cada palavra em MAIUSCULO ////////////////////////
$nome = ucwords($nome);

echo $nome;


echo '<br>';
echo '<br>';

//////////////////////deixa a primeira em MAIUSCULO ////////////////////////
$nome = ucfirst($nome);

echo $nome;

?>