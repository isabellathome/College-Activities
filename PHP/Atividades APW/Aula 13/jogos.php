<html>
    <head>
        <meta charset='utf-08'>
    </head>

    <body>
        <center>
            <h1> CAMPEONATO BRASILEIRO </h1>
                <p> Confira os jogos de hoje
                    (<?php echo date("d/m/Y"); ?>):    
                </p>
            <table border="1">
                <th>Jogo</th>
                <th>Local</th>
                <th>Horário</th>
                <?php include_once "lista_jogos.inc"; ?>
            </table>
        </center>
    </body>
</html>