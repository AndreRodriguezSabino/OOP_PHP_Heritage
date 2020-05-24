<?php
    require_once 'PessoaHeranca.php';
    class ProfessorHeranca extends PessoaHeranca {
        private $espec;
        private $salario;

        public function aumenSal($aum){
            $this->salario += $aum;
        }

        public function getEspec(){
            return $this->espec;
        }

        public function setEspec($espec){
            $this->espec = $espec;
        }

        public function getSalario(){
            return $this->salario;
        }

        public function setSalario($salario){
            $this->salario = $salario;
        }


    }