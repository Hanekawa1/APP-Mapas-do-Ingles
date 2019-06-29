<?php
	session_start();

	require 'lib/funcs.php';

	$texto1 = $_POST['texto1'];
		if(empty($_POST['texto1'])){
			$_SESSION['vazio_texto1'] = "Campo texto é obrigatório.";
			echo "<script language='javascript'> window.location='index.php?pagina=atividade1';</script>";
		}
		else{
			$_SESSION['value_texto1'] = trim($_POST['texto1']);
		}
	$audio1 = $_POST['audio1'];
		if(empty($audio1)){
			$_SESSION['vazio_audio1'] = "Campo audio é obrigatório.";
			echo "<script language='javascript'> window.location='index.php?pagina=atividade1';</script>";
		}
		else{
			$_SESSION['value_audio1'] = $audio1;
		}
	$idModulo = $_SESSION['numModulo'];
	$idDia = $_SESSION['diaModulo'];

	$erro = 0;

	if($erro > 0){
		header('Location: index.php?pagina=atividade1&erro=1');
		exit();
	}

	$con = conecta();

	$insertAtividade01 = "INSERT INTO atividade01"
					. "(textoAtividade01, audioAtividade01, idDia, idModulo, cadastroAtividade01)"
					. "VALUES ('$texto1', '$audio1', '$idDia', '$idModulo', 1)";
	
	$res = mysqli_query($con, $insertAtividade01);
	
	if($res){
		header('Location: index.php?pagina=atividade1&sucesso=1');
		exit();
	} 
?>
