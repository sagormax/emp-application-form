<?php

namespace App\DB;

class Connection implements DB_Connection
{
    public $db;
    public $host;
    public $port;
    public $user;
    public $pass;
    public $database;

    public function connect()
    {
        $this->host     = getenv('MYSQL_HOST');
        $this->port     = getenv('MYSQL_PORT');
        $this->user     = getenv('MYSQL_USER');
        $this->pass     = getenv('MYSQL_PASS');
        $this->database = getenv('MYSQL_DATABASE');

        try {
            $this->db = new \PDO('mysql:host='.$this->host.';dbname='.$this->database, $this->user, $this->pass);
        } catch (\PDOException $e) {
            echo "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }

    public function disconnect()
    {
        $this->db = null;
    }
}
