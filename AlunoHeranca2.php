<?php
    require_once 'PessoaHeranca2.php';
    class AlunoHeranca2 extends PessoaHeranca2 {
        private $matricula;
        private $curso;

        public function pagarMensal(){
            echo "<p>Efetuano pagamento...</p>";
        }

        public function getMatricula(){
            return $this->matricula;
        }

        public function setMatricula($matricula){
            $this->matricula = $matricula;
        }

        public function getCurso(){
            return $this->curso;
        }

        public function setCurso($curso){
            $this->curso = $curso;
        }

    }