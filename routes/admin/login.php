<?php

use Skuth\PageAdmin;
use Skuth\Model\User;

$app->get("/admin/login[/{erro}]", function($req, $res, $args) {
    if (User::checkUser()) {
        return $res->withRedirect("/admin");
    }

    $erro = isset($args["erro"]) ? $args["erro"] : false;
    
    $page = new PageAdmin([
        "nav"=>false
    ]);
    $page->setTpl("login", ["erro"=>$erro]);
});

$app->post("/admin/login/verificar", function($req, $res, $args) {
    $login = $_POST["login"] ? $_POST["login"] : NULL;
    $senha = $_POST["senha"] ? $_POST["senha"] : NULL;

    if ($login && $senha !== NULL) {
        $_SESSION["login"] = [
            "login"=>"skuth",
            "nome"=>"Flávio Gomes"
        ];
        return $res->withRedirect("/admin/painel");
        exit;
    } else {
        return $res->withRedirect("/admin/login/erro");
        exit;
    }
});

$app->get("/admin/logout", function($req, $res, $args) {
    session_unset();
    session_destroy();

    return $res->withRedirect("/admin/login");
    exit;
});

?>