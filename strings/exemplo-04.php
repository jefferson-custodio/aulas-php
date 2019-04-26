<?php

/////////////// busca palavras em uma string ////////////

$frase = "a repetição é a mãe da retenção.";

$q = strpos($frase, "mãe");

$texto = substr($frase, 0, $q);

var_dump($texto);

echo "<br>";

//////////////  tudo depois de mae ///////////////

$texto1 = substr($frase, $q);

var_dump($texto1);

echo "<br>";

//////////////////////// tudo depois de mae sem a palavra mae /////////////////////

$palavra = "mãe";

$texto = substr($frase, $q + strlen($palavra), strlen($frase));


var_dump($texto);