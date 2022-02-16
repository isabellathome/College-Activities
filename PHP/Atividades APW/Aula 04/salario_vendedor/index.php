<html>

    <head>
        <meta charset="utf8">
        <link rel="stylesheet" href="salario.css">
        <title> Salário Mensal </title>
    </head>

    <body>
        
        <center>
        <form action="Salario.php" method="post">
            <fieldset>
                <legend> Salário Mensal </legend>    
                <label> Nome: </label>  
                <input type="text" name="nome">

                <br> <br>

                <label> Salário Fixo: R$</label>  
                <input type="text" name="fixo">

                <br> <br>

                <label> Vendas Efetuadas: R$</label>  
                <input type="text" name="vendas">

                <br> <br>

                <button type="submit"> Calcular </button>
            </fieldset>
        </form>
        </center>

    </body>



</html>