<?php
include_once("cabecalho.php");
include_once ("conecta.php");
include_once ("database_funcionarios.php");

$conexao = new BancoDeDados('localhost', 'root', '', 'north');
$funcionariosTer = new Funcionarios($conexao);
?>
<table class="table table-striped table-bordered">
    <tr>
        <td>ID Terrritório</td>
        <td>Descrição</td>
        <td>Região</td>      
    </tr>
   <?php
        $territorios = $funcionariosTer->listaTerritorios();
        foreach ($territorios as $territorio) {
            ?>

            <tr>
               <td><?= $territorio["IDTerritorio"] ?></td>
            <td><?= $territorio["DescricaoTerritorio"] ?></td>
            <td><?= $territorio["DescricaoRegiao"] ?></td>
            </tr>
            <?php
        }
        ?>
</table>