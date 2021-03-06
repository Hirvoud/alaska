<?php

class PostMngr extends Mngr {

    public function addPost($author, $title, $content) {
        
        $db = $this->dbConnect();
    
        $ins = $db->prepare("INSERT INTO posts(author, title, content, deiz) VALUES(:author, :title, :content, NOW())");
        $ins->bindValue(":author", $author);
        $ins->bindValue(":title", $title);
        $ins->bindValue(":content", $content);
        $ins->execute();

    }

    public function countPost($id) {

        $db = $this->dbConnect();

        $req = $db->prepare("SELECT count(*) FROM posts WHERE id = :id");
        $req->bindValue(":id", $id);
        $req->execute();
        
        $count = $req->fetch(PDO::FETCH_ASSOC);

        return reset($count);

    }

    public function delPost($id) {

        $db = $this->dbConnect();

        $req = $db->prepare("DELETE p, c FROM posts p JOIN comms c ON c.id_post = p.id WHERE p.id = :id");
        $req->bindValue(":id", $id);
        $req->execute();

    }

    public function listPosts()
    {

        $db = $this->dbConnect();
        $req = $db->query("SELECT id, author, title, content, DATE_FORMAT(deiz, '%d/%m/%Y à %Hh%i') AS deiz_f FROM posts ORDER BY deiz DESC");
        $res = $req->fetchAll(PDO::FETCH_ASSOC);

        foreach ($res as $key => $chap) {
            $post = new Post($chap);
            $res[$key] = $post;
        }

        return $res;
        
    }

    public function upPost($id) {

        $db = $this->dbConnect();
        $maj = $db->prepare("UPDATE posts SET title = :title, content = :content WHERE id = :id");
        $maj->bindValue(":id", $id);
        $maj->bindValue(":title", $_POST["title"]);
        $maj->bindValue(":content", $_POST["content"]);
        $maj->execute();

    }
    
    public function vPost($id) {

        $db = $this->dbConnect();
        $q = $db->prepare("SELECT id, author, title, content, DATE_FORMAT(deiz, '%d/%m/%Y à %Hh%i') AS deiz_f FROM posts WHERE id=?");
        $q->execute(array($id));
        $req = $q->fetch(PDO::FETCH_ASSOC);

        if ($req) {
            $post = new Post($req);
        }
        
        return $req;

    }

}
