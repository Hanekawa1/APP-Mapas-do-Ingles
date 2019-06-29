<!-- Fixed navbar -->
	<nav class="navbar-dark navbar-default navbar-fixed-top">
	    <div class="container">
	        <div class="navbar-header">
	            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
	                <span class="sr-only">Navegação</span>
	                <span class="icon-bar"></span>
	                <span class="icon-bar"></span>
	                <span class="icon-bar"></span>
	            </button>
	            <a class="navbar-brand"></a>
	        </div>
	        <div id="navbar" class="navbar-collapse collapse">
	            <ul class="nav navbar-nav">
	                <li <?php echo active($get); ?>><a href="index.php">Home</a></li>
	                <li <?php echo active($get, 'atividadesCadastradas'); ?>><a href="?pagina=atividadesCadastradas">Cadastrar Atividades</a></li>

	                <li <?php echo active($get, 'modulos'); ?>><a href="?pagina=modulos">Cadastrar Módulos</a>
	                </li>
	                <li <?php echo active($get, 'usuarios'); ?>><a href="?pagina=usuarios">Cadastrar Usuários</a></li>

	            </ul>
	        </div><!--/.nav-collapse -->
	    </div>
	</nav>