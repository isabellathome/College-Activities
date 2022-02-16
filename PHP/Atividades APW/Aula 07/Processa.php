<?php require_once "conexao.php" ?>

<?php

    $nome = $_POST["nome"];
    $cpf = $_POST["cpf"];
    $endereco = $_POST["endereco"];
    $telefone = $_POST["telefone"];

    function Cadastrar($conexao, $nome, $cpf, $endereco, $telefone) {

        $sql="INSERT INTO funcionario (nome, cpf, endereco, telefone) VALUES ('$nome', '$cpf', '$endereco','$telefone')";
        $resultado = mysqli_query($conexao, $sql);

        return $resultado;
    }

    if (Cadastrar($conexao, $nome, $cpf, $endereco, $telefone)) {
        echo "<center> <font size='15'> Funcionário cadastrado com sucesso! </center> </font>";
    } else {
        echo mysqli_error($conexao);
    }
?>