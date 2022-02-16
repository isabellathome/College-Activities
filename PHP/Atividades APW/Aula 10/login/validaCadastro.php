<?php require_once "conecta.php";?>

<?php	

    $login = $_POST["login"];
    $senha = md5($_POST["senha"]); // md5 serve para criptografar a senha

    // chamando a função inserir
    inserir($conexao, $login, $senha);

    // criar a função Inserir
    function inserir($conexao, $login, $senha) {

        $sql = "INSERT INTO usuarios(login,senha) VALUES ('$login','$senha')";

        if(mysqli_query($conexao, $sql)) {
            header("Location:index.php");
        } else {
            $erro = mysqli_error($conexao);
            echo $erro;
        }
    }
?>