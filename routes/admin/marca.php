<?php

use Skuth\PageAdmin;
use Skuth\Model\User;
use Skuth\Model\Marca;

$app->get("/admin/marcas", function($req, $res, $args) {
    if (!User::checkUser()) {
        return $res->withRedirect("/admin");
    } else {
        $marca = new Marca();
        $marcas = $marca->listAll();
        
        $page = new PageAdmin();
        $page->setTpl("marca/marcas", ["marcas"=>$marcas]);
    }
});

$app->get("/admin/marca/cadastrar", function($req, $res, $args) {
    if (!User::checkUser()) {
        return $res->withRedirect("/admin");
    } else {
        $page = new PageAdmin();
        $page->setTpl("marca/cadMarca");
    }
});

$app->get("/admin/marca/editar/{id}", function($req, $res, $args) {
    if (!User::checkUser()) {
        return $res->withRedirect("/admin");
    }

    $id = $args["id"];

    $page = new PageAdmin();
    $page->setTpl("marca/editMarca", ["id"=>$id]);
});

$app->post("/admin/marca/deletar/{id}", function($req, $res, $args) {
    if (!User::checkUser()) {
        return $res->withRedirect("/admin");
    } else {
        $id = $args["id"];  
        return $id;
    }
});

?>