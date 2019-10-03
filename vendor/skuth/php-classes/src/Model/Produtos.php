<?php

namespace Skuth\Model;

use Skuth\DB\Sql;
use Skuth\Model;

class Produtos extends Model {

    public function listAll()
    {

        $sql = new Sql();
        $query = "SELECT * FROM produtos";
        $res = $sql->select($query);
        return $res;

    }

    public function listById($id)
    {

        $sql = new Sql();
        $query = "SELECT * FROM produtos WHERE id=:id";
        $res = $sql->select($query, ["id"=>$id]);
        return $res;

    }

    public function listByFilter($filter)
    {

        $sql = new Sql();
        $query = "SELECT * FROM produtos WHERE tipo=:tipo";
        $res = $sql->select($query, ["tipo"=>$filter]);
        return $res;

    }

    public function listByMarca($marca)
    {

        $sql = new Sql();
        $query = "SELECT * FROM produtos WHERE marca=:marca";
        $res = $sql->select($query, ["marca"=>$marca]);
        return $res;

    }

}

?>