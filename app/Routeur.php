<?php

class Routeur {

    private $action;
    private $param;
    private $routes =   [
                            
                            "add"       =>  ["controller" => "BackCont", "method" => "addPost"],        //ajouter un post
                            "aff"       =>  ["controller" => "BackCont", "method" => "affP"],           //afficher un post
                            "mod"       =>  ["controller" => "BackCont", "method" => "editP"],          //modifier un post
                            "modC"      =>  ["controller" => "BackCont", "method" => "editC"],          //modifier un post
                            "com"       =>  ["controller" => "BackCont", "method" => "addCom"],         //ajouter un commentaire
                            "check"     =>  ["controller" => "BackCont", "method" => "check"],          //vérification des infos de connexion
                            "deco"      =>  ["controller" => "BackCont", "method" => "deco"],           //déconnexion d'utilisateur
                            "report"    =>  ["controller" => "BackCont", "method" => "report"],         //envoi d'un signalement
                            "tdb"       =>  ["controller" => "BackCont", "method" => "tdb"],            //affichage du tableau de bord
                            "delA"      =>  ["controller" => "BackCont", "method" => "delA"],           //suppression d'un post
                            "delP"      =>  ["controller" => "BackCont", "method" => "delP"],           //suppression d'un post
                            "delC"      =>  ["controller" => "BackCont", "method" => "delC"],           //suppression d'un commentaire
                            "val"       =>  ["controller" => "BackCont", "method" => "val"],            //validation commentaire signalé
                            "pass"      =>  ["controller" => "BackCont", "method" => "pass"],           //changement de mot de passe
                            "success"   =>  ["controller" => "BackCont", "method" => "success"],        //opération effectuée avec succès

                            "home"      =>  ["controller" => "FrontCont", "method" => "dispHome"],      //afficher les posts
                            "signup"    =>  ["controller" => "FrontCont", "method" => "signUp"],        //formulaire inscription
                            "inscrip"   =>  ["controller" => "FrontCont", "method" => "inscrip"],       //validation inscription
                            "login"     =>  ["controller" => "FrontCont", "method" => "login"],         //formulaire connexion
                            "err"       =>  ["controller" => "FrontCont", "method" => "err"],           //gestion des erreurs
                            "bad"       =>  ["controller" => "FrontCont", "method" => "bad"]            //erreur identifiants de connexion
                            
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
            header("Location: ".HOST."404");
        }    

    }

}