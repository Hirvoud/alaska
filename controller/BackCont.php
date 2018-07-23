<?php

class BackCont {
    
    private $commMngr;
    private $postMngr;
    private $userMngr;

    public function __construct() {
        $this->commMngr = new CommMngr();
        $this->postMngr = new PostMngr();
        $this->userMngr = new UserMngr();
    }

    public function check() {
        $pseudo = $_POST["pseudo"];
        $password = $_POST["password"];

        $this->userMngr->check($pseudo, $password);
    }
    
    public function getPosts() {
        $list = $this->postMngr->listPosts();

        $myView = new View("home");
        $myView->renderB($list);
    }

    public function addP() {
        $myView = new View("addPost");
        $myView->renderB();
    }

    public function addPost() {
        //test session
        
        //$p = $this->postMngr->addPost($_POST["author"], $_POST["title"], $_POST["content"]);

        $post = new Post();
        $post->hydrate($_POST["author"], $_POST["title"], $_POST["content"]);
        
        if (!empty($post->error)) {
            echo $post->error["id"]; //à travailler !
        } else {
        $this->postMngr->addPost($post->getAuthor(), $post->getTitle(), $post->getContent());
        
        header("Location: ../public/index.php");
        }

    }

    public function affP($id) {
        $chap = $this->postMngr->vPost($id);
        $comm = $this->commMngr->vComms($id);
        $myView = new View("chap");
        $myView->renderB($chap, $comm);
    }

    public function modP($id) {
        $chap = $this->postMngr->vPost($id);
        $myView = new View("modP");
        $myView->renderB($chap);
    }

    public function editP($id) {
        $this->postMngr->upPost($id);
        header("Location: ../public/index.php?a=aff&p=$id");
    }

    /*public function modP($id) {
        if ($_GET["a"] == "mod"){
            $chap = $this->postMngr->vPost($id);
            $myView = new View("modP");
            $myView->renderB($chap);
        } else {
            $this->postMngr->upPost($id);
            header("Location: ../public/index.php?a=aff&p=$id>");
        }
    }*/
    
    public function addC($id) {
        $myView = new View("addComm");
        $myView->renderB();
    }

    public function addCom($id) {
        $this->commMngr->addComm($_POST["author"], $_POST["comment"], $id);
        $this->affP($id);
        
        //header("Location: ../public/index.php?a=aff&p=$id");
    }

}