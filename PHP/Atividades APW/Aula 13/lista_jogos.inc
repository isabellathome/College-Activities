<?php

    $usuario = 'root';
    $senha = '';
    $servidor = 'localhost';
    $banco = 'jogosdarodada';


    try {
        $db=new PDO("mysql:host=$servidor;$dbname=$banco",$usuario,$senha);
        $hoje=date("Y-m-d");
        $sql="select jogo,local,horario from jogos where data='$hoje' order by horario";
        $res=$db->query($sql);

        while($linha=$res->fetch()){
            $jogo =$linha["jogo"];
            $local =$linha["local"];
            $horario=$linha["horario"];

            echo "<tr>";
                echo "<td> $jogo </td>";
                echo "<td> $local </td>";
                echo "<td> $horario</td>";
            echo "</tr>";
        }
            $db=null;

            } catch(PDOException $e){
                echo $e->getMessage();
        }
?>