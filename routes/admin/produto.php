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

        foreach ($prods as $key => $value) {
            $img = explode(",", $value["img"]);
            $prods[$key]["img"] = $img;
        }
        
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

        if ($img["tmp_name"][0] != NULL) {
            $upDir = $_SERVER['DOCUMENT_ROOT'].DIRECTORY_SEPARATOR."assets".DIRECTORY_SEPARATOR."produtos".DIRECTORY_SEPARATOR;

            foreach ($img["tmp_name"] as $key => $value) {
                $imgTmp = isset($img["tmp_name"][$key]) ? $img["tmp_name"][$key] : NULL;

                if ($imgTmp !== NULL) {
                    $imgName = $img["name"][$key];
                    $imgCount = explode(".", $imgName);
                    $imgType = $imgCount[count($imgCount) - 1];
                    $imgNewName = md5(date("dmyhis").time() * $key).".".$imgType;
                    $upFile = $upDir.basename($imgNewName);
                    move_uploaded_file($imgTmp, $upFile);
                    $img["name"][$key] = $imgNewName;
                }

            }

            $name = "";
            foreach ($img["name"] as $key => $value) {
                if ($key == 0) {
                    $name = $value;                        
                } else {
                    $name = $name.",".$value;
                }
            }

            $produtos = new Produtos();
            $produtos->cadProduto($name, $nome, $preco, $marca, $cateogira);
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

        var_dump($img);

        $produtos = new Produtos();

        foreach ($img["name"] as $key => $value) {
            if ($img["error"][$key] > 0 && $img["size"][$key] <= 0) {
                $produto = $produtos->listById($id);
                $name = $produto[0]["img"];
            }
        }

        if ($img["tmp_name"][0] != NULL) {
            $upDir = $_SERVER['DOCUMENT_ROOT'].DIRECTORY_SEPARATOR."assets".DIRECTORY_SEPARATOR."produtos".DIRECTORY_SEPARATOR;

            foreach ($img["tmp_name"] as $key => $value) {
                $imgTmp = isset($img["tmp_name"][$key]) ? $img["tmp_name"][$key] : NULL;

                if ($imgTmp !== NULL) {
                    $imgName = $img["name"][$key];
                    $imgCount = explode(".", $imgName);
                    $imgType = $imgCount[count($imgCount) - 1];
                    $imgNewName = md5(date("dmyhis").time() * $key).".".$imgType;
                    $upFile = $upDir.basename($imgNewName);
                    move_uploaded_file($imgTmp, $upFile);
                    $img["name"][$key] = $imgNewName;
                }

            }

            $name = "";
            foreach ($img["name"] as $key => $value) {
                if ($key == 0) {
                    $name = $value;                        
                } else {
                    $name = $name.",".$value;
                }
            }
        }

        $produtos->editProduto($id, $name, $nome, $preco, $marca, $cateogira);
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