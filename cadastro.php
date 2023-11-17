<?php
    class Cadastro{
        //declarando as variaveis
        private string $nome;
        private string $RG;
        private string $telefone;
        private string $planoSaude;
        private string $farmPopular;

        //Metódo construtor
        public function __construct($nome, $RG, $telefone, $planoSaude, $farmPopular){
            $this->setNome($nome);
            $this->setRG($RG);
            $this->setTelefone($telefone);
            $this->setPlanoSaude($planoSaude);
            $this->setFarmPopular($farmPopular);
        }//fim do metódo construtor

        public function getNome(){
            return $this->nome;
        }//fim do método
        public function getRG(){
            return $this->RG;
        }//fim do método
        public function getTelefone(){
            return $this->telefone;
        }//fim do método
        public function getPlanoSaude(){
            return $this->planoSaude;
        }//fim do método
        public function getFarmPopular(){
            return $this->farmPopular;
        }//fim do método


        public function setNome($nome){
            return $this->nome = $nome;
        }//fim do método
        public function setRG($RG){
            return $this->RG = $RG;
        }//fim do método
        public function setTelefone($telefone){
            return $this->telefone = $telefone;
        }//fim do método
        public function setNome($planoSaude){
            return $this->planoSaude = $planoSaude;
        }//fim do método
        public function setNome($farmPopular){
            return $this->farmPopular = $farmPopular;
        }//fim do método
        
  




    }//fim da classe

?>