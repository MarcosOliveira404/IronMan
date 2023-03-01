
<?php
    // Progeto IronMan
    interface Control {
        public function ligar();
        public function desligar();
        public function abrirMenu();
        public function fechaMenu();
        public function ativarCamuflagem();
        public function desativarCamuflagem();
        public function ativarArmas();
        public function desativarArmas();
        public function ativarReator();
        public function desativarReator();
        public function ativarVoo();
        public function desativarVoo();
        public function ativarEscaner();
        public function desativarEscaner();
        public function detonar();
    }
?>
