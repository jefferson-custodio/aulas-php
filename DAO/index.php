<?php

require_once("config.php");

#carrega 1 usuario
// $root = new Usuario();
// $root->loadbyId(4);
// echo $root;

// echo '<br><hr><br>';

#carrega uma lista de usuarios
// $lista = Usuario::getList();
// echo json_encode($lista);

// echo '<br><hr><br>';


#Carrega uma lista de usuários buscando pelo login
// $search = Usuario::search("use");
// echo json_encode($search);



#carrega um usuário usando login e senha
// $usuario = new Usuario();
// $usuario->login("user", "1234");
// echo $usuario;


#Inset aluno and return data
// $aluno = new Usuario("aluno3", "@lun0");
// $aluno->setDeslogin("aluno");
// $aluno->setDessenha("aluno1234");
// $aluno->insert();
// echo $aluno;


#update usuario
// $usuario = new Usuario();
// $usuario->loadById(8);
// $usuario->update("professor", "342125");
// echo $usuario;


#delete usuario
$usuario = new Usuario();
$usuario->loadById(7);
$usuario->delete();
echo $usuario;





