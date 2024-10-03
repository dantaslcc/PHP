
<?php 

    class Calculadora 
    {
        public function Soma($num1,$num2)
        {
            echo "A Soma de: $num1 e $num2 é: ".$num1+$num2;
            echo '<hr>';
        }

        public function Subtracao($num1,$num2)
        {
            echo "A Subtração de: $num1 e $num2 é: ".$num1-$num2;
            echo '<hr>';
        }

        public function Mutiplicacao($num1,$num2)
        {
            echo " A Multiplicação de : $num1 e $num2 é: ".$num1*$num2;
            echo '<hr>';
        }

        public function Divisao($num1,$num2)
        {
            echo " A Divisão de : $num1 e $num2 é: ".$num1/$num2;
            echo '<hr>';
        }
    }

    $calculadora = new Calculadora();
    $calculadora->Soma(4,5);
    $calculadora->Subtracao(47,25);
    $calculadora->Divisao(16,4);
    $calculadora->Mutiplicacao(21,45);


 

?>
