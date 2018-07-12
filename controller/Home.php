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
        //new View(chemin vers la vue (front/back))
        //myView->render($list)
        $this->render($list);
    }

    public function render($list) { //render Sandy
        $this->list = $list;
        require VIEW."/acc.php";

    }

    public function addPost() {
        $p = $this->postMngr->addPost($_POST["author"], $_POST["title"], $_POST["content"]);
        
    }

}


