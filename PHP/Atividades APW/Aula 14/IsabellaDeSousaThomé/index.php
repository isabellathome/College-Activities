<?php
include_once './control.php';

?>
<html>
    <head>
        <title>Isabella de Sousa Thomé</title>
        <style>
            table{
                margin: auto;
            }
            td{
                border:  black solid 1px;
                padding: 3px 40px;
                text-align: center;
            }
        </style>
    </head>
    <body>
        <fieldset style="text-align:center"></script>
            <legend>CADASTRO DE ESTUDANTES</legend>
            <form action="" method="POST">
                <br/><label form="nome">Nome: </label><br/><input type="text" name="nome"/> <br/>
                <br/><label form="telefone">Telefone: </label><br/><input type="text" name="telefone"/><br/>
                <br/><input type="submit" value="SALVAR"/>
            </form>
        </fieldset>
        <hr/>
        <fieldset>
            <table>
                <tr>
                    <td>Nome</td>
                    <td>Telefone</td>
                    <td>Ação</td> 
                </tr>
                <?php
                foreach ($ListaFuncionario AS $item):
                    echo "<tr>
						<td>".$item['nome']."</td>
						<td>".$item['telefone']."</td>
						<td><a href='DeleteFuncionario.php?id=".$item['id']."'>Excluir</a></td>
					<tr>";
                endforeach;
                ?>
            </table>
        </fieldset>
    </body>
</html>