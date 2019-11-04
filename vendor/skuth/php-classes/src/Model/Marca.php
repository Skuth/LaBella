<?php

namespace Skuth\Model;

use Skuth\DB\Sql;
use Skuth\Model;

class Marca {

    public static function listAll() {

        $sql = new Sql();
        $query = "SELECT * FROM marca";
        $res = $sql->select($query);
        return $res;

    }

    public function cadMarca($marca) {
        $sql = new Sql();
        $query = "INSERT INTO marca (marca) VALUES (:marca)";
        $params = [":marca"=>$marca];
        $res = $sql->query($query, $params);
    }

    public function editMarca($id, $marca) {
        $sql = new Sql();
        $query = "UPDATE marca SET marca=:marca WHERE id=:id";
        $params = [":marca"=>$marca, ":id"=>$id];
        $res = $sql->query($query, $params);
    }

    public function delMarca($id) {
        $sql = new Sql();
        $query = "DELETE FROM marca WHERE id=:id";
        $params = [":id"=>$id];
        $res = $sql->query($query, $params);
    }

    public function listById($id) {
        $sql = new Sql();
        $query = "SELECT * FROM marca WHERE id=:id";
        $params = [":id"=>$id];
        $res = $sql->select($query, $params);
        return $res;
    }

}

?>