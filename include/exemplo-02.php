<?php

//include "exemplo-01.php";

require "exemplo-01.php";

/////////////////////// so chama a funçao um vez e evita problemas
require_once "exemplo-01.php";

$resultado = somar(10, 20);

echo $resultado;

?>