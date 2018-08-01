<?php


class CommMngr extends Mngr {

    public function addComm($author, $comment, $postId) {
        $db = $this->dbConnect();
        $ins = $db->prepare("INSERT INTO comms(author, comment, id_post, deiz_com) VALUES(?, ?, ?, NOW())");
        $ins->execute(array($author, $comment, $postId));
    }
    
    public function delComm($id) {
        $db = $this->dbConnect();
        $req = $db->prepare("DELETE FROM comms WHERE id = :id");
        $req->bindValue(":id", $id);
        $req->execute();
    }

    public function vComms($postId) {

        $db = $this->dbConnect();
        $req = $db->query("SELECT id, author, comment, id_post, DATE_FORMAT(deiz_com, '%d/%m/%Y à %Hh%imin%ss') AS deiz_cf FROM comms WHERE id_post = $postId ORDER BY deiz_com DESC LIMIT 0, 10");
        $res = $req->fetchAll(PDO::FETCH_ASSOC);
        
        foreach ($res as $key => $value) {
            $comm = new Comm($value);
            $res[$key] = $comm;
        }
        return $res;
    }

    public function vComm($id) {

        $db = $this->dbConnect();
        $req = $db->query("SELECT id, author, comment, id_post, DATE_FORMAT(deiz_com, '%d/%m/%Y à %Hh%imin%ss') AS deiz_cf FROM comms WHERE id = $id");
        $res = $req->fetch(PDO::FETCH_ASSOC);
        
        return $res;
    }

    public function report($id) {

        $db = $this->dbConnect();
        $req = $db->prepare("UPDATE comms SET report = :report WHERE id = :id");
        $req->bindValue(":id", $id);
        $req->bindValue(":report", 1);
        $req->execute();
    }

    public function vReport() {
        $db = $this->dbConnect();
        $req = $db->prepare("SELECT * FROM comms WHERE report = :report");
        $req->bindValue(":report", 1);
        $req->execute();
        $reports = $req->fetchAll(PDO::FETCH_ASSOC);
        
        foreach ($reports as $key => $value) {
            $comm = new Comm($value);
            $reports[$key] = $comm;
        }

        return $reports;
    }

}