<html>
    <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/css/bootstrap.css">
    <title> BIBLIOTECA </title>

    <body style="background: linear-gradient(to top, #669999 -1%, #ffffff 100%);
       font-size: 17px ">

      <br> <br>
        <form method="POST" action="Processa.php">
            <center>
                <fieldset style="border: 2px solid;border-radius: 10px; width: 300">

                    <div>
                        <h1 >Biblioteca </h1>
                    </div>

                    <hr /> <br>

                    <div>
                        <legend> <b> Dados do Usuário </b> </legend>
                    </div> <br>

                    <div>
                        <label> Matrícula: </label>
                        <input type="text" name="matricula">
                    </div> <br>

                    <div>
                        <label> Tipo de Usuário: </label>
                        <input type="radio" name="tipo" value="Aluno"> Aluno
                        <input type="radio" name="tipo" value="Professor"> Professor
                    </div>

                    <br>  <hr /> <br>

                    <div>
                        <legend> <b> Dados do Livro </b> </legend>
                    </div> <br>

                    <div>
                        <label> Nome do Livro: </label> <br>
                        <input type="text" name="livro">
                    </div> <br>

                    <div>
                        <label> Dia de Entrega: </label> <br>
                        <input type="text" name="data_limite">
                    </div> <br>

                    <div>
                        <label> Data que entregou: </label> <br>
                        <input type="text" name="data_entregou">
                    </div> <br>

                    </fieldset>
                <br>
                    <button type="submit" class="btn btn-outline-primary"> Efetuar </button>
                    <button type="reset" class="btn btn-outline-primary"> Apagar </button>

        </center>
    </body>
</html>