<?php

class FrontCont {
    
    private $commMngr;
    private $postMngr;
    private $userMngr;

    public function __construct() {
        $this->commMngr = new CommMngr();
        $this->postMngr = new PostMngr();
        $this->UserMngr = new UserMngr();
    }

    public function bad()
    {

        $myView = new View("front/bad");
        $myView->render();

    }
    
    public function dispHome() {

        $listPosts = $this->postMngr->listPosts();
        $lastComms = $this->commMngr->lastComms();
        $myView = new View("front/home");
        $myView->render($listPosts, $lastComms);

    }

    public function err() {

        if ($_GET["p"] == "denied") {
            $myView = new View("front/denied");
            $myView->render();
        } elseif ( $_GET["p"] == "404") {
            $myView = new View("front/404");
            $myView->render();
        }

    }

    public function inscrip() {
        
        $user = new User($_POST);

        $testP = $this->UserMngr->testPseudo($_POST["pseudo"]);
        $testE = $this->UserMngr->testEmail($_POST["email"]);

        if (empty($user->getError()) ) {
            if ($testP !== "1") {
                if ($testE !== "1") {
                    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
                    $this->UserMngr->inscrip($_POST["pseudo"], $_POST["email"], $password);
                    $myView = new View("front/merci");
                    $myView->render($_POST["pseudo"]);    
                } else {
                    $user->setError("Cette adresse email est déjà utilisée.");
                    $myView = new View("back/error");
                    $myView->render($user->getError());
                } 
            } else {
                $user->setError("Ce pseudonyme est déjà utilisé.");
                $myView = new View("back/error");
                $myView->render($user->getError());
            }
        } else {
            $myView = new View("back/error");
            $myView->render($user->getError());
        }
    }

    public function leg() {

        $myView = new View("front/mentions");
        $myView->render();

    }

    public function signUp() {

        $myView = new View("front/signup");
        $myView->render();

    }

}