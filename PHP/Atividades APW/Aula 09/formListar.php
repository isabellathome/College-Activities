<!-- formListar.php -->

<?php require_once "conecta.php" ?>
<?php require_once "Funcionario.php" ?>
<?php require_once "banco-funcionario.php" ?>

<?php 

    listaFuncionario($conexao);
    
?>

<br><a href="index.php"> Voltar </a>