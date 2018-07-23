<?php

require_once("Mngr.php");

class UserMngr extends Mngr {

    public function inscrip($pseudo, $email, $password) {

        $db = $this->dbConnect();
        $ins = $db->prepare("INSERT INTO users (pseudo, email, hash_pass) VALUES(:pseudo, :email, :hash_pass)");
        
        $ins->bindValue(":pseudo", $pseudo);
        $ins->bindValue(":email", $email);
        $ins->bindValue(":hash_pass", $password);
        $ins->execute();
        
    }

    public function check($pseudo, $password) {
        $db = $this->dbConnect();
        
        $users = $db->prepare("SELECT count(*) FROM users WHERE pseudo = :pseudo");
        $users->bindValue(":pseudo", $pseudo);
        $users->execute();
        $count = $users->fetchColumn();

        if ($count == 1) {
            $q = $db->prepare("SELECT hash_pass FROM users WHERE pseudo = :pseudo");
            $q->bindValue(":pseudo", $pseudo);
            $q->execute();
            $pass = $q->fetch(PDO::FETCH_ASSOC);

            if (password_verify($password, $pass["hash_pass"]) == true) {
                $_SESSION["pseudo"] = $pseudo;
                header("Location: index.php?a=admin");
            } else {
                header("Location: index.php");
            }
        } else {
            header("Location: index.php");
        }

    }

}