<?php

$conn = new PDO("mysql:dbname=dbphp7;host=localhost", "root", "");

$conn->beginTransaction();

$stmt = $conn->prepare("DELETE FROM tb_usuarios where idusuario = ?");

$id = 3;

$stmt->execute(array($id));



// $conn->rollback();  cancela

// $conn->commit(); confirma



echo "Delete Ok";

?>