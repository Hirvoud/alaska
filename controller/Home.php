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

    /*public function render($list) { 
        $this->list = $list;
        require VIEW."home.php";

    }*/

    public function addPost() {
        $p = $this->postMngr->addPost($_POST["author"], $_POST["title"], $_POST["content"]);
        
    }

}


