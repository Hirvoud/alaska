<?php


class Post {
    
    private $commMngr;
    private $postMngr;

    public function __construct() {

        $this->commMngr = new CommMngr();
        $this->postMngr = new PostMngr();
    }

    public function addComm() {

        $comm = new Comm();
        $comm->setAuthor($_POST["author"]);//récup formulaire

        $this->commMngr->addCom($comm, $postId);
        
        return $this->render(vue);

    }
}


