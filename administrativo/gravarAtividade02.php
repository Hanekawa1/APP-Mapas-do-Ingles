<?php
session_start();

	require 'lib/funcs.php';

	$texto2 = $_POST['texto2'];
	if(empty($_POST['texto2'])){
			$_SESSION['vazio_texto2'] = "Campo texto é obrigatório.";
			echo "<script language='javascript'> window.location='index.php?pagina=atividade2';</script>";
		}else{
			$_SESSION['value_texto2'] = trim($_POST['texto2']);
		}
	$respostaCerta = $_POST['respostaC12'];
	if(empty($_POST['respostaC12'])){
			$_SESSION['vazio_respostaC12'] = "Campo resposta certa é obrigatório.";
			echo "<script language='javascript'> window.location='index.php?pagina=atividade2';</script>";
		}else{
			$_SESSION['value_respostaC12'] = trim($_POST['respostaC12']);
		}
	$respostaErrada1 = $_POST['respostaE12'];
	if(empty($_POST['respostaE12'])){
			$_SESSION['vazio_respostaE12'] = "Campo resposta errada é obrigatório.";
			echo "<script language='javascript'> window.location='index.php?pagina=atividade2';</script>";
		}else{
			$_SESSION['value_respostaE12'] = trim($_POST['respostaE12']);
		}
	$respostaErrada2 = $_POST['respostaE22'];
	if(empty($_POST['respostaE22'])){
			$_SESSION['vazio_respostaE22'] = "Campo resposta errada é obrigatório.";
			echo "<script language='javascript'> window.location='index.php?pagina=atividade2';</script>";
		}else{
			$_SESSION['value_respostaE22'] = trim($_POST['respostaE22']);
		}
	$respostaErrada3 = $_POST['respostaE32'];
	if(empty($_POST['respostaE32'])){
			$_SESSION['vazio_respostaE32'] = "Campo resposta errada é obrigatório.";
			echo "<script language='javascript'> window.location='index.php?pagina=atividade2';</script>";
		}else{
			$_SESSION['value_respostaE32'] = trim($_POST['respostaE32']);
		}
	$idModulo = $_SESSION['numModulo'];
	$idDia = $_SESSION['diaModulo'];

	$erro = 0;

	if($erro > 0){
		header('Location: index.php?pagina=atividade1&erro=1');
		exit();
	}

	$con = conecta();

	$insertAtividade02 = "INSERT INTO atividade02"
					. "(textoAtividade02, respostaCorretaAtividade02, respostaErrada01Atividade02, respostaErrada02Atividade02, respostaErrada03Atividade02, idDia, idModulo, cadastroAtividade02)"
					. "VALUES ('$texto2', '$respostaCerta', '$respostaErrada1','$respostaErrada2', '$respostaErrada3', '$idDia', '$idModulo', 1)";
	
	$res = mysqli_query($con, $insertAtividade02);
	
	if($res){
		header('Location: index.php?pagina=atividade2&sucesso=1');
		exit();
	} 
?>
