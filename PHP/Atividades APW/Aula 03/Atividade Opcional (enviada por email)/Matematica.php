<?php
    class Matematica {
        public $numero1;
        public $numero2;
        public $operador;
        public $resultado;

        function soma($numero1, $numero2, $operador) {

            if($operador=="somar") {
                $resultado = $numero1 + $numero2;
                echo "<font size='18'> <center> <b> A soma é $resultado </b> </center> </font>"; 
            }
        }

        function multiplicacao($numero1, $numero2, $operador) {

            if($operador=="multiplicar") {
                $resultado = $numero1 * $numero2;
                echo "<font size='18'> <center> <b> A multiplicação é $resultado </b> </center> </font>"; 
            }
        }

        function raizQuadrada($numero1, $operador) {

            if($operador=="raizq") {
                $resultado = sqrt($numero1);
                echo "<font size='18'> <center> <b> A raíz quadrada é $resultado </b> </center> </font>"; 
            }
        }

        function maiorNumero($numero1, $numero2, $operador) {

            if($operador=="maiornum") {
                if($numero1 > $numero2) {
                    echo "<font size='18'> <center> <b> O maior número é $numero1 </b> </center> </font>";
                } else {
                    echo "<font size='18'> <center> <b> O maior número é $numero2 </b> </center> </font>";
                }                 
            }
        }

        function subtrair($numero1, $numero2, $operador) {

            if($operador=="subtrair") {
                $resultado = $numero1 - $numero2;
                echo "<font size='18'> <center> <b> A subtração é $resultado </b> </center> </font>"; 
            }
        }

        function dividir($numero1, $numero2, $operador) {

            if($operador=="dividir") {
                $resultado = $numero1 / $numero2;
                echo "<font size='18'> <center> <b> A divisão é $resultado </b> </center> </font>"; 
            }
        }

        function potencia($numero1, $numero2, $operador) {

            if($operador=="potencia") {
                $resultado = pow($numero1, $numero2);
                echo "<font size='18'> <center> <b> A potência é $resultado </b> </center> </font>"; 
            }
        }
    }

 $calculo = new Matematica;
 $calcular = new Matematica;


 $calculo -> soma($_POST["numero1"], $_POST["numero2"], $_POST["operador"]);
 $calculo -> multiplicacao($_POST["numero1"], $_POST["numero2"], $_POST["operador"]);
 $calculo -> raizQuadrada($_POST["numero1"], $_POST["operador"]); 
 $calculo -> maiorNumero($_POST["numero1"], $_POST["numero2"], $_POST["operador"]);

 $calcular -> subtrair($_POST["numero1"], $_POST["numero2"], $_POST["operador"]);
 $calcular -> dividir($_POST["numero1"], $_POST["numero2"], $_POST["operador"]);
 $calcular -> potencia($_POST["numero1"], $_POST["numero2"], $_POST["operador"]);
?>