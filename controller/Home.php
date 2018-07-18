<?php

class Home {
    
    private $commMngr;
    private $postMngr;

    public function __construct() {
        $this->commMngr = new CommMngr();
        $this->postMngr = new PostMngr();
    }

    public function getPosts() {
        $list = $this->postMngr->listPosts();

        $myView = new View("home");
        $myView->render($list);

    }

    public function addP() {
        $myView = new View("addPost");
        $myView->render();
    }

    public function addPost() {
        //test session
        //new Post
        //test tableau erreur !empty −> afficher erreur
        $p = $this->postMngr->addPost($_POST["author"], $_POST["title"], $_POST["content"]);
        header("Location: ../public/index.php");
    }

    public function affP($id) {
        $chap = $this->postMngr->vPost($id);
        $myView = new View("chap");
        $myView->render($chap);
    }

    public function modP($id) {
        $chap = $this->postMngr->vPost($id);
        $myView = new View("modP");
        $myView->render($chap);
    }

    public function editP($id) {
        //$this->postMngr->upPost($_GET["p"]);
        $this->postMngr->upPost($id);
        
        header("Location: ../public/index.php");
    }
}


