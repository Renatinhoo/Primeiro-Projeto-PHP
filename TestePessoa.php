<?php  //iniciando o php

require_once("Pessoa.class.php");  //importando a classe pessoa do outro documento

$pessoa = new Pessoa(); //instanciando a pessoa
$pessoa->setNome("Renato Moreira botura Da Costa"); //setando o valor da variavel nome
echo $pessoa->getNome(); //exibindo a variavel a informação e o valor da variavel nome

?>