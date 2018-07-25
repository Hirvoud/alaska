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
    
    public function deco() {
        session_start();
        $_SESSION = array();
        session_destroy();
        header("Location: index.php");
    }

    public function getPosts() {
        $list = $this->postMngr->listPosts();

        foreach ($list as $key => $chap) {
            $post = new Post();
            $post->hydrate($chap["id"], $chap["author"], $chap["title"], $chap["content"], $chap["deiz_f"]);
            $list[$key] = $post;
        }

        $myView = new View("home");
        $myView->renderB($list);
    }

    public function addPost() {

        if (!isset($_GET["e"])) {
            $myView = new View("addPost");
            $myView->renderB();
        } else {
            $post = new Post();
            $post->hydrate($_POST["author"], $_POST["title"], $_POST["content"]);

            if (!empty($post->error)) {
                echo $post->error["id"]; //à travailler
            } else {
                $this->postMngr->addPost($post->getAuthor(), $post->getTitle(), $post->getContent());
                header("Location: ../public/index.php?a=admin");
            }
        }
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
        $myView->renderB($post, $comment);
    }

    public function editP($id) {
        if (!isset($_GET["e"])) {
            $chap = $this->postMngr->vPost($id);
            $myView = new View("editP");
            $myView->renderB($chap);
        } else {
            $this->postMngr->upPost($id);
            header("Location: ../public/index.php?a=aff&p=$id");
        }
    }
    
    public function addCom($id) {
        if (!isset($_GET["e"])) {
            $myView = new View("addCom");
            $myView->renderB();
        } else {
            $this->commMngr->addComm($_POST["author"], $_POST["comment"], $id);
            $this->affP($id);
            header("Location: ../public/index.php?a=aff&p=$id");
        }
    }

    public function report($id) {
        $rep = $this->commMngr->vComm($id);

        $myView = new View("report");
        $myView->renderB($rep); 

    }
}