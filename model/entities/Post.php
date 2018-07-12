<?php

class Post {

    private $_author;
    private $_content;
    private $_date;
    private $_id;
    private $_title;

    public function __construct() {

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

    public function setDate($date) {

        $this->_date = $date;

    }

    public function setTitle($title) {

        if (is_string($title)) {
            $this->_title = $title;
        }

    }
    
}