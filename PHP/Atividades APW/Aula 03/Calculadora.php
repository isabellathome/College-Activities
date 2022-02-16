<?php

class Calculadora {
    // Atributos
    public $numero1;
    public $numero2;
    public $acao;
    public $resultado;

    // método:
        function calcular($numero1, $numero2, $acao) {

            if($acao=="somar") {
                $resultado = $numero1 + $numero2;
                echo "<font size='18'> <center> <b> A soma é $resultado </b> </center> </font>"; 
            }

            if($acao=="subtrair") {
                $resultado = $numero1 - $numero2;
                echo "<font size='18'> <center> <b> A subtração é $resultado </b> </center> </font>"; 
            }

            if($acao=="multiplicar") {
                $resultado = $numero1 * $numero2;
                echo "<font size='18'> <center> <b> A multiplicação é $resultado </b> </center> </font>"; 
            }

            if($acao=="dividir") {
                $resultado = $numero1 / $numero2;
                echo "<font size='18'> <center> <b> A divisão é $resultado </b> </center> </font>"; 
            }

        } 
    // fim do método
 } // fim da classe

 // Criação do objeto;
 $calculo = new Calculadora;

 // Chamando o método e passando os valores:
 $calculo->calcular($_POST["numero1"],
                      $_POST["numero2"],
                      $_POST["acao"]);
    
?>