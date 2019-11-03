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


$app->get("/admin/categoria/editar/{id}", function($req, $res, $args) {
    if (!User::checkUser()) {
        return $res->withRedirect("/admin");
    }

    $id = $args["id"];

    $page = new PageAdmin();
    $page->setTpl("categoria/editCategoria", ["id"=>$id]);
});

$app->post("/admin/categoria/deletar/{id}", function($req, $res, $args) {
    if (!User::checkUser()) {
        return $res->withRedirect("/admin");
    } else {
        $id = $args["id"];  
        return $id;
    }
});

?>