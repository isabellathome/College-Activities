<?php

    $usuario='root';
    $senha='';
    $servidor='localhost';
    $banco='jogosdarodada';

    try{
        $db=new PDO("mysql:host=$servidor;dbname=$banco",$usuario,$senha);
        $hoje=date("Y-m-d");
        $sql="select nome,time,gols from goleadores";
        $res=$db->query($sql);

        while($linha=$res->fetch()){
            $nome =$linha["nome"];
            $time =$linha["time"];
            $gols=$linha["gols"];

            echo "<tr>";
                echo "<td> $nome </td>";
                echo "<td> $time </td>";
                echo "<td> $gols </td>";
            echo "</tr>";
        }

        $db=null;

        } catch(PDOException $e){
            echo $e->getMessage();
    }
?>