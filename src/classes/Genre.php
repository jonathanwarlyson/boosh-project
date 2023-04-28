<?php

class Genre 
{
    protected $db;

    public function __construct(Database $db)
    {
        $this->db = $db;
    }

    public function get(int $id)
    {
        $sql = "SELECT id, name
                    FROM genre
                WHERE id = :id;";
        return $this->db->runSQL($sql, [$id])->fetch();
    }

    public function getAll(): array
    {
        $sql = "SELECT id, name
                FROM genre;";
        return $this->db->runSQL($sql)->fetchAll();
    }
}