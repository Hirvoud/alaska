<?php

class User
{

    private $_id;
    private $_pseudo;
    private $_hashPass;
    private $_email;
    private $_admin;

    public function __construct($data)
    {
        $this->hydrate($data);
    }

    public function hydrate(array $data)
    {

        foreach ($data as $key => $value) {
            $method = 'set' . ucfirst($key);
            if (method_exists($this, $method)) {
                $this->$method($value);
            }
        }

    }

    public function getId()
    {

        return $this->_id;

    }

    public function getPseudo()
    {

        return $this->_pseudo;

    }

    public function getHashPass()
    {

        return $this->_hashPass;

    }

    public function getEmail()
    {

        return $this->_email;

    }

    public function getAdmin()
    {

        return $this->_admin;

    }

    public function setId($id)
    {

        $id = (int)$id;
        if ($id > 0) {
            $this->_id = $id;
        } else {
            $error["id"] = "id incorrect";
        }

    }

    public function setPseudo($pseudo)
    {

        if (is_string($pseudo)) {
            $this->_pseudo = $pseudo;
        }

    }

    public function setHash_Pass($hashPass)
    {

        if (is_string($hashPass)) {
            $this->_hashPass = $hashPass;
        }

    }

    public function setEmail($email)
    {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) { //Regex : #^([a-z0-9_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})$#
            $this->_email = $email;
        } else {
            $_error = ["Email incorrect"];
        }
    }

    public function setAdmin($admin)
    {

        if (is_string($admin)) {
            $this->_admin = $admin;
        } else {
            $_error = ["Erreur d'attribution des droits"];
        }

    }

}