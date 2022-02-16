<?php require_once 'ClassFuncionario.php' ?>

<?php

    $Funcionario = new ClassFuncionario();
    $ListaFuncionario = $Funcionario->Buscar("");

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if ($_POST['nome'] != "") {
            $nome = trim($_POST['nome']);
            $telefone = trim($_POST['telefone']);
            $Gravar = $Funcionario->Gravar($nome, $telefone);
            if ($Gravar) {
                echo "<script>alert('Gravado!');location.href='index.php';</script>";
            }
        }
    }

    /*
    
    - Na página control.php, primeiramente ele importa a ClassFuncionario pelo require_once e dentro do próximo escopo cria um novo objeto da ClassFuncionario.
    - Logo após será listado todos os alunos existentes na table aluno, o select se encontra na função Buscar(), função presente na ClassFuncionario.
    - O if serve para que se a variável global $_SERVER for preenchida de forma idêntica ao método post, as variáveis serão armazenadas na var Gravar, que rodará a função Gravar presente na ClassFuncionarios.
    - Se a variável Gravar estiver correta, o terceiro if roda mostrando ao usúario um script do tipo alert com a mensagem "Gravado!", e sendo redirecionado de volta para página index.
    
    Aluna: Isabella de Sousa Thomé.
    
    */

?>