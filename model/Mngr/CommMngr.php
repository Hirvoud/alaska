<?php

require_once("Mngr.php");

class CommMngr extends Mngr {


    public function addComm($author, $comment, $postId, $date) {
        $db = $this->dbConnect();
        $db->prepare("INSERT INTO comms(author, comment, post_id, deiz_com) VALUES(?, ?, ?, NOW())");
        $ins = $db->execute(array($author, $comment, $postId));
    }
    
    public function delComm($id) {
        $db = $this->dbConnect();
        $db->query("DELETE * FROM comms WHERE id=$id");
    }

    public function vComms($postId) {
        $db = $this->dbConnect();
        $req = $db->query("SELECT id, author, comment, postId, DATE_FORMAT(deiz_com, '%d/%m/%Y à %Hh%imin%ss') AS deiz_cf FROM comms WHERE postId = $postId ORDER BY deiz DESC LIMIT 0, 10");

        return $req;
    }

    public function eComm($id, $comm) {
        $db = $this−>dbConnect();
        $req = $db->query("UPDATE comms SET comment = $comm WHERE id = $id");
    }

}