<?php

use Skuth\PageAdmin;
use Skuth\Model\User;
use Skuth\Model\Produtos;
use Skuth\Model\Marca;
use Skuth\Model\Categoria;
use Skuth\Model\Banner;


$app->get("/admin", function($req, $res, $args){
    if (USer::checkUser()) {
        return $res->withRedirect("/admin/painel");
    } else {
        return $res->withRedirect("/admin/login");
    }
});

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

$app->get("/admin/painel", function($req, $res, $args) {
    if (!User::checkUser()) {
        return $res->withRedirect("/admin");
    } else {
        $produtos = new Produtos();
        $prods = $produtos->listAll();

        $page = new PageAdmin();
        $page->setTpl("painel", ["produtos"=>$prods]);
    }
});

$app->get("/admin/produtos", function($req, $res, $args) {
    if (!User::checkUser()) {
        return $res->withRedirect("/admin");
    } else {
        $produtos = new Produtos();
        $prods = $produtos->listAll();
        
        $page = new PageAdmin();
        $page->setTpl("produtos", ["produtos"=>$prods]);
    }
});

$app->get("/admin/marcas", function($req, $res, $args) {
    if (!User::checkUser()) {
        return $res->withRedirect("/admin");
    } else {
        $marca = new Marca();
        $marcas = $marca->listAll();
        
        $page = new PageAdmin();
        $page->setTpl("marcas", ["marcas"=>$marcas]);
    }
});

$app->post("/admin/marca/deletar/{id}", function($req, $res, $args) {
    if (!User::checkUser()) {
        return $res->withRedirect("/admin");
    } else {
        $id = $args["id"];  
        return $id;
    }
});

$app->get("/admin/marca/editar/{id}", function($req, $res, $args) {
    if (!User::checkUser()) {
        return $res->withRedirect("/admin");
    }

    $id = $args["id"];

    $page = new PageAdmin();
    $page->setTpl("editMarca", ["id"=>$id]);
});

$app->get("/admin/marca/cadastrar", function($req, $res, $args) {
    if (!User::checkUser()) {
        return $res->withRedirect("/admin");
    } else {
        $page = new PageAdmin();
        $page->setTpl("cadMarca");
    }
});



$app->get("/admin/categorias", function($req, $res, $args) {
    if (!User::checkUser()) {
        return $res->withRedirect("/admin");
    } else {
        $categoria = new Categoria();
        $categorias = $categoria->listAll();
        
        $page = new PageAdmin();
        $page->setTpl("categorias", ["categorias"=>$categorias]);
    }
});

$app->post("/admin/categoria/deletar/{id}", function($req, $res, $args) {
    if (!User::checkUser()) {
        return $res->withRedirect("/admin");
    } else {
        $id = $args["id"];  
        return $id;
    }
});

$app->get("/admin/categoria/editar/{id}", function($req, $res, $args) {
    if (!User::checkUser()) {
        return $res->withRedirect("/admin");
    }

    $id = $args["id"];

    $page = new PageAdmin();
    $page->setTpl("editCategoria", ["id"=>$id]);
});

$app->get("/admin/categoria/cadastrar", function($req, $res, $args) {
    if (!User::checkUser()) {
        return $res->withRedirect("/admin");
    } else {
        $page = new PageAdmin();
        $page->setTpl("cadCategoria");
    }
});



$app->get("/admin/produto/cadastrar", function($req, $res, $args) {
    if (!User::checkUser()) {
        return $res->withRedirect("/admin");
    } else {
        $page = new PageAdmin();
        $page->setTpl("cadProduto");
    }
});

$app->get("/admin/produto/editar/{id}", function($req, $res, $args) {
    if (!User::checkUser()) {
        return $res->withRedirect("/admin");
    }

    $id = $args["id"];

    $page = new PageAdmin();
    $page->setTpl("editProduto", ["id"=>$id]);
});

$app->post("/admin/produto/deletar/{id}", function($req, $res, $args) {
    if (!User::checkUser()) {
        return $res->withRedirect("/admin");
    } else {
        $id = $args["id"];  
        return $id;
    }
});

$app->get("/admin/banner", function($req, $res, $args) {
    if (!User::checkUser()) {
        return $res->withRedirect("/admin");
    } else {
        $banner = new Banner();
        $banners = $banner->listAll();

        $page = new PageAdmin();
        $page->setTpl("banner", ["banners"=>$banners]);
    }
});

$app->get("/admin/banner/cadastrar", function($req, $res, $args) {
    if (!User::checkUser()) {
        return $res->withRedirect("/admin");
    } else {
        $page = new PageAdmin();
        $page->setTpl("cadBanner");
    }
});

$app->get("/admin/banner/editar/{id}", function($req, $res, $args) {
    if (!User::checkUser()) {
        return $res->withRedirect("/admin");
    }

    $id = $args["id"];

    $page = new PageAdmin();
    $page->setTpl("editBanner", ["id"=>$id]);
});

$app->post("/admin/banner/deletar/{id}", function($req, $res, $args) {
    if (!User::checkUser()) {
        return $res->withRedirect("/admin");
    } else {
        $id = $args["id"];  
        return $id;
    }
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