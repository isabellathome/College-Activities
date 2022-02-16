<!-- formLocalizar.php -->

<?php require_once "conecta.php" ?>

<html>
    <head> </head>
    <body>
        <center>
            <h1> Digite uma palavra: </h1>
            <form method="POST" action="localizar-recebe.php?a=buscar">
                <input type="text" name="palavra">
                <input type="submit" value="Buscar">            
            </form>
        </center>
    </body>

</html>