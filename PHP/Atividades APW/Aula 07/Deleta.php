<head>
    <style>
        body {margin-top: 100px;
            background-color: #ffffcc;
        }
        input {margin-top: 10px;}
        button {background-color: #ff0000;
            width: 110px;
            height: 27px;
        }
    
    </style>

</head>

<center>
    <form action="DeletaFuncionario.php" method="post">
        <fieldset style="border: 2px solid; border-radius: 10px; width: 450px">

            <div>
                <h1> Registro de Funcionários </h1>
            </div>

            <hr> <br>

            <div> 
                <label> CPF do funcionário que deseja retirar do sistema: </label> <br>
                <input type="text" name="cpf" id="cpf" size="18"> <br> 
            </div>

            <br> <br>
            <button type="submit"> APAGAR </button>
     
    </form>

    </fieldset>
  </center>