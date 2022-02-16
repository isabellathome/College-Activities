<!-- adiciona-funcionario.php -->

<?php require_once "conecta.php" ?>
<?php require_once "Funcionario.php" ?>
<?php require_once "banco-funcionario.php" ?>

<?php

    $funcionario = new Funcionario();
    $funcionario->nome = $_POST['nome'];
    $funcionario->cpf = $_POST['cpf'];
    $funcionario->endereco = $_POST['endereco'];
    $funcionario->telefone = $_POST['telefone'];
  
    // chamar o método insereFuncionario

    if (insereFuncionario($conexao, $funcionario)) {
        echo "<center> <h1> Cadastro realizado com sucesso! <h1> </center>";
    } else {
        echo mysqli_error($conexao);
    }

    // -------------------------------------
?>
  <center>
        <br><a href="index.php"> Voltar </a>
        <br><a href="formListar.php"> Listar </a>
        <br><a href="formLocalizar.php"> Localizar </a>
  </center>
    
