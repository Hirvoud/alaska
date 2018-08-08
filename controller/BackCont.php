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
            $req = $this->userMngr->getUser($pseudo);
            $user = new User($req);
            
            unset($_SESSION["user"]);
            $_SESSION["user"]["pseudo"] = $user->getPseudo();
            
            if ($user->getAdmin() == 1) {
                $_SESSION["user"]["access"] = "admin";
            } else {
                $_SESSION["user"]["access"] = "user";
            }
            header("Location: index.php?a=acc");
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
      
        if (isset($_SESSION["user"])) {
            $list = $this->postMngr->listPosts();
            $myView = new View("back/home");
            $myView->render($list);
        } else {
            header("Location: index.php?a=err&p=denied");
        }

    }

    public function addPost() {

        if ($_SESSION["user"]["access"] == "admin") {
            if (!isset($_GET["e"])) {
                $myView = new View("back/addPost");
                $myView->render();
            } else {
                $this->postMngr->addPost($_POST["author"], $_POST["title"], $_POST["content"]);
                header("Location: ../public/index.php?a=acc");
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
            header("Location: index.php?a=err&p=404");
        }

    }

    public function editP($id) {

        if ($_SESSION["user"]["access"] == "admin") {
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

    public function editC($id) {

        $comm = $this->commMngr->vComm($id);
        
        if ($comm->getAuthor() == $_SESSION["user"]["pseudo"]) {
            if (!isset($_GET["e"])) {
                $myView = new View("back/editC");
                $myView->render($comm);
            } else {
                $this->commMngr->upComm($id);
                header("Location: index.php?a=tdb");
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
        
        $postId = $_GET["e"];
        $rep = $this->commMngr->report($id);
        header("Location: index.php?a=aff&p=$postId");

    }

    public function tdb() {

        if ($_SESSION["user"]["access"] == "admin") {
            $reports = $this->commMngr->vReport();
            $list = $this->postMngr->listPosts();
            
            $myView = new View("back/admin");
            $myView->render($reports, $list);

        } elseif ($_SESSION["user"]["access"] == "user") {
            $comms = $this->commMngr->getComms($_SESSION["user"]["pseudo"]);

            $myView = new View("back/user");
            $myView->render($comms);
        } else {
            header("Location: index.php?a=err&p=denied");
        }
    }

    public function delA($pseudo) {

        if ($pseudo == $_SESSION["user"]["pseudo"]) {
            
            if (!isset($_GET["e"])) {
                $myView = new View("back/delAcc");
                $myView->render($pseudo);
            } else {
                $password = $_POST["password"];
                $pass = $this->userMngr->check($pseudo, $password);

                if (password_verify($password, $pass["hash_pass"])) {
                    $this->commMngr->delComms($_SESSION["user"]["pseudo"]);
                    $this->userMngr->delUser($_SESSION["user"]["pseudo"]);
                    
                    unset($_SESSION["user"]);
                    header("Location: index.php");
                } else {
                    header("Location: index.php?a=err&p=denied");
                }
            }
        }

    }

    public function delC($id) {
        
        $this->commMngr->delComm($id);
        header("Location: index.php?a=tdb");
        
    }

    public function delP($id) {

        $this->postMngr->delPost($id);
        header("Location: index.php?a=tdb");

    }

    public function val($id) {
        
        $rep = $this->commMngr->val($id);
        header("Location: index.php?a=tdb");

    }

}
