<?php

namespace Skuth\Model;

use Skuth\DB\Sql;
use Skuth\Model;

class Banner {

    public static function getActiveBanner()
    {

        $sql = new Sql();
        $query = "SELECT * FROM banner WHERE active=TRUE LIMIT 1";
        $res = $sql->select($query);
        return $res;

    }

}

?>