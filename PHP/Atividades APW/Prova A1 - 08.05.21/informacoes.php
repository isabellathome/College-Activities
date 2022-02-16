<?php require_once "conexao.php" ?>
<?php require_once "Formulario.php" ?>

<?php

    // FUNÇÃO INSERIR

    function insereInformacao($conexao, $formInfo) {

        $sql = "INSERT INTO informacoes(nome,email,mensagem)
            VALUES ('$formInfo->nome',
                    '$formInfo->email',
                    '$formInfo->mensagem')";

        $resultado = mysqli_query($conexao, $sql);

        return $resultado;
    }

    // FUNÇÃO MOSTRAR OS DADOS

    function dados($conexao) {
        $sql = "SELECT * FROM informacoes";
            $resultado = mysqli_query($conexao, $sql);

            echo "<center> <b> <h1> Dados Armazenados no Banco de Dados: </h1> </b> </center> <br>";

                while($mostra=mysqli_fetch_object($resultado)) {
                    echo "<b> <h2> Nome: " .$mostra->nome ."</b> </h2> ";
                    echo "<b> <h2> Email: " .$mostra->email ."</b> </h2> ";
                    echo "<b> <h2> Mensagem: " .$mostra->mensagem ."</b> </h2> <br> <hr>";
                }    
    }

?>