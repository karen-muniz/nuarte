<html>
    <head> <title> Listar cadastros</title>
    <link rel="stylesheet" href="css/listar.css" type="text/css"></head>
    <body>
    <h1>Listar peças </h1>
    <?php 
    $busca ="";
        $mysqli = new mysqli("localhost",
        "root","","cadastro");
        //a variável está recebendo o select do bd
        if($resultado_sel = $mysqli->query("SELECT id,nome_peca,autor,diretor,data_peca,tema,resumo FROM pecas WHERE nome_peca like '".$busca."%'")){
            echo'<table border="2" class="teste">';
            echo '<tr>';
            echo'<td class="tabela">Id</td>';
            echo'<td class="tabela">Nome da peça</td>';
            echo'<td class="tabela">Nome do autor</td>';
            echo'<td class="tabela">Nome do diretor</td>';
            echo'<td class="tabela">Data da peça</td>';
            echo'<td class="tabela">Tema da peça</td>';
            echo'<td class="tabela">Resumo da peça</td>';
            echo'</tr>';

            while($row = mysqli_fetch_assoc($resultado_sel)){
                echo'<tr>';
                echo'<td>'.$row['id'].'</td>';
                echo'<td>'.$row['nome_peca'].'</td>';
                echo'<td>'.$row['autor'].'</td>';
                echo'<td>'.$row['diretor'].'</td>';
                echo'<td>'.$row['data_peca'].'</td>';
                echo'<td>'.$row['tema'].'</td>';
                echo'<td>'.$row['resumo'].'</td>';
            }
            echo'</table>';
            //$resultado_sel->close();
        }
    ?>
    <p>
    <div class="voltar">
    <a href="inicio.php">
        <img src="img/volta.png"></div></p>
</body>
    </html>