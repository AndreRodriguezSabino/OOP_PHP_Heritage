<?php
    require_once 'PessoaHeranca.php';
    class AlunoHeranca extends PessoaHeranca {
        private $matricula;
        private $curso;

        public function cancelarMatric(){
            echo "<p>Em processo de cancelamento...</p>";
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