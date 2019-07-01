<?php 

	require_once("config.php");

	//carrega um usuário
	//$root = new Usuario();
	//$root->loadById(2);
	//echo $root;

	//carrega lista de usuários
	//$lista = Usuario::getList();
	//echo json_encode($lista);

	//carrega lista de pesquisa
	//$busca = Usuario::search("jo");
	//echo json_encode($busca);

	//carrega um usuario usando o login e senha
	//$usuario = new Usuario();
	//$usuario->login("joao","23456789");
	//echo $usuario;

	//insert novo
	//$aluno = new Usuario("poly", "090911");
	//$aluno->insert();
	//echo $aluno;

	//update -> atualizar
	//$usuario = new Usuario();
	//$usuario->loadById(10);
	//$usuario->update("poly", "1234321");
	//echo $usuario;

	//deletar
	$usuario = new Usuario();
	$usuario->loadById(7);
	$usuario->delete();
	echo $usuario;

?>