<?php
require_once("config.php");
//carrga um usuário
$root = new Usuario();
$root->loadbyId(2);
//lista de usuários
//como está estático em Usuário não preciso estanciar.
//$lista = Usuario::getList();
//echo $root;
//carrea lista de usuários buscando pelo ligin.
$search = Usuario::search("CRIS");
echo json_encode($search);
