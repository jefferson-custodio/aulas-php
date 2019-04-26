<?php

function ola(){

    echo "Olá Mundo! <br><br><br>";

}

ola();
ola();

////////////////////// Com Return /////////////////////


function ola2(){

    return "Olá Mundo2! <br>";

}

#use return para que a função possa ser ultilizada em diferentes ocasioes como guarda
# em um var ou enviar para um banco de dados e nao apenas escrever na tela

# resumindo com o return eu ganho liberdade ;
echo ola2();
$frase = ola2();

echo strlen($frase);

?>