<?php

class Post {

    private $_author;
    private $_content;
    private $_date;
    private $_id;
    private $_title;
    private $_error = [];

    public function __construct(array $data) {
        $this->hydrate($data);
    }

    public function hydrate(array $data) {
        
        foreach ($data as $key => $value) {            
            $method = 'set' . ucfirst($key);
            if (method_exists($this, $method)) {
                $this->$method($value);
            }
        }

    }

    public function getAuthor() {

        return $this->_author;

    }

    public function getContent() {

        return $this->_content;

    }

    public function getDate() {

        return $this->_date;

    }

    public function getError() {

        return $this->_error;

    }

    public function getId() {

        return $this->_id;
        
    }

    public function getTitle() {

        return $this->_title;

    }

    public function setId($id) {
    
        $id = (int)$id;
        if ($id > 0) {
            $this->_id = $id;
        } else {
            $error["id"] = "id incorrect";
        }

    }
    
    public function setAuthor($author) {

        if (is_string($author)) {
            $this->_author = $author;
        }

    }

    public function setContent($content) {

        if (is_string($content)) {
            $this->_content = $content;
        }

    }

    public function setDeiz_f($deiz_f) {

        $this->_date = $deiz_f;

    }

    public function setTitle($title) {

        if (is_string($title)) {
            $this->_title = $title;
        }

    }
    
    public function setError($error) {

        if (is_string($error)) {
            $this->_error = $error;
        }
    }

}