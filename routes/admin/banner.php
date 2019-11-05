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

$app->post("/admin/banner/cadbanner", function($req, $res, $args) {
    if(User::checkUser()) {
        $img = isset($_POST["img"]) ? $_POST["img"] : NULL;
        $link = isset($_POST["link"]) ? $_POST["link"] : NULL;

        if ($param != NULL) {
            $banner = new Banner();
            $banner->cadBanner($img, $link);
            return $res->withRedirect("/admin/banner");
            exit;
        }
    }
});

$app->get("/admin/banner/editar/{id}", function($req, $res, $args) {
    if (!User::checkUser()) {
        return $res->withRedirect("/admin");
    }

    $id = $args["id"];

    if ($id != 0 && $id > 0) {
        $banner = new Banner();
        $bannerId = $banner->listById($id);

        $page = new PageAdmin();
        $page->setTpl("banner/editBanner", ["banner"=>$bannerId[0]]);
    }
});

$app->post("/admin/banner/editbanner", function($req, $res, $args) {
    if(User::checkUser()) {
        $id = isset($_POST["id"]) ? $_POST["id"] : NULL;
        $img = isset($_FILES["img"]) ? $_FILES["img"] : NULL;
        $link = isset($_POST["link"]) ? $_POST["link"] : NULL;

        var_dump($img);

        if ($img["error"] > 0 && $img["size"] <= 0) {
            $banner = new Banner();
            $oldBanner = $banner->listById($id)[0]["img"];
            $img = $oldBanner;
        }

        if ($img != NULL) {
            $upDir = $_SERVER['DOCUMENT_ROOT'].DIRECTORY_SEPARATOR."assets".DIRECTORY_SEPARATOR."banner".DIRECTORY_SEPARATOR;
            $imgTmp = isset($img["tmp_name"]) ? $img["tmp_name"] : NULL;
            
            if ($imgTmp !== NULL) {
                $imgName = $img["name"];
                $imgType = explode(".", $imgName)[1];
                $imgNewName = md5(date("dmyhis").time()).".".$imgType;
                $upFile = $upDir.basename($imgNewName);
                move_uploaded_file($imgTmp, $upFile);
                $img = $imgNewName;
            }
            
            $banner = new Banner();
            $banner->editBanner($id, $img, $link);
            return $res->withRedirect("/admin/banner");
            exit;
        }
    }
});

$app->post("/admin/banner/deletar/{id}", function($req, $res, $args) {
    if (!User::checkUser()) {
        return $res->withRedirect("/admin");
    } else {
        $id = $args["id"];
        if ($id != NULL && $id > 0) {
            $banner = new Banner();
            $banner->delBanner($id);
            return $res->withRedirect("/admin/banner");
            exit;
        }
    }
});

?>