<?php
    require_once 'AlunoHeranca2.php';
    class BolsistaHeranca2 extends AlunoHeranca2 {
        private $bolsa;

        public function renovarBolsa(){
            echo "<p>Bolsa renovada.</p>";
        }
        public function pagarMensal(){
            echo "<p>{$this->nome} e bolsista! Entao paga com desconto.</p>";
        }

        public function getBolsa(){
            return $this->bolsa;
        }

        public function setBolsa($bolsa){
            $this->bolsa = $bolsa;
        }

    }