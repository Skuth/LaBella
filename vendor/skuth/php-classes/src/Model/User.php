<?php

namespace Skuth\Model;

use Skuth\DB\Sql;
use Skuth\Model;

class User extends Model {

    public static function checkUser() {
        if (isset($_SESSION["login"])) {
            return true;
        } else {
            return false;
        }
    }

}


?>