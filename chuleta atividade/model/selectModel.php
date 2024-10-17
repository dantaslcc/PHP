<?php

require_once("banco/conexao.php");
class Selecao{

    protected $mysqli;

    public function __construct(){
        $this->conexao();
    }

    private function conexao(){
        $this->mysqli = new mysqli(BD_SERVIDOR, BD_USUARIO, BD_SENHA, BD_BANCO);

    }
    
    public function getDestaques(){
        $result = $this->mysqli->query("select *from vw_produtos where produtos = 'sim'");
        while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
            $array[] = $row;
        }
        return $array;
    }
}


?>