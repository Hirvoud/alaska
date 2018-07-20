<?php

class Routeur {

    private $action;
    private $param;
    private $routes =   [
                            "home"  =>["controller" => "Home", "method" => "getPosts"], //afficher les posts
                            "add"   =>["controller" => "Home", "method" => "addPost"], //ajouter un post
                            "addP"  =>["controller" => "Home", "method" => "addP"], //ouvrir la page d'ajout
                            "aff"   =>["controller" => "Home", "method" => "affP"], //afficher un post
                            "mod"   =>["controller" => "Home", "method" => "modP"], //ouvrir la page de modification
                            "modP"   =>["controller" => "Home", "method" => "editP"], //modifier un post
                            "com"   =>["controller" => "Home", "method" => "addC"], //ouvrir la page d'ajout de commentaire
                            "addC"   =>["controller" => "Home", "method" => "addCom"] //ajouter un commentaire

                        ];
    
    public function __construct($action) {

        $this->action = $action;
    
    }

    public function getParams() {
        
        if (!empty($_GET) && isset($_GET["p"])) {
            $param = $_GET["p"];
        }
        if (!isset($param)) {
            $param = null;
        }
        return $param;
        
    }

    public function renderCont() {
        
        $action = $this->action;
        if (array_key_exists($action, $this->routes)) {  
            $controller = $this->routes[$action]["controller"];
            $currentCont = new $controller();
            $method = $this->routes[$action]["method"];
            $currentCont->$method($this->getParams());
           
        }
        else {
            echo "404";
        }    

    }

}