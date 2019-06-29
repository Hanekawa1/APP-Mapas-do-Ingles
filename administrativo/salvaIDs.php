<?php
	session_start();
	require 'lib/funcs.php';
	$con = conecta();

	$modulo = $_POST['idModulo'];
	if(empty($_POST['idModulo'])){
			$_SESSION['vazio_idModulo'] = "Campo módulo é obrigatório.";
			echo "<script language='javascript'> window.location='index.php?pagina=cadastrarAtividades';</script>";
		}else{
			$_SESSION['value_idModulo'] = trim($_POST['idModulo']);
		}
	$dia = $_POST['idDia'];
	if(empty($_POST['idDia'])){
			$_SESSION['vazio_nome'] = "Campo dia é obrigatório.";
			echo "<script language='javascript'> window.location='index.php?pagina=cadastrarAtividades';</script>";
		}else{
			$_SESSION['value_idDia'] = trim($_POST['idDia']);
		}

	$_SESSION['numModulo'] = $modulo;
	$_SESSION['diaModulo'] = $dia;

	$verificaModulo = mysqli_query($con, "SELECT * FROM modulo WHERE idModulo = '$modulo'");
	$verificaDia = mysqli_query($con, "SELECT * FROM dia WHERE idDia = '$dia'");
	if(mysqli_num_rows($verificaModulo) != 1){
		header('Location: index.php?pagina=cadastrarAtividades&erro=1');
	} else if (mysqli_num_rows($verificaDia) != 1) {
		header('Location: index.php?pagina=cadastrarAtividades&error');
	} else {
		header("location: index.php?pagina=atividade1");
	}
	if ($modulo == '' || $dia == '') {
		header('Location: index.php?pagina=cadastrarAtividades&erros');
	}


	$insertDia = "INSERT INTO dia"
				."(idDia, idModulo)"
				. "VALUES ('$dia', '$modulo')";
	$res = mysqli_query($con, $insertDia);			
	if($res){
	header("location: index.php?pagina=atividade1");
	}
?>