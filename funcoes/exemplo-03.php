<?php

function ola($texto){
    return "Olá $texto! <br>";
}

echo ola("mundo");
echo ola("pessoal");


function ola2($texto = "mundo", $periodo = "Bom dia"){ # mesmo nao seja definido quando chamar a funçao aparecerá mundo
    // parametos se mvalor padrao precisam estar localizados a esquerda
    return "Olá $texto! $periodo <br>";
}

echo ola2();
echo ola2("pessoal", "Boa tarde");

?>