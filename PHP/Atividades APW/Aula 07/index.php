<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Funcionários </title>

    <style>
        body {margin-top: 100px;
            background-color: #ffffcc;
        }
        button {width: 110px;
            height: 27px;
        }
        .cad {background-color: #ff6600;}
        .apagar {background-color: #ff0000;}
    
    </style>

</head>

<body">

 <center>
    <form action="Processa.php" method="post">
        <fieldset style="border: 2px solid; border-radius: 10px; width: 450px">

            <div>
                <h1> Cadastro de Funcionários </h1>
            </div>

            <hr> <br>

            <div> 
                <label> Nome: </label> <input type="text" name="nome" id="nome" size="15"> <br> <br>
                <label> CPF: </label> <input type="text" name="cpf" id="cpf" size="16"> <br> <br>
                <label> Endereço: </label> <input type="text" name="endereco" id="endereco" size="12"> <br> <br>
                <label> Telefone: </label> <input type="text" name="telefone" id="telefone" size="13"> <br> <br>
            </div>

            <br>
            <button class="cad" type="submit"> CADASTRAR </button>
     
    </form>
    
    <button class="apagar"> <a style="text-decoration: none; color: inherit;" href="Deleta.php"> DELETAR </a> </button>

    </fieldset>
  </center>
</body>
</html>