<?php

namespace Model;

use \PDO;

/**
 * Class Manager
 * @package Model
 */
class Manager
{
    private $host = "md285151-001.privatesql";
    private $dbname = "blogjeanforteroche";
    private $login = "DisizM18lpU";
    private $password = "CVNulMno12";
    private $port = 35467; // j'ai pas ajouté le port dans db connexion

    protected function dbConnect()
    {
        $db = new \PDO('mysql:host=' . $this->host . ';port=' . $this->port . ';dbname=' . $this->dbname . ';charset=utf8', $this->login, $this->password);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $db;
    }
}
