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

    public function addCom($id)
    {

        if (isset($_SESSION["user"])) {
            $count = $this->postMngr->countPost($id);

            if ($count == 1) {
                $this->commMngr->addComm($_SESSION["user"]["pseudo"], $_POST["comment"], $id);
                $this->affP($id);
                header("Location: ".HOST."post/$id");
            } else {
                header("Location: ".HOST."accueil");
            }
        } else {
            header("Location: ".HOST."denied");
        }
    }

    public function addPost()
    {

        if ($_SESSION["user"]["access"] == "admin") {
            
            if (!isset($_GET["e"])) {
                $myView = new View("back/addPost");
                $myView->render();
            } else {
                $post = new Post(array("Author" => $_SESSION["user"]["pseudo"], "Title" => $_POST["title"], "Content" => $_POST["content"]));

                $test = array($_SESSION["user"]["pseudo"], $_POST["title"], $_POST["content"]);

                if (strlen($post->getTitle()) > 50) {
                    $post->setError("Titre trop long");
                } elseif (strlen($post->getTitle()) > 5000) {
                    $post->setError("Article trop long");
                } //ajout autres conditions

                $error = $post->getError();

                if (!empty($error)) {
                    $myView = new View("back/error");
                    $myView->render($error);
                } else {
                $this->postMngr->addPost($post->getAuthor(), $post->getTitle(), $post->getContent());
                header("Location:".HOST."index.php");
                }
            }
        } else {
            header("Location: ".HOST."denied");
        }

    }

    public function affP($id)
    {

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
            header("Location: " . HOST . "404");
        }

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
            header("Location: " . HOST . "index.php");
        } else {
            header("Location: " . HOST . "index.php?a=bad");
        }

    }
    
    public function deco() {
        
        $_SESSION = array();
        unset($_SESSION);
        header("Location: " . HOST . "index.php");

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
                    header("Location: " . HOST . "index.php");
                } else {
                    header("Location: " . HOST . "denied");
                }
            }
        }

    }

    public function delC($id) {
        
        $this->commMngr->delComm($id);
        header("Location: " . HOST . "index.php?a=tdb");
        
    }

    public function delP($id) {

        $this->postMngr->delPost($id);
        header("Location: " . HOST . "index.php?a=tdb");

    }

    public function editC($id) {

        $comm = $this->commMngr->vComm($id);
        
        if ($comm->getAuthor() == $_SESSION["user"]["pseudo"]) {
            if (!isset($_GET["e"])) {
                $myView = new View("back/editC");
                $myView->render($comm);
            } else {
                $this->commMngr->upComm($id);
                header("Location: " . HOST . "index.php?a=tdb");
            }
        } else {
            header("Location: " . HOST . "denied");
        }
        
    }

    public function editP($id) {

        $chap = $this->postMngr->vPost($id);
        if ($chap !== false) {
            if ($_SESSION["user"]["access"] == "admin") {
                if (!isset($_GET["e"])) {
                    $myView = new View("back/editP");
                    $myView->render($chap);
                } else {
                    $this->postMngr->upPost($id);
                    header("Location: " . HOST . "post/$id");
                }
            } else {
                header("Location: " . HOST . "denied");
            }
        } else {
            header("Location: " . HOST . "404");
        }
    }

    public function pass() {

        if (!isset($_GET["e"])) {
            $myView = new View("back/pass");
            $myView->render();
        } else {
            $pseudo = $_SESSION["user"]["pseudo"];
            $oldPass = $_POST["oldPass"];
            $newPass = password_hash($_POST["newPass"], PASSWORD_DEFAULT);

            $pass = $this->userMngr->check($pseudo, $oldPass);

            if (password_verify($oldPass, $pass["hash_pass"])) {
                $this->userMngr->newPass($pseudo, $newPass);
                
                header("Location: " . HOST . "index.php?a=success");
            } else {
                header("Location: " . HOST . "index.php?a=bad");
            }
        }

    }

    public function report($id) {
        
        $postId = $_GET["e"];
        $rep = $this->commMngr->report($id);
        header("Location: " . HOST . "post/$postId");

    }

    public function success() {

        $myView = new View("back/success");
        $myView->render();

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
            header("Location: " . HOST . "denied");
        }
    }

    public function val($id) {
        
        $rep = $this->commMngr->val($id);
        header("Location: " . HOST . "index.php?a=tdb");

    }

}
