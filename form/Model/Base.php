<?php

namespace App\Model;

use App\DB\Connection;

abstract class Base extends Connection
{
    protected $table;
    protected $primary_key = 'id';
    protected $prepare;

    public function __construct()
    {
        $this->connect();
    }

    /**
     * Get all data
     *
     * @return array
     */
    public function all()
    {
        $this->make("SELECT * FROM {$this->table}");
        return $this->fetchAll();
    }

    /**
     * Find row by id
     *
     * @param $id
     * @return array
     */
    public function find($id)
    {
        $this->make("SELECT * FROM {$this->table} WHERE {$this->primary_key} = {$id}");
        return $this->fetch();
    }

    /**
     * Get first row
     *
     * @return array
     */
    public function first()
    {
        $this->make("SELECT * FROM {$this->table} ORDER BY {$this->primary_key} DESC LIMIT 1");
        return $this->fetch();
    }

    /**
     * Insert new row
     *
     * @param $data
     * @return mixed
     */
    public function insert($data)
    {
        $bind = array_map(function ($item){
            return ':'.$item;
        }, array_keys($data));

        $string = "INSERT INTO {$this->table} (".implode(',', array_keys($data)).") VALUES (".implode(',', $bind).")";

        $this->make($string);
        return $this->prepare->execute($data) ? $this->db->lastInsertId() : false;
    }

    /**
     * Prepare the query statement
     *
     * @param $string
     */
    private function make($string)
    {
        $this->prepare = $this->db->prepare($string);
    }

    /**
     * Fetch only one
     *
     * @return array
     */
    private function fetch()
    {
        return $this->prepare->execute() ? $this->prepare->fetch() : [];
    }

    /**
     * Fetch all
     *
     * @return array
     */
    private function fetchAll()
    {
        return $this->prepare->execute() ? $this->prepare->fetchAll() : [];
    }
}
