<html>
  <head>
    <title>Atividade Avaliativa</title>
    <style type="text/css">
      fieldset {width: 190px;}
    </style>
  </head>
<body>
  <div id="area">
    <form action="processa.php" method="POST">
      <fieldset>
        <legend>Formulário</legend>
        <label>Nome:</label><input name="nome" type="text"><br><br>
        <label>Email:</label><input name="email" type="text"><br><br>
        <label>Mensagem:</label><br><textarea name="mensagem" cols="35" rows="8"></textarea><br>
        <input  type="submit" name="enviar" value="Salvar">
      </fieldset>
    </form>
  </div>
</body>
</html>