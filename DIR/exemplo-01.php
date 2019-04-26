<?php

$name = "images";

if (!is_dir($name)) {

    mkdir($name); //cria um diretorio
    echo "Diretório $name criado com sucesso";

} else {

    rmdir($name); //remove um diretorio
    echo "Já existe o diretório: $name foi removido";
}

?>