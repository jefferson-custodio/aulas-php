<?php

// session_id('bpgrjftu6k42uo4vt6p34nhuo1');

require_once("config.php");

session_regenerate_id(); # cria um novo id (bom para segurança),

echo session_id() . "<br>";

var_dump($_SESSION);

?>