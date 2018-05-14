<?php

include_once ("conecta.php");
include_once ("database_funcionarios.php");

$conexao = new BancoDeDados('localhost', 'root', '', 'north');
$funcionariosDel = new Funcionarios($conexao);
$IDFuncionario = $_GET['IDFuncionario'];

$funcionariosDel->deletaFuncionario($IDFuncionario);

function printaMensagemERedirecionaPagina($mensagem){
    echo "<script>alert('$mensagem'); window.location='funcionarios.php'</script>";
}

header('Location:funcionarios.php');

?>

