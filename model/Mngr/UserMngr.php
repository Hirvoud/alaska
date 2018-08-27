<?php


class UserMngr extends Mngr {

    public function inscrip($pseudo, $email, $password) {

        $db = $this->dbConnect();

        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $ins = $db->prepare("INSERT INTO users (pseudo, email, hash_pass) VALUES(:pseudo, :email, :hash_pass)");
            
            $ins->bindValue(":pseudo", $pseudo);
            $ins->bindValue(":email", $email);
            $ins->bindValue(":hash_pass", $password);

            $ins->execute();
        } else {
            echo "Email non valide.";
        }
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
            return $pass;
        } else {
            header("Location: " . HOST . "denied");
        }

    }

    public function delUser($pseudo) {

        $db = $this->dbConnect();

        $q = $db->prepare("DELETE FROM users WHERE pseudo = :pseudo");
        $q->bindValue(":pseudo", $pseudo);
        $q->execute();

    }

    public function getUser($pseudo) {
        
        $db = $this->dbConnect();

        $q = $db->prepare("SELECT * FROM users WHERE pseudo = :pseudo");
        $q->bindValue(":pseudo", $pseudo);
        $q->execute();
        $req = $q->fetch(PDO::FETCH_ASSOC);
        return $req;

    }

    public function newPass($pseudo, $pass) {

        $db = $this->dbConnect();

        $q = $db->prepare("UPDATE users SET hash_pass = :pass WHERE pseudo = :pseudo");
        $q->bindValue(":pass", $pass);
        $q->bindValue(":pseudo", $pseudo);
        $q->execute();

    }

    public function testEmail($email) {

        $db = $this->dbConnect();

        $user = $db->prepare("SELECT count(*) FROM users WHERE email = :email");
        $user->bindValue(":email", $email);
        $user->execute();
        $count = $user->fetchColumn();

        return $count;

    }

    public function testPseudo($pseudo) {

        $db = $this->dbConnect();

        $user = $db->prepare("SELECT count(*) FROM users WHERE pseudo = :pseudo");
        $user->bindValue(":pseudo", $pseudo);
        $user->execute();
        $count = $user->fetchColumn();

        return $count;

    }
}