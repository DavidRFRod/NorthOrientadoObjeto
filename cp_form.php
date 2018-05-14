<?php
 class CpForm{
     private $nome;
     function __construct($nome) {
         $this -> nome =$nome;
     }
     function render($inputs) {
         $form ="<form  name =\"{$this -> nome}\"/>";
         foreach($inputs as $input =>$valor){
             $form .=$valor -> render();
         }
         $form.="</form>";
         return $form;
     }
 }
