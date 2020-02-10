<?php

namespace Skuth\Model;

use Skuth\DB\Sql;
use Skuth\Model;

class Produtos extends Model {

    public function listAll()
    {

        $sql = new Sql();
        $query = "SELECT * FROM produtos ORDER BY id DESC";
        $res = $sql->select($query);
        return $res;

    }

    public function listLast($c)
    {

        $sql = new Sql();
        $query = "SELECT * FROM produtos ORDER BY id DESC LIMIT ".$c;
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

    public function delProduto($id) {
        $sql = new Sql();
        $query = "DELETE FROM produtos WHERE id=:id";
        $params = [":id"=>$id];
        $res = $sql->query($query, $params);
    }

    public function cadProduto($img, $nome, $preco, $marca, $categoria) {
        $sql = new Sql();
        $query = "INSERT INTO produtos (marca, tipo, nome, valor, img) VALUES (:marca, :tipo, :nome, :valor, :img)";
        $params = [":nome"=>$nome, ":valor"=>$preco, ":marca"=>$marca, ":tipo"=>$categoria, ":img"=>$img];
        $res = $sql->query($query, $params);
    }

    public function editProduto($id, $img, $nome, $preco, $marca, $categoria) {
        $sql = new Sql();
        $query = "UPDATE produtos SET  marca=:marca, tipo=:tipo, nome=:nome, valor=:valor, img=:img WHERE id=:id";
        $params = [":id"=>$id, ":nome"=>$nome, ":valor"=>$preco, ":marca"=>$marca, ":tipo"=>$categoria, ":img"=>$img];
        $res = $sql->query($query, $params);
    }
    

}

?>