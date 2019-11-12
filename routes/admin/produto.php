<?php

use Skuth\PageAdmin;
use Skuth\Model\User;
use Skuth\Model\Produtos;
use Skuth\Model\Marca;
use Skuth\Model\Categoria;

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
        $marca = new Marca();
        $marcas = $marca->listAll();

        $cateogira = new Categoria();
        $cateogiras = $cateogira->listAll();

        $page = new PageAdmin();
        $page->setTpl("produto/cadProduto", ["marcas"=>$marcas, "categorias"=>$cateogiras]);
    }
});


$app->post("/admin/produto/cadproduto", function($req, $res, $args) {
    if(User::checkUser()) {
        $img = isset($_FILES["img"]) ? $_FILES["img"] : NULL;
        $nome = isset($_POST["nome"]) ? $_POST["nome"] : NULL;
        $preco = isset($_POST["preco"]) ? $_POST["preco"] : NULL;
        $marca = isset($_POST["marca"]) ? $_POST["marca"] : NULL;
        $cateogira = isset($_POST["categoria"]) ? $_POST["categoria"] : NULL;

        if ($img != NULL) {
            $upDir = $_SERVER['DOCUMENT_ROOT'].DIRECTORY_SEPARATOR."assets".DIRECTORY_SEPARATOR."produtos".DIRECTORY_SEPARATOR;
            $imgTmp = isset($img["tmp_name"]) ? $img["tmp_name"] : NULL;
            
            if ($imgTmp !== NULL) {
                $imgName = $img["name"];
                $imgType = explode(".", $imgName)[1];
                $imgNewName = md5(date("dmyhis").time()).".".$imgType;
                $upFile = $upDir.basename($imgNewName);
                move_uploaded_file($imgTmp, $upFile);
                $img = $imgNewName;
            }

            $produtos = new Produtos();
            $produtos->cadProduto($img, $nome, $preco, $marca, $cateogira);
            return $res->withRedirect("/admin/produtos");
            exit;
        }
    }
});

$app->get("/admin/produto/editar/{id}", function($req, $res, $args) {
    if (!User::checkUser()) {
        return $res->withRedirect("/admin");
    }

    $id = $args["id"];

    $marca = new Marca();
    $marcas = $marca->listAll();

    $cateogira = new Categoria();
    $cateogiras = $cateogira->listAll();

    $produtos = new Produtos();
    $produto = $produtos->listById($id);

    $page = new PageAdmin();
    $page->setTpl("produto/editProduto", ["produto"=>$produto[0], "marcas"=>$marcas, "categorias"=>$cateogiras]);
});

$app->post("/admin/produto/editproduto", function($req, $res, $args) {
    if(User::checkUser()) {
        $img = isset($_FILES["img"]) ? $_FILES["img"] : NULL;
        $id = isset($_POST["id"]) ? $_POST["id"] : NULL;
        $nome = isset($_POST["nome"]) ? $_POST["nome"] : NULL;
        $preco = isset($_POST["preco"]) ? $_POST["preco"] : NULL;
        $marca = isset($_POST["marca"]) ? $_POST["marca"] : NULL;
        $cateogira = isset($_POST["categoria"]) ? $_POST["categoria"] : NULL;

        $produtos = new Produtos();

        if ($img["error"] > 0 && $img["size"] <= 0) {
            $produto = $produtos->listById($id);
            $img = $produto[0]["img"];
        }

        if ($img != NULL) {
            $upDir = $_SERVER['DOCUMENT_ROOT'].DIRECTORY_SEPARATOR."assets".DIRECTORY_SEPARATOR."produtos".DIRECTORY_SEPARATOR;
            $imgTmp = isset($img["tmp_name"]) ? $img["tmp_name"] : NULL;
            
            if ($imgTmp !== NULL) {
                $imgName = $img["name"];
                $imgType = explode(".", $imgName)[1];
                $imgNewName = md5(date("dmyhis").time()).".".$imgType;
                $upFile = $upDir.basename($imgNewName);
                move_uploaded_file($imgTmp, $upFile);
                $img = $imgNewName;
            }
        }

        $produtos->editProduto($id, $img, $nome, $preco, $marca, $cateogira);
        return $res->withRedirect("/admin/produtos");
        exit;
    }
});

$app->post("/admin/produto/deletar/{id}", function($req, $res, $args) {
    if (!User::checkUser()) {
        return $res->withRedirect("/admin");
    } else {
        $id = $args["id"];  
        
        $produtos = new produtos();
        $produtos->delProduto($id);
        return $res->withRedirect("/admin/produtos");
        exit;
    }
});


?>