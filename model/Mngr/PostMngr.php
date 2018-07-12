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
        $db->query("DELETE * FROM posts WHERE id=$id");
        $db->query("DELETE * FROM comms WHERE postId=$id");
        
        /*$db->prepare()
        $db->execute();

        /*
        $db = "DELETE * FROM posts WHERE id=$id";
        $del = execute($db);
        $db = "DELETE * FROM comms WHERE postId=$id";
        $del = execute($db);
        */
    }

    public function listPosts() {
    
        $db = $this->dbConnect();
        $req = $db->query("SELECT id, author, title, content, DATE_FORMAT(deiz, '%d/%m/%Y à %Hh%imin%ss') AS deiz_f FROM posts ORDER BY deiz DESC LIMIT 0, 5");
        $res = $req->fetchAll();
        return $res;

    }

    public function vPost($id) {
        
        $db = $this->dbConnect();
        $req = $db->prepare("SELECT id, author, title, content, DATE_FORMAT(deiz, '%d/%m/%Y à %Hh%imin%ss') AS deiz_f FROM posts WHERE id=?");
        $req->execute(array($id));
        $post = $req->fetch();

        return $post;

    }

}