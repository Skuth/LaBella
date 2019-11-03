<?php

use Skuth\PageAdmin;
use Skuth\Model\User;
use Skuth\Model\Banner;

$app->get("/admin/banner", function($req, $res, $args) {
    if (!User::checkUser()) {
        return $res->withRedirect("/admin");
    } else {
        $banner = new Banner();
        $banners = $banner->listAll();

        $page = new PageAdmin();
        $page->setTpl("banner/banner", ["banners"=>$banners]);
    }
});

$app->get("/admin/banner/cadastrar", function($req, $res, $args) {
    if (!User::checkUser()) {
        return $res->withRedirect("/admin");
    } else {
        $page = new PageAdmin();
        $page->setTpl("banner/cadBanner");
    }
});

$app->get("/admin/banner/editar/{id}", function($req, $res, $args) {
    if (!User::checkUser()) {
        return $res->withRedirect("/admin");
    }

    $id = $args["id"];

    $page = new PageAdmin();
    $page->setTpl("banner/editBanner", ["id"=>$id]);
});

$app->post("/admin/banner/deletar/{id}", function($req, $res, $args) {
    if (!User::checkUser()) {
        return $res->withRedirect("/admin");
    } else {
        $id = $args["id"];  
        return $id;
    }
});

?>