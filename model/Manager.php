<?php

namespace Model;

use \PDO;

/**
 * Class Manager
 * @package Model
 */
class Manager
{
    private $host = DB_HOST;
    private $dbname = DB_NAME;
    private $login = DB_LOGIN;
    private $password = DB_PASSWORD;
    private $port = DB_PORT;

    protected function dbConnect()
    {
        $db = new \PDO('mysql:host=' . $this->host . ';port=' . $this->port . ';dbname=' . $this->dbname . ';charset=utf8', $this->login, $this->password);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $db;
    }
}
