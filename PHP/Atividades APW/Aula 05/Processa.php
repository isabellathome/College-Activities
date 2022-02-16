<?php

    class Processa {

       public $matricula;
       public $tipo;
       public $livro;
       public $data_limite;
       public $data_entregou;
       public $multa;

       function calcular_multa($data_entregou, $data_limite) {

            $multa = $data_entregou - $data_limite;
            return $multa;
        }

       function dados($matricula, $tipo, $livro, $data_entregou, $multa) {

            echo "<font size='15'> <center> <b> Matrícula: $matricula <br>
                  Tipo de Usúario: $tipo <br>
                  Nome do Livro: $livro <br>
                  Dia em que foi entregue: $data_entregou <br>
                  Valor da Multa: $multa </b> </center> </font>";

       }
    }

    $calculo = new Processa;

    $multa = $calculo -> calcular_multa($_POST["data_entregou"], $_POST["data_limite"]);

    $calculo -> dados($_POST["matricula"], $_POST["tipo"], $_POST["livro"], $_POST["data_entregou"], $multa);






?>