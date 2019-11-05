<?php

namespace Skuth\Model;

use Skuth\DB\Sql;
use Skuth\Model;

class Categoria {

    public static function listAll() {

        $sql = new Sql();
        $query = "SELECT * FROM categoria";
        $res = $sql->select($query);
        return $res;

    }

    public function cadCategoria($categoria) {
        $sql = new Sql();
        $query = "INSERT INTO categoria (categoria) VALUES (:categoria)";
        $params = [":categoria"=>$categoria];
        $res = $sql->query($query, $params);
    }

    public function editCategoria($id, $categoria) {
        $sql = new Sql();
        $query = "UPDATE categoria SET categoria=:categoria WHERE id=:id";
        $params = [":categoria"=>$categoria, ":id"=>$id];
        $res = $sql->query($query, $params);
    }

    public function delCategoria($id) {
        $sql = new Sql();
        $query = "DELETE FROM categoria WHERE id=:id";
        $params = [":id"=>$id];
        $res = $sql->query($query, $params);
    }

    public function listById($id) {
        $sql = new Sql();
        $query = "SELECT * FROM categoria WHERE id=:id";
        $params = [":id"=>$id];
        $res = $sql->select($query, $params);
        return $res;
    }

}

?>