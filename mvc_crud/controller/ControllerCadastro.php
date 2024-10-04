<?php
require_once("../model/cadastroLivro.php");
class cadastroController{

    private $cadastro;
    public function __construct()
    {
        $this->cadastro = new Cadastro();
        $this->incluir();
    }


    private function incluir()
    {
        $this->cadastro->setNome($_POST['nome']);
        $this->cadastro->setAutor($_POST['autor']);
        $this->cadastro->setQuantidade($_POST['quantidade']);
        $this->cadastro->setPreco($_POST['preco']);
        $this->cadastro->setData(date('Y-m-d',strtotime($_POST['nome'])));
        $result = $this->cadastro->incluir();
        if ($result >= 1) {
            echo "<script>alert('Registro incluido com sucesso!');document.location='../view/cadastro.php'</script>";
        }else {
            echo "<script>alert('Erro ao gravar registro!, verifique se o livro não esta duplicado');history.back()</script>";
            
        }
    }
}
new cadastroController();































?>