<?php require_once "conexao.php" ?>
<?php require_once "Formulario.php" ?>
<?php require_once "informacoes.php" ?>

<?php

    $formInfo = new Formulario();
    $formInfo->nome = $_POST['nome'];
    $formInfo->email = $_POST['email'];
    $formInfo->mensagem = $_POST['mensagem'];

    foreach ($_POST as $campo => $res) {
        if (empty($res)){
            echo "<center> <h1> Campo ".$campo." em branco! Preencha, por favor! </h1> </center>";
            exit;
        }
    }

    if (insereInformacao($conexao, $formInfo)) {
        echo "<center> <h1> Dados armazenados no banco de dados com sucesso! <h1> </center>";
    } else {
        echo mysqli_error($conexao);
    }  

?> <br>
  
    <h2> Nome: <?php echo $_POST["nome"] ?> </h2>
    <h2> Email: <?php echo $_POST["email"] ?> </h2>
    <h2> Mensagem: <?php echo $_POST["mensagem"] ?> </h2>

<center>
     <br><a href="index.php"> Voltar </a>
     <br><a href="mostrarDados.php"> Mostrar todos os dados </a>
 </center>