<?php

namespace Skuth\Model;

use Skuth\DB\Sql;
use Skuth\Model;

class Categoria {

    public static function listAll()
    {

        $sql = new Sql();
        $query = "SELECT * FROM categoria";
        $res = $sql->select($query);
        return $res;

    }

}

?>