<?php

namespace Skuth\Model;

use Skuth\DB\Sql;
use Skuth\Model;

class Banner {

    public static function getActiveBanner() {

        $sql = new Sql();
        $query = "SELECT * FROM banner WHERE active=TRUE LIMIT 1";
        $res = $sql->select($query);
        return $res;

    }

    public function listAll() {
        $sql = new Sql();
        $query = "SELECT * FROM banner";
        $res = $sql->select($query);
        return $res;
    }

    public function cadBanner($banner, $link) {
        $sql = new Sql();
        $query = "INSERT INTO banner (img, link) VALUES (:img, :link)";
        $params = [":img"=>$banner, ":link"=>$link];
        $res = $sql->query($query, $params);
    }

    public function editBanner($id, $banner, $link) {
        $sql = new Sql();
        $query = "UPDATE banner SET img=:img, link=:link WHERE id=:id";
        $params = [":img"=>$banner, ":id"=>$id, ":link"=>$link];
        $res = $sql->query($query, $params);
    }

    public function delBanner($id) {
        $sql = new Sql();
        $query = "DELETE FROM banner WHERE id=:id";
        $params = [":id"=>$id];
        $res = $sql->query($query, $params);
    }

    public function listById($id) {
        $sql = new Sql();
        $query = "SELECT * FROM banner WHERE id=:id";
        $params = [":id"=>$id];
        $res = $sql->select($query, $params);
        return $res;
    }

    public function setBanner($id) {
        $sql = new Sql();
        $query = "UPDATE banner SET active=:active";
        $params = [":active"=>0];
        $res = $sql->query($query, $params);
        
        $newQuery = "UPDATE banner SET active=:active WHERE id=:id";
        $newParams = [":active"=>1, ":id"=>$id];
        $newRes = $sql->query($newQuery, $newParams);
    }

}

?>