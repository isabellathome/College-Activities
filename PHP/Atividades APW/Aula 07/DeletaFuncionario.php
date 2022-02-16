<?php require_once "conexao.php" ?>

<?php

    $cpf = $_POST["cpf"];
    
    function Deletar($conexao, $cpf) {

        $sql="DELETE FROM funcionario WHERE cpf = $cpf";
        $resultado = mysqli_query($conexao, $sql);

        return $resultado;
    }

    if (Deletar($conexao, $cpf)) {
        echo "<center> <font size='15'> Funcionário deletado com sucesso! </center> </font>";
    } else {
        echo mysqli_error($conexao);
    }
?>