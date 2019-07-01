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
	$usuario = new Usuario();
	$usuario->login("joao","23456789");
	echo $usuario;

?>