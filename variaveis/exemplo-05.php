<?php

$nome = "jefferson";

function teste() {

    global $nome; // var nome passa a funcionar dentro da função;
    echo $nome;

}

teste();
?>