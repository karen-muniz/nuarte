<html>
	<head>
	<link rel="stylesheet" href="css/index.css"  type="text/css"/> 
<?php
session_start();
if (empty($_SESSION['email'])){
header("Location: login.php");
}
?>
		<title>Cadastro de peças</title>	
		
		
		
	</head>
	<body>
		<tr>
		<td>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<h1>Cadastrar peças</h1>
		<div class="bloco">
		<form method="POST" action="gravarInformacoes.php">
		<p><label> Nome da peça: </label>
		<input type ="text" name="nome_peca" placeholder ="Digite o nome da peça"/> <br/></p>
		<p><label> Autor da peça: </label>
		<input type ="text" name="autor" placeholder ="Digite o nome do autor."/> <br/></p>
		<p><label> Diretor da peça: </label>
		<input type ="text" name="diretor" placeholder ="Digite o nome dos diretores."/> <br/><p>
		<p><label> Data da peça: </label>
		<input type ="date" name="data_peca" placeholder="Digite a data da apresentação"/> <br/></p>
		<p><label> Tema da peça: </label>
		<input type ="text" name="tema" placeholder="Digite o tema do ano da peça"/> <br/></p>
		<p><label> Resumo da peça : </label>
		<input type ="text" name="resumo" placeholder="Faça um pequeno resumo"/> <br/></p>

		<input type="submit" value ="Cadastrar" class="submit" />  
		<input type="reset" value ="Limpar" class="submit"/>  
		</div>
</form> 
<div class="voltar">
    <a href="inicio.php">
        <img src="img/volta.png"></div></p>
	</body>

</html>
