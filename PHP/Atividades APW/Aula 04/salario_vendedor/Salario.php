<?php

    class Salario{

        public $nome;
        public $fixo;
        public $vendas;
        public $comissao;
        public $final;

        function calculo_comissao($fixo, $vendas) {

            if(is_numeric($fixo) && is_numeric($vendas)) {
                $comissao = $vendas * 0.15;
                return $comissao;
            } else {
                echo "<font size='18'> <center> <b> DIGITE SUAS VENDAS! APENAS NÚMEROS </b> </center> </font>";
            }
        }

        function salario_final($nome, $comissao, $fixo) {

            if(is_numeric($fixo)) {
                $final = $fixo + $comissao;
                echo "<font size='18'> <center> <b> Vendedora(o): $nome <br> Salário Fixo: $fixo <br> Comissão: $comissao <br> Salário ao final do mês: $final </b> </center> </font>";
            } else {
                echo "<font size='18'> <center> <b> DIGITE SEU SALÁRIO! APENAS NÚMEROS </b> </center> </font>";
            }            
        }
    }

    $vendedor = new Salario;

    $comissao = $vendedor -> calculo_comissao($_POST["fixo"], $_POST["vendas"]);

    $vendedor -> salario_final($_POST["nome"], $comissao, $_POST["fixo"]);
?>