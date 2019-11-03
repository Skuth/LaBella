<?php

namespace Skuth\Model;

use Skuth\DB\Sql;
use Skuth\Model;

class Site {

    public function listAll() {
        $sql = new Sql();
        $query = "SELECT * FROM site";
        $res = $sql->select($query);
        return $res;
    }

}

?>