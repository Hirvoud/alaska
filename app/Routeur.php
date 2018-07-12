<?php

class Routeur {

    private $action;
    private $routes =   [
                            "home"=>["controller" => "Home", "method" => "getPosts"],
                            "add" =>["controller" => "Home", "method" => "addPost"]
                        ];
    
    public function __construct($action) {

        $this->action = $action;
    
    }

    //public function getParams(GET ou POST) routeur Sandy

    public function renderCont() {
        
        $action = $this->action;
        if (array_key_exists($action, $this->routes)) {  
            $controller = $this->routes[$action]["controller"];
            $currentCont = new $controller();
            $method = $this->routes[$action]["method"];
        $currentCont->$method(/*$this->getParams*/);
           
        }
        else {
            echo "404";
        }    

    }

}