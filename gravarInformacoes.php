<?php
session_start();
include_once("conexao.php");
?>
<?php
    $nome_peca = filter_input(INPUT_POST, 'nome_peca', FILTER_SANITIZE_STRING);
    $autor = filter_input(INPUT_POST, 'autor', FILTER_SANITIZE_STRING);
    $diretor = filter_input(INPUT_POST, 'diretor', FILTER_SANITIZE_STRING);
    $data_peca = filter_input(INPUT_POST, 'data_peca', FILTER_SANITIZE_STRING);
    $tema = filter_input(INPUT_POST, 'tema', FILTER_SANITIZE_STRING);
    $resumo = filter_input(INPUT_POST, 'resumo', FILTER_SANITIZE_STRING);
    
    $resultado = "INSERT INTO pecas (nome_peca,autor,diretor,data_peca,tema,resumo) VALUES ('$nome_peca', '$autor','$diretor','$data_peca','$tema','$resumo')";
    $resultado_banco = mysqli_query($conn, $resultado);
    header("Location:index.php");
?>