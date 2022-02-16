<?php

    class ClassConexao {
        private $Servidor = 'localhost';
        private $Usuario = 'root';
        private $Senha = ''; // a senha fica vazia, pois dessa maneira funciona na minha máquina.
        private $BancoDeDados = 'escola';

        public function Banco() {
            try {
                $PDO = new PDO("mysql:host=".$this->Servidor.";dbname=".$this->BancoDeDados,$this->Usuario,$this->Senha);
            }catch (Exception $ex) {
                return $ex;
                exit;
            }
            return $PDO;
        }

    /*
    
    - Na ClassConexao, temos 4 variáveis em que serão utilizados na função Banco. 
    - Está função que possui um Try Catch com a variável $PDO que faz conexão com o banco e oferece mais segurança para o nosso sistema, caso alguma das variáveis estejam incorretas, a função pula para o catch retornando o erro.
    
    Aluna: Isabella de Sousa Thomé.

    */
}

