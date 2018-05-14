<?php
include_once ("conecta.php");
include_once ("database_funcionarios.php");

$conexao = new BancoDeDados('localhost', 'root', '', 'north');
$funcionariosIns = new Funcionarios($conexao);

$Nome = $_POST['Nome'];
$Sobrenome = $_POST['Sobrenome'];
$Titulo = $_POST['Titulo'];
$TituloCortesia = $_POST['TituloCortesia'];
$DataNac = $_POST['DataNac'];
$DataAdmissao = $_POST['DataAdmissao'];
$Endereco = $_POST['Endereco'];
$Cidade = $_POST['Cidade'];
$Regiao = $_POST['Regiao'];
$Cep = $_POST['Cep'];
$Pais = $_POST['Pais'];
$Extensao = $_POST['Extensao'];
$Notas = $_POST['Notas'];
$Reportase = $_POST['Reportase'];
$FotoCaminho = $_POST['FotoCaminho'];

$funcionariosIns->insereFuncionario($Nome, $Sobrenome, $Titulo, $TituloCortesia, $DataNac, $DataAdmissao, $Endereco, $Cidade, $Regiao, $Cep,
        $Pais, $Extensao, $Notas, $Reportase,$FotoCaminho);

        
header('Location:funcionarios.php');