<!-- localizar-recebe.php -->

<?php require_once "conecta.php" ?>
<?php require_once "Funcionario.php" ?>
<?php require_once "banco-funcionario.php" ?>

<h1> <center> RESULTADO DA PESQUISA </center></h1>

<?php 

    $a=$_GET['a'];

    if($a=="buscar") {
        $palavra=trim($_POST["palavra"]); // TRIM é uma palavra reservada para retirar todos os espaços em branco
        $sql="SELECT * FROM dados_pessoais WHERE nome LIKE '%$palavra' ORDER BY nome"; // % é para pegar tudo o que houver "dentro" da váriavel
        $resultado = mysqli_query($conexao, $sql);

        $numRegistros = mysqli_num_rows($resultado);
            if($numRegistros!=0) {
                while($exibe=mysqli_fetch_object($resultado)) {
                    echo $exibe->nome ."<br>";
                    echo $exibe->cpf ."<br>";
                    echo $exibe->endereco ."<br>";
                    echo $exibe->telefone ."<br>";
                } // fim do while
            } else {
                echo "<h3> Nenhum registro encontrado </h3>";
            } // fim do else

    }


?>