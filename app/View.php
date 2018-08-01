<?php

class View {

    private $vue;

    public function __construct($vue) {

        $this->vue = $vue;

    }

    public function render($param1 = null, $param2 = null) {

        $vue = $this->vue;

        ob_start();
        include(VIEW.$vue.".php");
        $content = ob_get_clean();
        include_once (VIEW."default.php");

    }
}