<?php
include_once("cabecalho.php");
include_once ("conecta.php");
include_once ("database_funcionarios.php");
?>
<!DOCTYPE html>
<html>
    <div class="col-sm-4">
        <form action="insere_funcionario.php" method="POST">
            <fildset>
                <div class="form-group">
                    <input type="hidden" class="form-control" id="IDFuncionario" name='IDFuncionario' placeholder="ID Funcionario">
                </div>
                <div class="form-group">
                    <label for="Nome">Nome</label>
                    <input type="text" class="form-control" id="Nome" name='Nome' placeholder="Nome">
                </div>
                <div class="form-group">
                    <label for="Sobrenome">Sobrenome</label>
                    <input type="text" class="form-control" id="Sobrenome" name='Sobrenome' placeholder="Sobrenome">
                </div>
                <div class="form-group">
                    <label for="Titulo">Título</label>
                    <input type="text" class="form-control" id="Título" name='Titulo' placeholder="Título">
                </div>
                <div class="form-group">
                    <label for="Título de Cortesia">Título de Cortesia</label>
                    <input type="text" class="form-control" id="TituloCortesia" name='TituloCortesia' placeholder="Título de Cortesia">
                </div>
                <div class="form-group col-sm-6">
                    <label for="Data de Nascimento">Data de Nascimento</label>
                    <input type="text" class="form-control" id="DataNac" name='DataNac' placeholder="Data de Nascimento">
                </div>
                <div class="form-group col-sm-6">
                    <label for="Data de Admissão">Data de Admissão</label>
                    <input type="text" class="form-control" id="DataAdmissao" name='DataAdmissao' placeholder="Data de Admissão">
                </div>
                <div class="form-group">
                    <label for="Endereco">Endereço</label>
                    <input type="text" class="form-control" id="Endereco" name='Endereco' placeholder="Endereço">
                </div>
                <div class="form-group">
                    <label for="Cidade">Cidade</label>
                    <input type="text" class="form-control" id="Cidade" name='Cidade' placeholder="Cidade">
                    
                </div>
                <div class="form-group">
                    <label for="Regiao">Região</label>
                    <input type="text" class="form-control" id="Regiao" name='Regiao' placeholder="Região">
                </div>
                <div class="form-group">
                    <label for="Cep">Cep</label>
                    <input type="text" class="form-control" id="Cep" name='Cep' placeholder="Cep">
                </div>
                <div class="form-group">
                    <label for="Pais">País</label>
                    <input type="text" class="form-control" id="Pais" name='Pais' placeholder="País">
                </div>
                <div class="form-group">
                    <label for="Extensao">Extensão</label>
                    <input type="text" class="form-control" id="Extensao" name='Extensao' placeholder="Extensao">
                </div>
                <div class="form-group">
                    <label for="Notas">Notas</label>
                    <textarea  class="form-control" id="Notas" name='Notas'rows="2" ></textarea>
                </div>
                <div class="form-group">
                    <label for="Reportase">Reportase</label>
                    <input type="text" class="form-control" id="Reportase" name='Reportase' placeholder="Reportase">
                </div>
                <div class="form-group">
                    <label for="FotoCaminho">Caminho da Foto</label>
                    <input type="text" class="form-control" id="FotoCaminho" name='FotoCaminho' placeholder="Caminho da Foto">
                     <button class=" btn btn-primary" type="submit">Cadastrar</button>
                </div>
<!--                <div class="form-group">
                    <label for="Categoria">Categoria</label>
                    <select class="form-control" name="Categorias" >
                        <?php
                        $categorias = listaCategorias($conexao);
                        foreach ($categorias as $categoria) {
                            ?>
                            <option value="<?= $categoria["id"] ?>"><?= $categoria["nome"] ?></option>
                            <?php
                        }
                        ?>
                    </select>
                </div> -->
                </div>
            </fildset>
        </form>
</html>
<?php
// $produtos = alteraProduto($conexao, $id, $nome, $preco, $descricao, $categoria_id) 
// foreach ($ca_)        
?>
<?php
include_once ("rodape.php");
?>

