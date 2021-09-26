<?php

require_once("config.php");
/*
$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios");

echo json_encode($usuarios);
*/

//CARREGA UM USUARIO DO BANCO DE DADOS
//$root = new Usuario();
//$root->loadById(5);
//echo $root;

//CARREGA UMA LISTA DE USUARIOS
//$lista = Usuario::getList(); //:: por ser uma funcao static na classe usuario
//echo json_encode($lista);

//cCARREGA UMA LISTA DE USUARIOS BUSCANDO PELO LOGIN
//$search = Usuario::search("m");
//echo json_encode($search);

//CARREGA UM USUARIO USANDO LOGIN E SENHA
//$usuario = new Usuario();
//$usuario->login("Selma","54321");
//echo $usuario;

//INSERE UM USUARIO O BANCO DE DADOS
//$aluno = new Usuario("aluno", "0254187");
//$aluno->insert();
//echo $aluno;

//ALTERA UM USUARIO NO BANCO DE DADOS
//$usuario = new Usuario();
//$usuario->loadById(12);
//$usuario->update("luna", "2007");
//echo $usuario;

//DELETAR UM USUARIO NO BANCO DE DADOS
$usuario = new Usuario();
$usuario->loadById(10);
$usuario->delete();
echo $usuario;


?>