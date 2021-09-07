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
//$search = Usuario::search("CRIS");
//echo json_encode($search);
//Chama um usuário
//$usuario = new Usuario();
//$usuario->login("CRISPIM", "123456");
//$lista = Usuario::getList();
//echo json_encode($lista);
//$aluno = new Usuario();
//$aluno->setDeslogin("João");
//$aluno->setDessenha("@admin");

//$aluno->insert();
//echo $aluno;

//alterar usuário
/*
$usuario = new Usuario();
$usuario->loadById(4);
$usuario->update("professor", "1234443");
echo $usuario;*/
$usuario = new Usuario();
$usuario->loadById(4);
$usuario->delete();
echo $usuario;
