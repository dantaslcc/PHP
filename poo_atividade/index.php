<?php


    class Chuteira 
{
    
    public $marca;  
    public $modelo; // Propriedades 
    public $preco;    

    // Construtor da classe
    public function chute($marca, $modelo,$preco) // os parametros 
    {     
        
        $this->marca = $marca;  
        $this->modelo = $modelo;    // propriedades 
        $this->preco = $preco;     
    }

    
    public function exibirInformacoes() 
    {
        echo '<hr>';
        echo "Marca : " . $this->marca . "<br>"; 
        echo "Modelo : " . $this->modelo . "<br>";                  // Método para exibir as informações das chuteiras
        echo "Valor R$: " . $this->preco . " Reais" . "<br><br>";
        echo '<hr>';      
    }
}
    
    $chuteira1 = new Chuteira();    // objetos
    $chuteira2 = new Chuteira();

    $chuteira1->chute("NIKE", "Chuteira Mercurial Superfly","560.49");
    $chuteira2->chute("ADIDAS", "Chuteira Adidas Predador","600.00");

    
    $chuteira1->exibirInformacoes();    // metodo para exibir as informações das chuteiras
    $chuteira2->exibirInformacoes();


    class Lojas
    {
        public $nome;
        public $endereco;   //propiedades
        public $telefone;
        public $horario;

    
    public function __construct($nome,$endereco, $telefone, $horario) 
    {
        $this->nome = $nome;
        $this->endereco = $endereco;
        $this->telefone = $telefone;    //contrutor da classe loja
        $this->horario = $horario;
    }

    
    public function exibirInformacoes() 
    {
        echo '<hr>';
        echo "Nome da empresa: " . $this->nome . "<br>";
        echo "Endereço: " . $this->endereco . "<br>";   // exibir as informações da empresa
        echo "Telefone: " . $this->telefone . "<br>";
        echo "Horario: " . $this->horario . "<br><br>";
        echo '<hr>';
    }

    }

       
        $loja1 = new Lojas("NIKE  LOJA-OFICIAL", "Avenida Itaquera n:280", "(11) 70707-07070", "08:00-19:00");    // objeto da classe loja
        $loja2 = new Lojas("ADIDAS BRASIL", "Avenida Corinthians Itaquera n:1910", "(11) 55966-07070", "08:00-19:00");

        
        $loja1->exibirInformacoes();    // método para exibir as informações da loja
        $loja2->exibirInformacoes();

?>

