<?php

use Skuth\PageAdmin;
use Skuth\Model\User;
use Skuth\Model\Categoria;

$app->get("/admin/categorias", function($req, $res, $args) {
    if (!User::checkUser()) {
        return $res->withRedirect("/admin");
    } else {
        $categoria = new Categoria();
        $categorias = $categoria->listAll();
        
        $page = new PageAdmin();
        $page->setTpl("categoria/categorias", ["categorias"=>$categorias]);
    }
});

$app->get("/admin/categoria/cadastrar", function($req, $res, $args) {
    if (!User::checkUser()) {
        return $res->withRedirect("/admin");
    } else {
        $page = new PageAdmin();
        $page->setTpl("categoria/cadCategoria");
    }
});

$app->post("/admin/categoria/cadcategoria", function($req, $res, $args) {
    if(User::checkUser()) {
        $param = isset($_POST["categoria"]) ? $_POST["categoria"] : NULL;

        if ($param != NULL) {
            $categoria = new Categoria();
            $categoria->cadCategoria($param);
            return $res->withRedirect("/admin/categorias");
            exit;
        }
    }
});


$app->get("/admin/categoria/editar/{id}", function($req, $res, $args) {
    if (!User::checkUser()) {
        return $res->withRedirect("/admin");
    }

    $id = $args["id"];

    if ($id != NULL && $id > 0) {
        $categoria = new Categoria();
        $catId = $categoria->listById($id);

        $page = new PageAdmin();
        $page->setTpl("categoria/editCategoria", ["categoria"=>$catId[0]]);
    }
});

$app->post("/admin/categoria/editcategoria", function($req, $res, $args) {
    if(User::checkUser()) {
        $id = isset($_POST["id"]) ? $_POST["id"] : NULL;
        $param = isset($_POST["categoria"]) ? $_POST["categoria"] : NULL;

        if ($param != NULL) {
            $categoria = new Categoria();
            $categoria->editCategoria($id, $param);
            return $res->withRedirect("/admin/categorias");
            exit;
        } else {
            var_dump("Teste");
        }
    }
});

$app->post("/admin/categoria/deletar/{id}", function($req, $res, $args) {
    if (!User::checkUser()) {
        return $res->withRedirect("/admin");
    } else {
        $id = $args["id"];  
        if ($id != NULL && $id > 0) {
            $categoria = new Categoria();
            $categoria->delCategoria($id);
            return $res->withRedirect("/admin/categorias");
            exit;
        }
    }
});

?>