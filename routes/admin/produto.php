<?php

use Skuth\PageAdmin;
use Skuth\Model\User;
use Skuth\Model\Produtos;

$app->get("/admin/produtos", function($req, $res, $args) {
    if (!User::checkUser()) {
        return $res->withRedirect("/admin");
    } else {
        $produtos = new Produtos();
        $prods = $produtos->listAll();
        
        $page = new PageAdmin();
        $page->setTpl("produto/produtos", ["produtos"=>$prods]);
    }
});

$app->get("/admin/produto/cadastrar", function($req, $res, $args) {
    if (!User::checkUser()) {
        return $res->withRedirect("/admin");
    } else {
        $page = new PageAdmin();
        $page->setTpl("produto/cadProduto");
    }
});

$app->get("/admin/produto/editar/{id}", function($req, $res, $args) {
    if (!User::checkUser()) {
        return $res->withRedirect("/admin");
    }

    $id = $args["id"];

    $page = new PageAdmin();
    $page->setTpl("produto/editProduto", ["id"=>$id]);
});

$app->post("/admin/produto/deletar/{id}", function($req, $res, $args) {
    if (!User::checkUser()) {
        return $res->withRedirect("/admin");
    } else {
        $id = $args["id"];  
        return $id;
    }
});


?>