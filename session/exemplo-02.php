<?php

require_once("config.php");

unset($_SESSION["nome"]); #apenas limpa a variável

echo $_SESSION["nome"];

//session_destroy(); ------ ele limpa a variavel e remove o usuario
?>