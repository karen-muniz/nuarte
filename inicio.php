<?php
	session_start();
	if (empty($_SESSION['email'])){
	header("Location: login.php");
	}
?> 
<html>
<head>
<title> Inicio </title>
<link rel="stylesheet" href="css/inicio.css" type="text/css">
</head>
<body>
<h1> Peças - Nuarte </h1>
<div> 
	<div class="actions">
		<div>
			<a href="index.php">
			<img src="./img/cadastro.png" class="icons"></a>
			<p class="legendas"> Cadastro </p>
			<a href="listar_pecas.php">
			<img src="./img/listar.png" class="icons"></a>
			<p class="legendas"> Listar </p>
			
		</div>
		<div>
			<a href="listar_pecas_edit.php">
			<img src="./img/editar.png" class="icons"></a>
			<p class="legendas"> Editar</p>
			<a href="gerarPDF.php">
			<img src="./img/gerar_pdf.png" class="icons"></a>
			<p class="legendas"> Imprimir</p>

		</div>
		<div>
			<a href="deletar.php">
			<img src="./img/excluir.png" class="icons"></a>
			<p class="legendas"> Excluir</p>
			<a href="sair.php">
			<img src="./img/sair.png" class="icons"></a>
			<p class="legendas"> Sair</p>
		</div>
	</div>
	
	
</div>


</body>

</html>