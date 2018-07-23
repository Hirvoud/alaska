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

    public function signIn() {
        $myView = new View("signin");
        $myView->renderF();
    }

    public function inscrip() {
        $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
        $this->UserMngr->inscrip($_POST["pseudo"], $_POST["email"], $password);
        $myView = new View("merci");
        $myView->renderF($_POST["pseudo"]);
    }

    public function login() {
        $myView = new View("login");
        $myView->renderF();
    }

    public function getPosts() {
        $list = $this->postMngr->listPosts();
        $myView = new View("home");
        $myView->renderF($list);

    }

    public function affP($id) {
        $chap = $this->postMngr->vPost($id);
        $comm = $this->commMngr->vComms($id);
        $myView = new View("chap");
        $myView->renderF($chap, $comm);
    }

}