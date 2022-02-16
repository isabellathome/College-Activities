<!-- logout.php -->
<?php require_once "logica-usuario.php" ?>

<?php

    logout(); // chmar a função logout para destruir a sessão. Tá dentro da página validaCadastro.php

    header("Location:index.php?logout=true");

    die(); // para "queimar os arquivos" e não ocorre problema na segurança

?>