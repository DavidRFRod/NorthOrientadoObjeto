<?php

class CpInput {
    private $nome;
    public function __construct($nome) {
       $this ->nome =$nome;
    }
    public function render() {
        $input = "{$this -> nome}<input name=\"{$this -> nome}\"/>";
        return $input;  
    }
}
