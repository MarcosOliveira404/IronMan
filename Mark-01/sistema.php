
<?php
require_once 'Control.php';
    class sistema implements Control{
        private $ligado;
        private $armas;
        private $reator;

        function __construct(){
            $this->ligado = false;
            $this->armas = false;
            $this->reator = false;
        }

        // Getters
        private function getLigado(){
            return $this->ligado;
        }
        private function getArmas(){
            return $this->armas;
        }
        private function getReator(){
            return $this->reator;
        }

        // Setters
        private function setLigado($ligado){
            $this->ligado = $ligado;
        }
        private function setArmas($armas){
            $this->armas = $armas;
        }
        private function setReator($reator){
            $this->reator = $reator;
        }





        // Métodos abstratos
        public function ligar(){
            $this->setLigado(true);
        }
        public function desligar(){
            $this->setLigado(false);
        }

        public function abrirMenu(){

            if ($this->getLigado() == true){
                echo "<br>---Informações do Sistema---";
                echo "<br> Sistema Ligado: SIM";
                echo "<br> Armas Ativada: " . ($this->getArmas()?"SIM":"NAO");
                echo "<br> Reator ligado: " . ($this->getReator()?"SIM":"NAO");    
            } elseif ( $this->getLigado() == false){
                echo "<br>---Informações do Sistema---"; // Negar tudo caso o sistema não seja ligado
                echo "<br> Sistema Ligado: NAO";
                echo "<br> Armas Ativada: NAO";
                echo "<br> Reator ligado: NAO";    
            }
        }
        public function fechaMenu(){
            echo "<br> Fechando menu.................";
        }

        public function ativarCamuflagem(){
            if ($this->getLigado() == true){
                echo "<br>[Camuflagem ativada]";
            }
        }
        public function desativarCamuflagem(){
            
        }


        public function ativarArmas(){
            $this->setArmas(true);
            if ($this->getLigado() == true){
                echo "<br>[Armas ativada]";
            }
        }
        public function desativarArmas(){
            $this->setArmas(false);
        }


        public function ativarReator(){
            $this->setReator(true);
            if ($this->getLigado() == true) {
                echo "<br> Ativando reator...";
                echo "<br>[Reator ativo]";
            }
        }
        public function desativarReator(){
            $this->setReator(false);
        }


        public function ativarVoo(){
            if ($this->getLigado() == true){
                echo "<br>[Sistema de voo ligado]";
            }
        }
        public function desativarVoo(){
            
        }


        public function ativarEscaner(){
            if ($this->getLigado() == true) {
                echo "<br>[Escanner ativo]";
            }
        }
        public function desativarEscaner(){
            
        }

        public function detonar(){
            if ($this->getLigado() == true && $this->getReator() == true){
                // A detonação so iniciara com a armadura e o reator ativo
            echo "<br><strong><h3>!!Auto detonacão ativada!!</h3></strong>";
            }
        }

    }
?>
