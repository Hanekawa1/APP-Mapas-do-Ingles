<?php
session_start();

	require 'lib/funcs.php';

	$texto5 = $_POST['texto5'];
	if(empty($_POST['texto5'])){
			$_SESSION['vazio_texto5'] = "Campo texto é obrigatório.";
			echo "<script language='javascript'> window.location='index.php?pagina=atividade5';</script>";
		}else{
			$_SESSION['value_texto5'] = trim($_POST['texto5']);
		}
	$idModulo = $_SESSION['numModulo'];
	$idDia = $_SESSION['diaModulo'];

	$erro = 0;

	if($erro > 0){
		header('Location: index.php?pagina=atividade5&erro=1');
		exit();
	}

	$con = conecta();

	$insertAtividade05 = "INSERT INTO atividade05"
					. "(textoAtividade05, idDia, idModulo, cadastroAtividade05)"
					. "VALUES ('$texto5', '$idDia', '$idModulo', 1)";
	
	$res = mysqli_query($con, $insertAtividade05);
	
	if($res){
		header('Location: index.php?pagina=atividade5&sucesso=1');
		exit();
	} 
?>