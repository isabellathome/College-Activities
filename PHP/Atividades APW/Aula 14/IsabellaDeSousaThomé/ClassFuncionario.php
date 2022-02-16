<?php

    require_once 'ClassConexao.php';

    class ClassFuncionario extends ClassConexao {

        private $id;
        private $nome;
        private $telefone; 

        public function getNome() {
            return $this->nome;
        }

        public function getTelefone() {
            return $this->telefone;
        }

        public function getId() {
            return $this->id;
        }

        public function setId($id): void {
            $this->id=$id;
        }

        public function setNome($nome) {
            $this->nome=$nome;
        }

        public function setTelefone($telefone) {
            $this->telefone = $telefone;
        }

        public function Gravar($nome, $telefone) {
            $this->setNome($nome);
            $this->setTelefone($telefone);
            $SQL = "INSERT INTO aluno(nome,telefone) VALUES ('" . $this->getNome() . "','" . $this->getTelefone() . "')";
            $GRAVAR = $this->Banco()->exec($SQL);
            return $GRAVAR;
        }

        public function Buscar($id) {
            if ($id == "") {
                $BD = $this->Banco()->prepare("SELECT * FROM aluno");
                $BD->execute();
                $RespostaBd=$BD->fetchAll();
            }else{
                $this->setId($id);
                $BD = $this->Banco()->prepare("SELECT * FROM aluno WHERE id =".$this->getId());
                $BD->execute();
                $RespostaBd = $BD->fetchAll();
            }
            return $RespostaBd;
        }

        public function Deletar($id){
             $this->setId($id);
             $BD = $this->Banco()->prepare("DELETE FROM aluno WHERE id=".$this->getId());
             $BD->execute();       
        }
    }            
?>