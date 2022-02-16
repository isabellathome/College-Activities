<!-- remove-funcionario.php -->

<?php require_once "conecta.php" ?>
<?php require_once "Funcionario.php" ?>
<?php require_once "banco-funcionario.php" ?>

<?php 

    $id = $_POST['id'];
    
    removeFuncionario($conexao, $id);
    header("Location:formListar.php?removido=true");
?>