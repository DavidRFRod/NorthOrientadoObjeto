<?php
include_once("cabecalho.php");
include_once ("conecta.php");
include_once ("database_funcionarios.php");

$conexao = new BancoDeDados("localhost", "root", "", "north");
$funcionariosReg = new Funcionarios($conexao);
?>
<table class="table table-striped table-bordered">
    <tr>
        <td>IDRegião</td>
        <td>Descrição</td>
             
    </tr>
   <?php
        $regioes = $funcionariosReg->listaRegioes();
        foreach ($regioes as $regiao) {
            ?>

            <tr>
                <td><?= $regiao["IDRegiao"] ?></td>
                <td><?= $regiao["DescricaoRegiao"] ?></td>
            </tr>
            <?php
        }
        ?>
</table>
