<?php

class Mngr
{
    protected function dbConnect()
    {
        $db = new PDO("mysql:host=localhost;dbname=alaska", "root", "", array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        return $db;
    }
}