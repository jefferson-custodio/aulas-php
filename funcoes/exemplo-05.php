<?php

$a = 10;

function trocaValor(&$a){ # com o & oque acontecer dentro da funçao sera alterado no valor da variavel

    $a += 50;

    return $a;

}

echo trocaValor($a);
echo "<br>";
echo trocaValor($a);
echo "<br>";
echo $a;

?>