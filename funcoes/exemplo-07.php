<?php

function soma(int ...$valores){

    return array_sum($valores);

}

echo var_dump(soma(2, 2));
echo "<br>";
echo soma(22, 22);
echo "<br>";
echo soma(1.5, 3.2);
echo "<br>";


?>