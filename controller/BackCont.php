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

        $pass = $this->userMngr->check($pseudo, $password);

        if (password_verify($password, $pass["hash_pass"])) {
            unset($_SESSION["user"]);
            $_SESSION["user"]["pseudo"] = $pseudo; 
            header("Location: index.php?a=admin");
        } else {
            header("Location: index.php");
        }
    }
    
    public function deco() {
        $_SESSION = array();
        unset($_SESSION);
        header("Location: index.php");
    }

    public function getPosts() {
        /*$list = $this->postMngr->listPosts();
        $res = $this->userMngr->getUser($_SESSION["user"]["pseudo"]);

        $user = new User($res);

        if ($user->getAdmin() == "1") {
            $myView = new View("back/home");
            $myView->render($list);
        } else {
            $myView = new View("front/home");
            $myView->render($list);
        }*/
        

        if (isset($_SESSION["user"])) {
            $list = $this->postMngr->listPosts();
            $myView = new View("back/home");
            $myView->render($list);
        } else {
            header("Location: index.php");
        }

    }

    public function addPost() {

        $res = $this->userMngr->getUser($_SESSION["user"]["pseudo"]);
        $user = new User($res);

        if ($user->getAdmin() == "1") {
            if (!isset($_GET["e"])) {
                $myView = new View("back/addPost");
                $myView->render();
            } else {
                $this->postMngr->addPost($_POST["author"], $_POST["title"], $_POST["content"]);
                header("Location: ../public/index.php?a=admin");
            }
        } else {
            header("Location: index.php?a=err&p=denied");
        }
    }

    public function affP($id) {
        $chap = $this->postMngr->vPost($id);
        if ($chap !== false) {
        $post = new Post($chap);
        

        $comment = $this->commMngr->vComms($id);

        if (!isset($_SESSION["user"])) {
            $myView = new View("front/chap");
            $myView->render($post, $comment);
        } else {
            $myView = new View("back/chap");
            $myView->render($post, $comment);
        }
        } else {
            echo "404";
        }
    }

    public function editP($id) {
        $res = $this->userMngr->getUser($_SESSION["user"]["pseudo"]);
        $user = new User($res);

        if ($user->getAdmin() == "1") {
            if (!isset($_GET["e"])) {
                $chap = $this->postMngr->vPost($id);
                $myView = new View("back/editP");
                $myView->render($chap);
            } else {
                $this->postMngr->upPost($id);
                header("Location: ../public/index.php?a=aff&p=$id");
            }
        } else {
            header("Location: index.php?a=err&p=denied");
        }
    }
    
    public function addCom($id) {
        if (!isset($_GET["e"])) {
            $myView = new View("back/addCom");
            $myView->render();
        } else {
            $this->commMngr->addComm($_POST["author"], $_POST["comment"], $id);
            $this->affP($id);
            header("Location: ../public/index.php?a=aff&p=$id");
        }
    }

    public function report($id) {
        $rep = $this->commMngr->report($id);
        /*$myView = new View("back/report");
        $myView->render($rep);*/

    }

    public function tdb() {
        $res = $this->userMngr->getUser($_SESSION["user"]["pseudo"]);
        $user = new User($res);

        if ($user->getAdmin() == "1") {
            $reports = $this->commMngr->vReport();
            
            
            $myView = new View("back/admin");
            $myView->render($reports);

        } else {
            header("Location: index.php?a=err&p=denied");
        }
    }

    public function del($id) {
        $this->commMngr->delComm($id);
        $secondsWait = 1;
        //header("Location: tdb");
        
    }

}
