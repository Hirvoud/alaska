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
        $myView = new View("signup");
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

    public function err() {
        if ($_GET["p"] == "denied") {
            $myView = new View("denied");
            $myView->renderF();
        } elseif ( $_GET["p"] == "404") {
            $myView = new View("404");
            $myView->renderF();
        }
    }

    public function getPosts() {
        $list = $this->postMngr->listPosts();

        foreach ($list as $key => $chap) {
            $post = new Post();
            $post->hydrate($chap["id"], $chap["author"], $chap["title"], $chap["content"], $chap["deiz_f"]);
            $list[$key] = $post;
        }

        $myView = new View("home");
        $myView->renderF($list);

    }

    public function affP($id) {
        $chap = $this->postMngr->vPost($id);
        $post = new Post();
        $post->hydrate($chap["id"], $chap["author"], $chap["title"], $chap["content"], $chap["deiz_f"]);

        $comment = $this->commMngr->vComms($id);
        foreach ($comment as $key => $value) {
            $comm = new Comm();
            $comm->hydrate($value["id"], $value["author"], $value["comment"], $value["id_post"], $value["deiz_cf"]);
            $comment[$key] = $comm;
        }

        $myView = new View("chap");
        $myView->renderF($post, $comment);
    }

}