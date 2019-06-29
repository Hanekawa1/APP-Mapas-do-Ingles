<?php
	session_start();
	
	require 'lib/funcs.php';

	$audio4 = $_POST['audio4'];
	$fraseaudio4 = $_POST['fraseaudio4'];
	if(empty($_POST['fraseaudio4'])){
			$_SESSION['vazio_fraseaudio4'] = "Campo da frase de aúdio é obrigatório.";
			echo "<script language='javascript'> window.location='index.php?pagina=atividade4';</script>";
		}else{
			$_SESSION['value_fraseaudio4'] = trim($_POST['fraseaudio4']);
		}
	$idModulo = $_SESSION['numModulo'];
	$idDia = $_SESSION['diaModulo'];

	$erro = 0;

	if($erro > 0){
		header('Location: index.php?pagina=atividade4&erro=1');
		exit();
	}

	$con = conecta();

	$insertAtividade04 = "INSERT INTO atividade04"
					. "(textoAtividade04, audioAtividade04, idDia, idModulo, cadastroAtividade04)"
					. "VALUES ('$fraseaudio4', '$audio4', '$idDia', '$idModulo', 1)";
	
	$res = mysqli_query($con, $insertAtividade04);
	
	if($res){
		header('Location: index.php?pagina=atividade4&sucesso=1');
		exit();
	} 
?>