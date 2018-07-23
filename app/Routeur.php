<?php

class Routeur {

    private $action;
    private $param;
    private $routes =   [
                            
                            "admin"     =>  ["controller" => "BackCont", "method" => "getPosts"], //afficher les posts
                            "add"       =>  ["controller" => "BackCont", "method" => "addPost"], //ajouter un post
                            "addP"      =>  ["controller" => "BackCont", "method" => "addP"], //ouvrir la page d'ajout
                            "aff"       =>  ["controller" => "BackCont", "method" => "affP"], //afficher un post
                            "mod"       =>  ["controller" => "BackCont", "method" => "modP"], //ouvrir la page de modification
                            "modP"      =>  ["controller" => "BackCont", "method" => "editP"], //modifier un post
                            "com"       =>  ["controller" => "BackCont", "method" => "addC"], //ouvrir la page d'ajout de commentaire
                            "addC"      =>  ["controller" => "BackCont", "method" => "addCom"], //ajouter un commentaire
                            "check"     =>  ["controller" => "BackCont", "method" => "check"], //vérification des infos de connexion

                            "home"      =>  ["controller" => "FrontCont", "method" => "getPosts"], //afficher les posts
                            "fAff"      =>  ["controller" => "FrontCont", "method" => "affP"], //afficher un post
                            "signin"    =>  ["controller" => "FrontCont", "method" => "signIn"], //formulaire inscription
                            "inscrip"   =>  ["controller" => "FrontCont", "method" => "inscrip"], //validation inscription
                            "login"     =>  ["controller" => "FrontCont", "method" => "login"], //formulaire connexion
                            
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