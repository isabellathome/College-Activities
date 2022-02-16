<!-- banco-funcionario.php -->

<?php require_once "conecta.php" ?>
<?php require_once "Funcionario.php" ?>

<?php
        // ------------ método insereFuncionario ----------------

        function insereFuncionario($conexao, $funcionario) {
            $sql = "INSERT INTO dados_pessoais(nome,cpf,endereco,telefone)
            VALUES ('$funcionario->nome',
                    '$funcionario->cpf',
                    '$funcionario->endereco',
                    '$funcionario->telefone')";

            $resultado = mysqli_query($conexao, $sql);
            return $resultado;
        }

        // ------------------ método removeFuncionario ----------------------

        function removeFuncionario($conexao, $id) {
            $sql = "DELETE FROM dados_pessoais WHERE id = '$id'";
            $resultado = mysqli_query($conexao, $sql);

            return $resultado;
        }

        // -------------------- método listaFuncionarios ---------------

        function listaFuncionario($conexao) {
            $sql = "SELECT * FROM dados_pessoais";
            $resultado = mysqli_query($conexao, $sql);

            echo "<h2> Dados dos Funcionários </h2>";
            while($array = mysqli_fetch_assoc($resultado)) {
?>
                <form action="alterarForm.php" method="GET">
                    <table border="1">
                        <tr>
                            <td>
                                <input type="hidden" value=<?php echo $array['id'];?> name=id>
                            </td>
                        </tr>  
                        <tr>
                            <td> Nome: </td>
                            <td>
                                <input type="text" value=<?php echo $array['nome'];?> name=nome>
                            </td>
                        </tr> 
                        <tr>
                            <td> CPF: </td>
                            <td>
                                <input type="text" value=<?php echo $array['cpf'];?> name=cpf>
                            </td>
                        </tr>
                        <tr>
                            <td> Endereço: </td>
                            <td>
                                <input type="text" value=<?php echo $array['endereco'];?> name=endereco>
                            </td>
                        </tr>
                        <tr>
                            <td> Telefone: </td>
                            <td>
                                <input type="text" value=<?php echo $array['telefone'];?> name=telefone>
                            </td>
                        </tr>  
                        <tr>
                            <td colspan="2">
                                <center> <input type="submit" value="Alterar"> </center>
                            </td>
                        </tr>               
                    </table>                
                </form>
                                            <!-- FIM DO FORMULÁRIO PARA ALTERAR -->

                <form action="remove-funcionario.php" method="POST">
                    <table border="1">
                        <tr>
                            <td>
                                <input type="hidden" value=<?php echo $array['id'];?> name=id>
                            </td>
                            <td>
                                <input type="submit" value="Remover">
                            </td>
                        </tr>                    
                    </table>    
                </form> 
                                             <!-- FIM DO FORMULÁRIO PARA REMOVER -->
    <?php
            } // fim do while

        } // fim do método
        
            // ------------------ método alterarFuncionario ----------------------
            function alterar($conexao, $funcionario) {
                $sql="UPDATE dados_pessoais SET
                        nome='$funcionario->nome',
                        cpf= '$funcionario->cpf',
                        endereco='$funcionario->endereco',
                        telefone='$funcionario->telefone'
                        WHERE id='$funcionario->id' ";

                    $resultado=mysqli_query($conexao, $sql);
                    return $resultado;
            }
    ?>