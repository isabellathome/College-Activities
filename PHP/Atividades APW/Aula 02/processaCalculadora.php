<?php
    if(isset($_GET["somar"])) {
        $num1 = $_GET["num1"];
        $num2 = $_GET["num2"];
        $somar = $num1 + $num2;
        echo "<font size='18'> <center> <b> A soma é $somar </font> </b> </center>";
    }

    if(isset($_GET["subtrair"])) {
        $num1 = $_GET["num1"];
        $num2 = $_GET["num2"];
        $subtrair = $num1 - $num2;
        echo "<font size='18'> <center> <b> A subtração é $subtrair </font> </b> </center>";
    }

    if(isset($_GET["multiplicar"])) {
        $num1 = $_GET["num1"];
        $num2 = $_GET["num2"];
        $multiplicar = $num1 * $num2;
        echo "<font size='18'> <center> <b> A multiplicação é $multiplicar </font> </b> </center>";
    }

    if(isset($_GET["dividir"])) {
        $num1 = $_GET["num1"];
        $num2 = $_GET["num2"];
        $dividir = $num1 / $num2;
        echo "<font size='18'> <center> <b> A divisão é $dividir </font> </b> </center>";
    }

?>