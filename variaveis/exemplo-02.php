<?php

// Formas permitidas para a criação de variáveis
$anoNascimento = 1990;

$nome1 = "jefferson";

$sobrenome = "custodio";



// contatenação

$nome_Completo = $nome1 . $sobrenome;

//com espaço
$nome_Completo = $nome1 . " " . $sobrenome; 

echo $nome_Completo;


// como limpar variáveis

// limpa variaveis 

unset($anoNascimento);

//------------------------ verificar se a variavel existe 

// se a variavel existir
if (isset($anoNascimento)) { 
    echo $anoNascimento;
} 

?>