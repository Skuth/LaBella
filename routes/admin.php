<?php

use Skuth\PageAdmin;
use Skuth\Model\User;
use Skuth\Model\Produtos;
use Skuth\Model\Site;

$app->get("/admin", function($req, $res, $args){
    if (USer::checkUser()) {
        return $res->withRedirect("/admin/painel");
    } else {
        return $res->withRedirect("/admin/login");
    }
});

$app->get("/admin/painel", function($req, $res, $args) {
    if (!User::checkUser()) {
        return $res->withRedirect("/admin");
    } else {
        $produtos = new Produtos();
        $prods = $produtos->listAll();

        $site = new Site();
        $view = $site->listAll();

        $page = new PageAdmin();
        $page->setTpl("painel", ["produtos"=>$prods, "visitantes"=>$view]);
    }
});

require_once "admin/login.php";
require_once "admin/produto.php";
require_once "admin/marca.php";
require_once "admin/categoria.php";
require_once "admin/banner.php";

?>