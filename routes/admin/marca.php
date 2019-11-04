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

$app->post("/admin/marca/cadmarca", function($req, $res, $args) {
    if(User::checkUser()) {
        $param = isset($_POST["marca"]) ? $_POST["marca"] : NULL;

        if ($param != NULL) {
            $marca = new Marca();
            $marca->cadMarca($param);
            return $res->withRedirect("/admin/marcas");
            exit;
        }
    }
});

$app->get("/admin/marca/editar/{id}", function($req, $res, $args) {
    if (!User::checkUser()) {
        return $res->withRedirect("/admin");
    }

    $id = $args["id"];

    if ($id != NULL && $id > 0) {
        $marca = new Marca();
        $marcaId = $marca->listById($id);

        $page = new PageAdmin();
        $page->setTpl("marca/editMarca", ["marca"=>$marcaId[0]]);
    }
});

$app->post("/admin/marca/editmarca", function($req, $res, $args) {
    if(User::checkUser()) {
        $id = isset($_POST["id"]) ? $_POST["id"] : NULL;
        $param = isset($_POST["marca"]) ? $_POST["marca"] : NULL;

        if ($param != NULL) {
            $marca = new Marca();
            $marca->editMarca($id, $param);
            return $res->withRedirect("/admin/marcas");
            exit;
        }
    }
});

$app->post("/admin/marca/deletar/{id}", function($req, $res, $args) {
    if (!User::checkUser()) {
        return $res->withRedirect("/admin");
    } else {
        $id = $args["id"];  
        if ($id != NULL && $id > 0) {
            $marca = new Marca();
            $marca->delMarca($id);
            return $res->withRedirect("/admin/marcas");
            exit;
        }
    }
});

?>