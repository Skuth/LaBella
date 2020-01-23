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

    public function login($login, $senha) {
        $sql = new Sql();
        $query = "SELECT * FROM usuarios WHERE login=:login && senha=:senha";
        $params = [":login"=>$login, ":senha"=>md5($senha)];
        $res = $sql->select($query, $params);
        return $res;
    }

}


?>