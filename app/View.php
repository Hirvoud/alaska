<?php

class View {

    private $vue;

    public function __construct($vue) {

        $this->vue = $vue;

    }

    public function renderB($param = null, $p2 = null) {
                     
        $vue = $this->vue;

        ob_start();
        include(BACK.$vue.".php");
        $content = ob_get_clean();
        include_once (VIEW."default.php");

    }

    public function renderF($param = null, $p2 = null) {

        $vue = $this->vue;

        ob_start();
        include(FRONT.$vue.".php");
        $content = ob_get_clean();
        include_once (VIEW."default.php");

    }
}