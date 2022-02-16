<?php

    class Consumo{

        public $km;
        public $litros;
        public $resultado;

        function calculo($km, $litros) {

            if(is_numeric($km) && is_numeric($litros)) {

                $resultado = $km / $litros;
                echo "<font size='18'> <center> <b> Seu consumo médio é de $resultado litros por km! </b> </center> </font>";  
            } else {
                echo "<font size='18'> <center> <b> DIGITE APENAS NÚMEROS! </b> </center> </font>";
            }           
        }
    }
    
    $calcular = new Consumo;

    $calcular -> calculo($_POST["km"], $_POST["litros"]);
?>