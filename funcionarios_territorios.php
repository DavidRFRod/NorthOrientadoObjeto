<?php
include_once("cabecalho.php");
include_once ("conecta.php");
include_once ("database_funcionarios.php");
$conexao = new BancoDeDados('localhost', 'root', '', 'north');
$funcionariosTer_Fun = new Funcionarios($conexao);
?>
<table class="table table-striped table-bordered">
    <tr>
        <td>ID Funcionário</td>
        <td>ID Região</td>
        <td>Nome</td>
        <td>Sobrenome</td>
             
    </tr>
    <?php
        $terri_funs = $funcionariosTer_Fun->listaTerritorio_Funcionario();
        foreach ($terri_funs as $terri_fun) {
            ?>

            <tr>
                <td><?= $terri_fun["DescricaoTerritorio"] ?></td>
                <td><?= $terri_fun["DescricaoRegiao"] ?></td>
                <td><?= $terri_fun["Nome"] ?></td>
                <td><?= $terri_fun["Sobrenome"] ?></td>
            </tr>
            <?php
        }
        ?>
</table>