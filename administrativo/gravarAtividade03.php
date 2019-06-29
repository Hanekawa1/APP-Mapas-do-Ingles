<?php
session_start();

	require 'lib/funcs.php';

	$imagem3 = $_POST['imagem3'];
	if(empty($_POST['imagem3'])){
			$_SESSION['vazio_imagem3'] = "Campo imagem é obrigatório.";
			echo "<script language='javascript'> window.location='index.php?pagina=atividade3';</script>";
		}else{
			$_SESSION['value_imagem3'] = trim($_POST['imagem3']);
		}
	$respostaCerta = $_POST['respostaC23'];
	if(empty($_POST['respostaC23'])){
			$_SESSION['vazio_respostaC23'] = "Campo resposta certa é obrigatório.";
			echo "<script language='javascript'> window.location='index.php?pagina=atividade3';</script>";
		}else{
			$_SESSION['value_respostaC23'] = trim($_POST['respostaC23']);
		}
	$respostaErrada1 = $_POST['respostaE13'];
	if(empty($_POST['respostaE13'])){
			$_SESSION['vazio_respostaE13'] = "Campo resposta errada é obrigatório.";
			echo "<script language='javascript'> window.location='index.php?pagina=atividade3';</script>";
		}else{
			$_SESSION['value_respostaE13'] = trim($_POST['respostaE13']);
		}
	$respostaErrada2 = $_POST['respostaE23'];
	if(empty($_POST['respostaE23'])){
			$_SESSION['vazio_respostaE23'] = "Campo resposta errada é obrigatório.";
			echo "<script language='javascript'> window.location='index.php?pagina=atividade3';</script>";
		}else{
			$_SESSION['value_respostaE23'] = trim($_POST['respostaE23']);
		}
	$respostaErrada3 = $_POST['respostaE33'];
	if(empty($_POST['respostaE33'])){
			$_SESSION['vazio_respostaE33'] = "Campo resposta errada é obrigatório.";
			echo "<script language='javascript'> window.location='index.php?pagina=atividade3';</script>";
		}else{
			$_SESSION['value_respostaE33'] = trim($_POST['respostaE33']);
		}
	$idModulo = $_SESSION['numModulo'];
	$idDia = $_SESSION['diaModulo'];

	$erro = 0;

	if($erro > 0){
		header('Location: index.php?pagina=atividade3&erro=1');
		exit();
	}

	$con = conecta();

	$insertAtividade03 = "INSERT INTO atividade03"
					. "(imagemAtividade03, respostaCorretaAtividade03, respostaErrada01Atividade03, respostaErrada02Atividade03, respostaErrada03Atividade03, idDia, idModulo, cadastroAtividade03)"
					. "VALUES ('$imagem3', '$respostaCerta', '$respostaErrada1','$respostaErrada2', '$respostaErrada3', '$idDia', '$idModulo', 1)";
	
	$res = mysqli_query($con, $insertAtividade03);
	
	if($res){
		header('Location: index.php?pagina=atividade3&sucesso=1');
		exit();
	} 
?>