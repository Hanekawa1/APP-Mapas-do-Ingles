<?php

	require 'lib/funcs.php';
	$nModulo = $_POST['nModulo'];
	$nomeModulo = $_POST['nomeModulo'];
	$con = conecta();

	
	$verificaModulo = mysqli_query($con, "SELECT * FROM modulo WHERE idModulo = '$nModulo'");
	$updateModulo = "UPDATE modulo SET idModulo = '$nModulo', nomeModulo = '$nomeModulo' where idModulo = '$nModulo'";

	if(mysqli_num_rows($verificaModulo) == 0){
		header('Location: index.php?pagina=editaModulo&erro=1');
	}
	$res = mysqli_query($con, $updateModulo);
	if ($nModulo == '' || $nomeModulo == '') {
		header('Location: index.php?pagina=editaModulo&erro=1');
	}
	
	if($res){
		header('Location: index.php?pagina=editaModulo&sucesso=1');
		exit();
	} 
?>