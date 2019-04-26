<?php

$qualASuaIdade = 30;

$idadeCrianca = 12;
$idadeMaior = 18;
$idadeMelhor = 65;

if ($qualASuaIdade < $idadeCrianca){

    echo "criança";

} else if($qualASuaIdade < $idadeMaior){

    echo "adolescente";

} else if($qualASuaIdade < $idadeMelhor){

    echo "adulto";

} else {
    
    echo "idoso";

}

/////////////////////////////// Novo Operador ////////////////////////////////

echo "<br>";

echo ($qualASuaIdade < $idadeMaior)?"Menos de Idade":"Maior de Idade";

////////////////////////////////////////////////////////////////////////////////

?>