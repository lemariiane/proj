<?php
    class ClassAgendamento {
        private $ficha;
        private $nomepac; 
        private $telefonepac;
        private $datar;
        private $horario;
        private $departamento;
        
          
        public function setFicha($ficha) {
            $this->ficha = $ficha;
            
        }

        public function setNomepac($nomepac) {
            $this->nomepac = $nomepac;
        }
        
        public function setTelefonepac($telefonepac) {
            $this->telefonepac = $telefonepac;
            
        }

        public function setDatar($datar) {
            $this->datar = $datar;
            
        }

        public function setHorario($horario) {
            $this->horario = $horario;
            
        }

        public function setDepartamento($departamento) {
            $this->departamento = $departamento;
            
        }


        //get

        public function getFicha() {
            return $this->ficha;
        }

        public function getNomepac() {
            return $this->nomepac;
        }
        
        
        public function getTelefonepac() {
            return $this->telefonepac;
            
        }

        public function getDatar() {
            return $this->datar;
        }

        public function getHorario() {
            return $this->horario;
            
        }

        public function getDepartamento() {
            return $this->departamento;
            
        }
    }

?>