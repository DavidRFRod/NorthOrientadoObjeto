<?php

class Funcionarios {

    private $database_funcionarios;

    public function __construct($conexao) {
        $this->database_funcionarios = $conexao;
    }

    public function listaFuncionarios() {
        $funcionarios = array();
        $resultado = mysqli_query($this->database_funcionarios->getConexao(), "SELECT * FROM funcionarios");
        while ($funcionario = mysqli_fetch_assoc($resultado)) {
            array_push($funcionarios, $funcionario);
        }
        return $funcionarios;
    }

    public function listaTerritorios() {
        $territorios = array();
        $resultado = mysqli_query($this->database_funcionarios->getConexao(), "SELECT IDTerritorio,DescricaoTerritorio,DescricaoRegiao FROM territorios JOIN regiao ON (territorios.IDRegiao = regiao.IDRegiao)");
        while ($territorio = mysqli_fetch_assoc($resultado)) {
            array_push($territorios, $territorio);
        }
        return $territorios;
    }

    public function listaRegioes() {
        $regioes = array();
        $resultado = mysqli_query($this->database_funcionarios->getConexao(), "SELECT * FROM regiao");
        while ($regiao = mysqli_fetch_assoc($resultado)) {
            array_push($regioes, $regiao);
        }
        return $regioes;
    }

    public function listaTerritorio_Funcionario() {
        $terri_funs = array();
        $resultado = mysqli_query($this->database_funcionarios->getConexao(), "SELECT DescricaoTerritorio, DescricaoRegiao, Nome,Sobrenome "
                . "FROM funcionarios_territorios "
                . "JOIN territorios USING (IDTerritorio) "
                . "JOIN regiao USING (IDRegiao) "
                . "JOIN funcionarios USING (IDFuncionario)");
        while ($terri_fun = mysqli_fetch_assoc($resultado)) {
            array_push($terri_funs, $terri_fun);
        }
        return $terri_funs;
    }

//function listaCategorias($conexao) {
//    $categorias = array();
//    $resultado = mysqli_query($conexao, "select * from categorias");
//    while ($categoria = mysqli_fetch_assoc($resultado)) {
//        array_push($categorias, $categoria);
////        $categorias[] = $categoria;
//    }
//    return $categorias;
//}
    public function alteraFuncionario($IDFuncionario, $Nome, $Sobrenome, $Titulo, $TituloCortesia, $DataNac, $DataAdmissao, $Endereco, $Cidade, $Regiao, $Cep, $Pais, $Extensao, $Notas, $Reportase, $FotoCaminho) {
        $query = "UPDATE funcionarios SET Nome = '$Nome',Sobrenome = '$Sobrenome',Titulo = '$Titulo',TituloCortesia ='$TituloCortesia',DataNac='$DataNac',DataAdmissao='$DataAdmissao',Endereco ='$Endereco',"
                . " Cidade='$Cidade',Regiao ='$Regiao',Cep='$Cep',Pais='$Pais',Extensao='$Extensao',Notas='$Notas',Reportase='$Reportase',FotoCaminho='$FotoCaminho' where IDFuncionario = $IDFuncionario";
        print_r($query);
        return mysqli_query($this->database_funcionarios->getConexao(), $query);
    }

    public function listaAlterar($IDFuncionario) {
        $sql = "SELECT * FROM funcionarios WHERE IDFuncionario = $IDFuncionario";
        $query = mysqli_query($this->database_funcionarios->getConexao(), $sql);
        $resultado = mysqli_fetch_array($query);
        return $resultado;
    }

    public function insereFuncionario($Nome, $Sobrenome, $Titulo, $TituloCortesia, $DataNac, $DataAdmissao, $Endereco, $Cidade, $Regiao, $Cep, $Pais, $Extensao, $Notas, $Reportase, $FotoCaminho) {
        $sqlMaxIdFuncionario = "SELECT max(IDFuncionario) + 1 FROM funcionarios";
        $queryMaxIdFuncionario = mysqli_query($this->database_funcionarios->getConexao(), $sqlMaxIdFuncionario);
        $arrayMaxIdFuncionario = mysqli_fetch_array($queryMaxIdFuncionario);
        $IDFuncionario = $arrayMaxIdFuncionario[0];
        $Reportase = !empty($Reportase) ? $Reportase : "null";
        $query = "insert into funcionarios (IDFuncionario,Nome,Sobrenome,Titulo,TituloCortesia,DataNac,DataAdmissao,Endereco,"
                . "Cidade,Regiao,Cep,Pais,Extensao,Notas,Reportase,FotoCaminho) values  ($IDFuncionario,'$Nome','$Sobrenome','$Titulo','$TituloCortesia','$DataNac','$DataAdmissao','$Endereco',"
                . "'$Cidade','$Regiao','$Cep','$Pais','$Extensao','$Notas',$Reportase,'$FotoCaminho')";
        return mysqli_query($this->database_funcionarios->getConexao(), $query);
    }

    public function deletaFuncionario($IDFuncionario) {
        $funcionarios = array();
        $resultado = mysqli_query($this->database_funcionarios->getConexao(), "DELETE FROM funcionarios WHERE IDFuncionario = $IDFuncionario");
    }
    //function insereCategoria($conexao, $nome) {
//    $query = "insert into categorias (nome) values ('$nome')";
//    return mysqli_query($conexao, $query);
//}


}


