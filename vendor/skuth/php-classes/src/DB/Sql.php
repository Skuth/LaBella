<?php

namespace Skuth\DB;

class Sql {

    const HOST = "";
    const DB = "";
    const USER = "";
    const PASS = "";
    
    private $conn;

    public function __construct()
    {
        $this->conn = new \PDO("mysql:host=".self::HOST.";dbname=".self::DB, self::USER, self::PASS, [\PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8"]);
    }

    public function setParams($stmt, $params = [])
    {
        foreach ($params as $key => $value) {
            $this->bindParams($stmt, $key, $value);
        }
    }

    public function bindParams($stmt, $key, $value)
    {
        $stmt->bindParam($key, $value);
    }

    public function query($rawQuery, $params = [])
    {
        $stmt = $this->conn->prepare($rawQuery);
        $this->setParams($stmt, $params);
        $stmt->execute();
    }

    public function select($rawQuery, $params = [])
    {
        $stmt = $this->conn->prepare($rawQuery);
        $this->setParams($stmt, $params);
        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

}

?>