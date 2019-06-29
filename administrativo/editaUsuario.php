<?php
	
	require 'lib/funcs.php';
	session_start();
	$idUsuario = $_POST['id'];
	//a função trim limpa os espaços em branco antes e depois dos valores inseridos no input
	$email = trim($_POST['email']);
		if(empty($_POST['email'])){
			$_SESSION['vazio_nome'] = "Campo email é obrigatório.";
			echo "<script language='javascript'> window.location='index.php?pagina=cadastrarUsuarios';</script>";
		}else{
			$_SESSION['value_nome'] = trim($_POST['email']);
		}
	$senha = trim($_POST['senha']);
		if(empty($_POST['senha'])){
			$_SESSION['vazio_senha'] = "Campo senha é obrigatório.";
			echo "<script language='javascript'> window.location='index.php?pagina=cadastrarUsuarios';</script>";
		}else{
			$_SESSION['value_senha'] = trim($_POST['senha']);
		}
	$cpf = trim($_POST['cpf']);
		if(empty($_POST['cpf'])){
			$_SESSION['vazio_cpf'] = "Campo cpf é obrigatório.";
			echo "<script language='javascript'> window.location='index.php?pagina=cadastrarUsuarios';</script>";
		}else{
			$_SESSION['value_cpf'] = trim($_POST['cpf']);
		}
	$moduloInicial = trim($_POST['moduloInicial']);
		if(empty($_POST['moduloInicial'])){
			$_SESSION['vazio_moduloInicial'] = "Campo Módulo é obrigatório.";
			echo "<script language='javascript'> window.location='index.php?pagina=cadastrarUsuarios';</script>";
		}else{
			$_SESSION['value_moduloInicial'] = trim($_POST['moduloInicial']);
		}
	$expiracaoConta = trim($_POST['expiracaoConta']);

	$erro = 0;


	if($erro > 0){
		header('Location: index.php?pagina=criar&erro=1');
		exit();
	}

	$con = conecta();

	$updateUsuario = "UPDATE cadastros SET email = '$email', senha = '$senha', cpf = '$cpf', moduloInicial = '$moduloInicial', expiracaoConta = '$expiracaoConta' WHERE idUsuario = '$idUsuario'";
	
	$res = mysqli_query($con, $updateUsuario);
	if($res){
		header('Location: index.php?pagina=criar&sucesso=1');
		exit();
	} 
?>
