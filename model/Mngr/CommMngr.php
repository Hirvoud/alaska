<?php

require_once("Mngr.php");

class CommMngr extends Mngr {

    public function addComm($author, $comment, $postId) {
        $db = $this->dbConnect();
        $ins = $db->prepare("INSERT INTO comms(author, comment, id_post, deiz_com) VALUES(?, ?, ?, NOW())");
        $ins->execute(array($author, $comment, $postId));
    }
    
    public function delComm($id) {
        $db = $this->dbConnect();
        $db->query("DELETE * FROM comms WHERE id=$id");
    }

    public function vComms($postId) {

        $db = $this->dbConnect();
        $req = $db->query("SELECT id, author, comment, id_post, DATE_FORMAT(deiz_com, '%d/%m/%Y à %Hh%imin%ss') AS deiz_cf FROM comms WHERE id_post = $postId ORDER BY deiz_com DESC LIMIT 0, 10");
        $res = $req->fetchAll(PDO::FETCH_ASSOC);
        
        /*foreach ($res as $key => $value) {
            $comm = new Comm();
            $comm->hydrate($value["id"], $value["author"], $value["comment"], $value["id_post"], $value["deiz_cf"]);
            $res[$key] = $comm;
        }*/
        return $res;
    }

    public function vComm($id) {

        $db = $this->dbConnect();
        $req = $db->query("SELECT id, author, comment, id_post, DATE_FORMAT(deiz_com, '%d/%m/%Y à %Hh%imin%ss') AS deiz_cf FROM comms WHERE id = $id");
        $res = $req->fetch(PDO::FETCH_ASSOC);
        
        return $res;
    }

}