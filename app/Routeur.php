<?php

class Routeur {

    private $action;
    private $param;
    private $routes =   [
                            
                            "admin"     =>  ["controller" => "BackCont", "method" => "getPosts"],       //afficher les posts
                            "add"       =>  ["controller" => "BackCont", "method" => "addPost"],        //ajouter un post
                            "aff"       =>  ["controller" => "BackCont", "method" => "affP"],           //afficher un post
                            "mod"       =>  ["controller" => "BackCont", "method" => "editP"],          //modifier un post
                            "com"       =>  ["controller" => "BackCont", "method" => "addCom"],         //ajouter un commentaire
                            "check"     =>  ["controller" => "BackCont", "method" => "check"],          //vérification des infos de connexion
                            "deco"      =>  ["controller" => "BackCont", "method" => "deco"],           //déconnexion d'utilisateur
                            "report"    =>  ["controller" => "BackCont", "method" => "report"],         //envoi d'un signalement
                            "tdb"       =>  ["controller" => "BackCont", "method" => "tdb"],            //envoi d'un signalement
                            "del"       =>  ["controller" => "BackCont", "method" => "del"],             //envoi d'un signalement

                            "home"      =>  ["controller" => "FrontCont", "method" => "getPosts"],      //afficher les posts
                            "signup"    =>  ["controller" => "FrontCont", "method" => "signUp"],        //formulaire inscription
                            "inscrip"   =>  ["controller" => "FrontCont", "method" => "inscrip"],       //validation inscription
                            "login"     =>  ["controller" => "FrontCont", "method" => "login"],         //formulaire connexion
                            "err"       =>  ["controller" => "FrontCont", "method" => "err"]            //gestion des erreurs
                            
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
           
        } else {
            header("Location: index.php?a=err&p=404");
        }    

    }

}