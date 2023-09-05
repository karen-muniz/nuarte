<?php

session_start();
if (empty($_SESSION['email'])){
header("Location: login.php");
}

include './fpdf/fpdf.php';
include './conexao.php';

$pessoas = selectAllPessoa();

$pdf = new FPDF();
$pdf->AddPage();
//para o cabeçalho
$pdf->SetFont('Arial','B',16);
$pdf->Cell(190,10,utf8_decode('Relatório de peças'),0,0,"C");
$pdf->Ln(15);

$pdf->SetFont("Arial","I",10);
$pdf->Cell(65,10,"Nome",1,0,"C");
$pdf->Cell(30,10,"Autor",1,0,"C");
$pdf->Cell(30,10,"Diretor",1,0,"C");
$pdf->Cell(30,10,"Data",1,0,"C");
$pdf->Cell(30,10,("Tema"),1,0,"C");

$pdf->Ln();

foreach ($pessoas as $pessoa){
    $pdf->Cell(65,20,utf8_decode($pessoa["nome_peca"]),1,0,"C");
    $pdf->Cell(30,20,utf8_decode($pessoa["autor"]),1,0,"C");
    $pdf->Cell(30,20,utf8_decode($pessoa["diretor"]),1,0,"C");
    $pdf->Cell(30,20,  formatoData($pessoa["data_peca"]),1,0,"C");
    $pdf->Cell(30,20,utf8_decode($pessoa["tema"]),1,0,"C");
    $pdf->Ln();
}

$pdf->Output();
