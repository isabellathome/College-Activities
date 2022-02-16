<?php

    session_start(); // início da sessão
 // ----------------------------------------

    function usuarioEstaLogado() {

        return isset ($_SESSION["usuario_logado"]); // para verificar se o úsurio existe (isset) e a session para ver se o usuario ta logado

    } // fim da função usuarioEstaLogado

 // ------------------------------------------

    function usuarioLogado() {

        return $_SESSION["usuario_logado"]; // é chamado na index

    } // fim da função usuarioLogado

 // ------------------------------------------------

    function logaUsuario($_login) { // é chamado na login.php

        $_SESSION["usuario_logado"]=$_login;

    } // fim da função logaUsuario

 // ------------------------------------------------

    function logout() {

        session_destroy();

    } // fim da função logout

 // ------------------------------------------------
?>
