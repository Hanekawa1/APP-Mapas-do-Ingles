<?php

	require 'lib/funcs.php';

	$nModulo = $_POST['nModulo'];
	$nomeModulo = $_POST['nomeModulo'];
	$con = conecta();
	
	$verificaModulo = mysqli_query($con, "SELECT * FROM modulo WHERE idModulo = '$nModulo'");
	if(mysqli_num_rows($verificaModulo) == 1){
		header('Location: index.php?pagina=cadastrarModulo&erro=1');
	}
	
	if ($nModulo == '' || $nomeModulo == '') {
		header('Location: index.php?pagina=cadastrarModulo&erros');
	}
	$insertModulo = "INSERT INTO modulo"
					. "(idModulo, nomeModulo)"
					. "VALUES ('$nModulo', '$nomeModulo')";
	
	$res = mysqli_query($con, $insertModulo);
	
	if($res){
		header('Location: index.php?pagina=gravaModulo&sucesso=1');
		exit();
	} 
?>
