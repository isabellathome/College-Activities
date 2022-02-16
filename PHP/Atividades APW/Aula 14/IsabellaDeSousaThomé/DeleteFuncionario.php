<?php require_once 'ClassFuncionario.php';?>

<?php

    $Del = new ClassFuncionario;

    $id=$_GET['id'];

    if($id!=""){
        $Del->Deletar($id);
    }

    header("location:index.php");

    /*
    
    - Na página DeleteFuncionario.php, temos primeiro a importação da ClassFuncionario atráves do require_once.
    - Dentro do segundo escopo, temos a declaração do objeto ClassFuncionario, sendo armazenado na variável $Del. 
    - O id recebe o id registrado durante o cadastro pelo $_GET, id este que é auto_increment, ordenado pelo próprio sistema.
    - Dentro do if, ele apenas roda se o id for diferente de 0 (vazio) e com isso a variável $Del recebe a função de deletar presente na ClassFuncionario.
    - O header serve para que a página seja automaticamente direcionada para o index.php (neste caso, 'continua' na mesma página).
    
    Aluna: Isabella de Sousa Thomé.
    
    */

?>