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

    public function listPosts()
    {

        $db = $this->dbConnect();
        $req = $db->query("SELECT id, author, title, content, DATE_FORMAT(deiz, '%d/%m/%Y à %Hh%i') AS deiz_f FROM posts ORDER BY deiz DESC LIMIT 0, 5");
        $res = $req->fetchAll(PDO::FETCH_ASSOC);

        /*foreach ($res as $key => $chap) {
            $post = new Post();
            $post->hydrate($chap["id"], $chap["author"], $chap["title"], $chap["content"], $chap["deiz_f"]);
            $res[$key] = $post;
        }*/
        return $res;
    }

    public function vPost($id) {

        $db = $this->dbConnect();
        $q = $db->prepare("SELECT id, author, title, content, DATE_FORMAT(deiz, '%d/%m/%Y à %Hh%i') AS deiz_f FROM posts WHERE id=?");
        $q->execute(array($id));
        $req = $q->fetch(PDO::FETCH_ASSOC);

        /*$post = new Post();
        $post->hydrate($req["id"], $req["author"], $req["title"], $req["content"], $req["deiz_f"]);*/

        return $req;

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
