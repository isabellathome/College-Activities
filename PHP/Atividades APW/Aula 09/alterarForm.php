<!-- alterarForm -->

<?php require_once "conecta.php" ?>
<?php require_once "Funcionario.php" ?>
<?php require_once "banco-funcionario.php" ?>

<?php

    $funcionario = new Funcionario();

    $funcionario->id = $_GET["id"];
    $funcionario->nome = $_GET["nome"];
    $funcionario->cpf = $_GET["cpf"];
    $funcionario->endereco = $_GET["endereco"];
    $funcionario->telefone = $_GET["telefone"];

    alterar($conexao, $funcionario);
    header("Location:formListar.php?removido=true") // ISSO ENVIA PARA UMA PÁGINA



?>