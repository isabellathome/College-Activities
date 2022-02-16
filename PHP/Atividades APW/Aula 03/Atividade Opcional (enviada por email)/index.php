<html>

    <head>
        <meta charset="UTF-8"> </meta>
        <link rel="stylesheet" href="calculadora.css">
    </head>

    <body>
        <h1> Calculadora </h1> <br>

        <form action="Matematica.php" method="POST">
            
            <p> Escolha um número: </p> 
            <input type="text" name="numero1">

            <p> Escolha outro número: </p>
            <input type="text" name="numero2">
            
            
            <br> <br>

            <p class="calculo"> Escolha o cálculo matemático </p>

            <button id="button" type="submit" name="operador" value="somar"> Soma </button>
            <button id="button" type="submit" name="operador" value="subtrair"> Subtração </button>
            <button id="button" type="submit" name="operador" value="multiplicar"> Multiplicação </button>
            <button id="button" type="submit" name="operador" value="dividir"> Divisão </button>

            <br>

            <button id="button" type="submit" name="operador" value="raizq"> Raíz Quadrada </button>
            <button id="button" type="submit" name="operador" value="potencia"> Potencialização </button>
            <button id="button" type="submit" name="operador" value="maiornum"> Maior Número </button>

        </form>

    </body>

</html>