<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="calculadora.css">
</head>

<body>
    <h1> <strong> CALCULADORA </strong> </h1>

    <form name="calculadora" method=GET action="processaCalculadora.php">
       Número 1: <input type="number" name="num1" placeholder="Digite um número"> <br> <br>
       Número 2: <input type="number" name="num2" placeholder="Digite outro número"> <br> <br>

       <input class="button" type="submit" name="somar" value="SOMAR">
       <input class="button" type="submit" name="subtrair" value="SUBTRAIR">
       <input class="button" type="submit" name="multiplicar" value="MULTIPLICAR">
       <input class="button" type="submit" name="dividir" value="DIVIDIR">

    </form>

</body>

</html>