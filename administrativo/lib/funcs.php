<?php
	require 'config.php';
	function rotas($pagina){

		switch ($pagina) {
			case 'usuarios':
				require 'paginas/usuarios.php';
				break;

			case 'cadastrarUsuarios':
				require 'paginas/cadastrarUsuarios.php';
				break;

			/*case 'atividades':
				require 'paginas/atividades.php';
				break;*/
			case 'atividadesCadastradas':
				require 'paginas/atividadesCadastradas.php';
				break;

			case 'cadastrarAtividades':
				require 'paginas/cadastrarAtividades.php';
				break;

			case 'atividade1':
				require 'paginas/atividade1.php';
				break;
			case 'atividade2':
				require 'paginas/atividade2.php';
				break;
			case 'atividade3':
				require 'paginas/atividade3.php';
				break;
			case 'atividade4':
				require 'paginas/atividade4.php';
				break;
			case 'atividade5':
				require 'paginas/atividade5.php';
				break;	
			case 'cadastrarModulo':
				require 'paginas/cadastrarModulo.php';
				break;
			case 'modulos':
				require 'paginas/modulos.php';
				break;
			case 'editaModulo':
				require 'paginas/editarModulo.php';
				break;
			case 'editaUsuario':
				require 'paginas/editarUsuario.php';
				break;	
			default:
				require 'paginas/home.php';
		}
	}

	function active($pagina, $link=''){
		if($pagina == $link){
			return 'class="active"';
		}
		return '';
	}
	function conecta(){

		$con = mysqli_connect(HOST, USER, PASS, BANCO);

		return $con;
	}
	function ok($dado){
		if($dado == 1){
			return 'Cadastrada';
		} else {
			return 'Não cadastrada';
		}
	}
?>