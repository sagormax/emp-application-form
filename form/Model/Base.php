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
     * @param array $where
     * @return array
     */
    public function first($where = null)
    {
        $query_str = "SELECT * FROM {$this->table} ";
        if( $where != null ){
            $query_str = $query_str . $where;
        }

        $query_str = $query_str . "ORDER BY {$this->primary_key} DESC LIMIT 1";
        $this->make($query_str);
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
        $bind   = $this->makeBind($data);
        $string = "INSERT INTO {$this->table} (".implode(',', array_keys($data)).") VALUES (".implode(',', $bind).")";

        $this->make($string);
        return $this->prepare->execute($data) ? $this->db->lastInsertId() : false;
    }

    /**
     * Update row
     *
     * @param $data
     * @param $id
     * @return mixed
     */
    public function update($data, $id)
    {
        $bind   = $this->makeBind($data, true);
        $string = "UPDATE {$this->table} SET ".implode(',', $bind)." WHERE {$this->primary_key}=:{$this->primary_key}";

        $this->make($string);
        $exe    = array_merge($data, [$this->primary_key => $id]);

        $this->prepare->execute($exe);

        return $this->prepare->rowCount();
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

    /**
     * Get Bind Property
     *
     * @param array $data
     * @param bool $update
     * @return array
     */
    private function makeBind($data = [], $update = false)
    {
        return array_map(function ($item) use ($update) {
            return $update ? $item.'=:'.$item : ':'.$item;
        }, array_keys($data));
    }
}
