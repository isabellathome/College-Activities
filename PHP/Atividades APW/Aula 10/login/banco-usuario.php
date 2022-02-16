<?php 

    function buscaUsuario($conexao,$login,$senha) {

        $login = mysqli_real_escape_string($conexao, $login); // comando serve para proteger os dados do login

        $sql = "SELECT * FROM usuarios WHERE login='$login'and senha=MD5('$senha')";

        $resultado = mysqli_query($conexao, $sql);
        $usuario = mysqli_fetch_assoc($resultado);
        return $usuario;
    }

?>


