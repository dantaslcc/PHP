<?php

    class Chuteira
    {
        public $Modelo;
        public $Valor;

    }

    $conta1 = new Chuteira();
    $conta2 = new usuario();


    echo '<pre>';
    var_dump($conta1);
    echo '<hr>';

    echo '<pre>';
    var_dump($conta2);
    echo '<hr>';

    class Produto
    {
        public $Modelo;
        public $Valor;
        public $Vendedor;


        public function setModelo(Modelo $Modelo)
        {
            $this->Modelo = $Modelo;
        }

        public function getModelo()
        {
            return $this->modelo;
        }

        public function setValor(valor $Valor )
        {
            $this->valor = $Valor;
        }

        public function getValor()
        {
           return $this->valor;
        }
           
    }

    $objModelo = new Modelo();
    $objModelo->nome = 'NIKE';

    $objValor = new VAlor();
    $objValor->setDados([
        'valor' => 'R$ 600'
        
    ]);


    class usuario
    {
        public $Nome;
        public $cpf;
    }

    class Vendedor 
    {
        public $nome;
        public $telefone;

        public function getNome()
        {
            return $this->nome;
        }

        public function getTelefone()
        {
            return $this->telefone;
        }
    }


?>