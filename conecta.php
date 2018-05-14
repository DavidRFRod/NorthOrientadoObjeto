<?php

class BancoDeDados {

    private $conexao;

    public function __construct($host, $user, $key, $base) {
        $this->conexao = mysqli_connect($host, $user, $key, $base);
    }

    public function getConexao() {
        return $this->conexao;
    }

}