<?php

namespace Skuth\Model;

use Skuth\DB\Sql;
use Skuth\Model;

class Marca {

    public static function listAll()
    {

        $sql = new Sql();
        $query = "SELECT * FROM marca";
        $res = $sql->select($query);
        return $res;

    }

}

?>