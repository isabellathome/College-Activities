<html>

 <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="calculadora.css">
 </head>

 <body>
     <form method="POST" action="Calculadora.php">
     <center> <h1> Calculadora </h1></center>
     <center> <br>
        <p> Número 1: </p> 
        <input type="text" name="numero1"> <br> <br>
        <p> Número 2: </p>
        <input type="text" name="numero2"> <br> <br>

        <button type="submit" class="btn btn-primary" name="acao" value="somar"> Somar </button>
        <button type="submit" class="btn btn-primary" name="acao" value="subtrair"> Subtrair </button>
        <button type="submit" class="btn btn-primary" name="acao" value="multiplicar"> Multiplicar </button>
        <button type="submit" class="btn btn-primary" name="acao" value="dividir"> Dividir </button>

     </center>
     </form>

 </body>

</html>