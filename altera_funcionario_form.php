<?php
include_once("cabecalho.php");
include_once ("conecta.php");
include_once ("database_funcionarios.php");

$conexao = new BancoDeDados("localhost", "root", "", "north");
$funcionariosAlt = new Funcionarios($conexao);    

$funcionarios = $funcionariosAlt->listaAlterar($_GET["IDFuncionario"]);
?>


<div class="col-sm-4">
    <form action="altera_funcionario.php" method="post">
        <fieldset>
            <input type="hidden" id="IDFuncionario" name='IDFuncionario' value="<?= $_GET["IDFuncionario"] ?>">
            <div class="form-group">
                <label for="Nome">Nome</label>
                <input type="text" class="form-control" id="Nome" name='Nome' placeholder="Nome" value="<?= $funcionarios["Nome"] ?>" >
            </div>
            <div class="form-group">
                <label for="Sobrenome">Sobrenome</label>
                <input type="text" class="form-control" id="Sobrenome" name='Sobrenome' placeholder="Sobrenome" value="<?=$funcionarios["Sobrenome"]?>">
            </div>
            <div class="form-group">
                <label for="Titulo">Título</label>
                <input type="text" class="form-control" id="Título" name='Titulo' placeholder="Título"value="<?=$funcionarios["Titulo"]?>">
            </div>
            <div class="form-group">
                <label for="Título de Cortesia">Título de Cortesia</label>
                <input type="text" class="form-control" id="TituloCortesia" name='TituloCortesia' placeholder="Título de Cortesia" value="<?=$funcionarios["TituloCortesia"]?>">
            </div>
            <div class="form-group col-sm-6">
                <label for="Data de Nascimento">Data de Nascimento</label>
                <input type="text" class="form-control" id="DataNac" name='DataNac' placeholder="Data de Nascimento" value="<?=$funcionarios["DataNac"]?>">
            </div>
            <div class="form-group col-sm-6">
                <label for="Data de Admissão">Data de Admissão</label>
                <input type="text" class="form-control" id="DataAdmissao" name='DataAdmissao' placeholder="Data de Admissão" value="<?=$funcionarios["DataAdmissao"]?>">
            </div>
            <div class="form-group">
                <label for="Endereco">Endereço</label>
                <input type="text" class="form-control" id="Endereco" name='Endereco' placeholder="Endereço" value="<?=$funcionarios["Endereco"]?>">
            </div>
            <div class="form-group">
                <label for="Cidade">Cidade</label>
                <input type="text" class="form-control" id="Cidade" name='Cidade' placeholder="Cidade" value="<?=$funcionarios["Cidade"]?>">

            </div>
            <div class="form-group">
                <label for="Regiao">Região</label>
                <input type="text" class="form-control" id="Regiao" name='Regiao' placeholder="Região" value="<?=$funcionarios["Regiao"]?>">
            </div>
            <div class="form-group">
                <label for="Cep">Cep</label>
                <input type="text" class="form-control" id="Cep" name='Cep' placeholder="Cep" value="<?=$funcionarios["Cep"]?>">
            </div>
            <div class="form-group">
                <label for="Pais">País</label>
                <input type="text" class="form-control" id="Pais" name='Pais' placeholder="País" value="<?=$funcionarios["Pais"]?>">
            </div>
            <div class="form-group">
                <label for="Extensao">Extensão</label>
                <input type="text" class="form-control" id="Extensao" name='Extensao' placeholder="Extensao" value="<?=$funcionarios["Extensao"]?>">
            </div>
            <div class="form-group">
                <label for="Notas">Notas</label>
                <textarea  class="form-control" id="Notas" name='Notas' rows="2"><?=$funcionarios["Notas"]?></textarea>
            </div>
            <div class="form-group">
                <label for="Reportase">Reportase</label>
                <input type="text" class="form-control" id="Reportase" name='Reportase' placeholder="Reportase" value="<?=$funcionarios["Reportase"]?>">
            </div>
            <div class="form-group">
                <label for="FotoCaminho">Caminho da Foto</label>
                <input type="text" class="form-control" id="FotoCaminho" name='FotoCaminho' placeholder="Caminho da Foto" value="<?=$funcionarios["FotoCaminho"]?>">
                <button class=" btn btn-primary" type="submit" >Confirmar</button>
            </div>
        </fieldset>
    </form>
</div>
