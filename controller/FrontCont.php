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

    public function signUp() {
        $myView = new View("front/signup");
        $myView->render();
    }

    public function inscrip() {
        $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
        $this->UserMngr->inscrip($_POST["pseudo"], $_POST["email"], $password);
        $myView = new View("front/merci");
        $myView->render($_POST["pseudo"]);
    }

    public function login() {
        $myView = new View("front/login");
        $myView->render();
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

    public function dispHome() {

        $listPosts = $this->postMngr->listPosts();
        $lastComms = $this->commMngr->lastComms();
        $myView = new View("front/home");
        $myView->render($listPosts, $lastComms);

    }

}