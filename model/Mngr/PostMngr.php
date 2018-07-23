<?php

require_once("Mngr.php");

class PostMngr extends Mngr {

    public function addPost($author, $title, $content) {
        $db = $this->dbConnect();
        $ins = $db->prepare("INSERT INTO posts(author, title, content, deiz) VALUES(?, ?, ?, NOW())");
        $ins->execute(array($author, $title, $content));
    }

    public function delPost($id) {

        $db = $this->dbConnect();

        $db->prepare("DELETE * FROM posts WHERE id=$id");
        $db->execute();
        $db->prepare("DELETE * FROM comms WHERE postId=$id");
        $db->execute();

    }

    public function listPosts() {

        $db = $this->dbConnect();
        $req = $db->query("SELECT id, author, title, content, DATE_FORMAT(deiz, '%d/%m/%Y à %Hh%imin%ss') AS deiz_f FROM posts ORDER BY deiz DESC LIMIT 0, 5");
        $res = $req->fetchAll();
        /*foreach ($res as $chap) {
            $post = new Post();
            $post->hydrate($chap["id"], $chap["author"],$chap["title"], $chap["content"],$chap["deiz_f"]);
            var_dump($post);
        }*/
        return $res;
    }

    public function vPost($id) {

        $db = $this->dbConnect();
        $req = $db->prepare("SELECT id, author, title, content, DATE_FORMAT(deiz, '%d/%m/%Y à %Hh%imin%ss') AS deiz_f FROM posts WHERE id=?");
        $req->execute(array($id));
        $post = $req->fetch();

        return $post;

    }

    public function upPost($id) {

        $db = $this->dbConnect();
        $maj = $db->prepare("UPDATE posts SET title = :title, content = :content WHERE id = :id");
        $maj->bindValue(":id", $id);
        $maj->bindValue(":title", $_POST["title"]);
        $maj->bindValue(":content", $_POST["content"]);
        $maj->execute();

    }
}
