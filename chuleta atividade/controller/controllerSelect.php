<?php
require_once("model/cliente/selectModel.php");
class selectController{

    private $lista;

    public function __construct(){
        $this->lista = new Selecao();
        $this->criar->criarDestaque();
    }

    private function criarDestaques(){
        $dados = $this->lista->getDestaques();
        foreach ($dados as $dado){
            // var_dymp($dado);
        }
    }
}


?>