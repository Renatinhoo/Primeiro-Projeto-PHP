<?php //iniciando o arquivo php

class pessoa{       //criando classe pessoa para adicionar os atributos, nome idade etc
    private $nome;    //< atribuindo  variaveis privadas da classe pessoa
    private $endereco;
    private $bairro;
    private $cep;
    private $cidade;
    private $estado; // >
 
    //< Setando encapsulamento
    public function setNome($nome){ // setando e definindo os valores do nome
        $this->nome = $nome; //atribuindo o valor nome a variavel $nome
    }

    public function setEndereco($endereco){ //setando e definindo os valores do endereço
        $this->endereco = $endereco;  //atribuindo o valor endereco a variavel endereco
    }

    public function setBairro($bairro){  // setando e definindo os valores do bairro
        $this->bairro = $bairro;  //atribuindo o valor bairro a variavel $bairro
    }

    public function setCep($cep){ // setando e definindo os valores do cep
        $this->cep = $cep;  //atribuindo o valor cep a variavel $cep
    }

    public function setCidade($cidade){  // setando e definindo os valores da cidade
        $this->cidade = $cidade;  //atribuindo o valor cidade a variavel $cidade
    }

    public function setEstado($estado){ // setando e definindo os valores do estado
        $this->estado = $estado;  //atribuindo o valor estado a variavel $estado
    }
    
    public function getNome(){  // puxando e obtendo as informações atribuidas a variavel nome
        return $this->nome;  //retornando as informações do nome
    }

    public function getEndereco(){  // puxando e obtendo as informações atribuidas a variavel endereco
        return $this->endereco;  //retornando as informações do endereco
    }

    public function getBairro(){  // puxando e obtendo as informações atribuidas a variavel  bairro
        return $this->bairro;  //retornando as informações do bairro
    }

    public function getCep(){  // puxando e obtendo as informações atribuidas a variavel cep
        return $this->cep;  //retornando as informações do cep
    }

    public function getCidade(){  // puxando e obtendo as informações atribuidas a variavel cidade
        return $this->cidade;  //retornando as informações da cidade
    }

    public function getEstado(){  // puxando e obtendo as informações atribuidas a variavel estado
        return $this->estado;  //retornando as informações do estado
    }
     // >
}  
        




?>