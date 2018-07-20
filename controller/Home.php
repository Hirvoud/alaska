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
        $myView->render($chap, $comm);
    }

    public function modP($id) {
        $chap = $this->postMngr->vPost($id);
        $myView = new View("modP");
        $myView->render($chap);
    }

    public function editP($id) {
        $this->postMngr->upPost($id);
        header("Location: ../public/index.php");
    }

    public function addC($id) {
        $myView = new View("addComm");
        $myView->render();
    }

    public function addCom($id) {
        $this->commMngr->addComm($_POST["author"], $_POST["comment"], $id);
        $this->affP($id);
        
        //header("Location: ../public/index.php?a=aff&p=$id");
    }

}


