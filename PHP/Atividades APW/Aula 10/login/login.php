<?php require_once 'conecta.php'; ?>
<?php require_once 'banco-usuario.php'; ?>
<?php require_once "logica-usuario.php"; ?>

<?php
      //Criar uma variável $usuario e atribuir a função buscaUsuario,
      // passando a conexão, login e senha.

      $usuario=buscaUsuario($conexao,$_POST["login"],$_POST["senha"]);

      //Fazer um if para verificar se o usuário é valido. 
      //Se válido chamar a função  logaUsuario

      if ($usuario == null) {
        header ("Location:index.php?login=0");
      }else{
        logaUsuario($usuario["login"]);//chama a função logaUsuario na página logica-usuario.php
        
        header ("Location:index.php?login=1");
      }

die();
?>