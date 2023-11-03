<?php
namespace Adapter;
class DatabaseDriver implements DriverInterface
{
    public function __construct(
        private DataBase $db,
        private \PDO $connexion
        ) {}

    public function doSave(array $data)
    {
        $sqlQuery = implode(",", $data);
        $this->db->doSave($sqlQuery, $this->connexion);
    }
}