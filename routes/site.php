<?php

use Skuth\Page;
use Skuth\Model\Produtos;
use Skuth\Model\Banner;
use Skuth\Model\Categoria;
use Skuth\Model\Marca;

function name($name) {
    $name = strtr(utf8_decode($name), utf8_decode('àáâãäçèéêëìíîïñòóôõöùúûüýÿÀÁÂÃÄÇÈÉÊËÌÍÎÏÑÒÓÔÕÖÙÚÛÜÝ'), 'aaaaaceeeeiiiinooooouuuuyyAAAAACEEEEIIIINOOOOOUUUUY');
    $name = str_replace(" ", "-", $name);
    $name = strtolower($name);
    return $name;
}

$app->get("/", function($req, $res, $args) {
 
    $produtos = new Produtos();
    $listaProdutos = $produtos->listLast(6);

    $banner = Banner::getActiveBanner()[0];

    foreach ($listaProdutos as $key => $value) {
        $img = explode(",", $value["img"]);
        $listaProdutos[$key]["img"] = $img;
    }
    
    $page = new Page();
    $page->setTpl("home", ["produtos"=>$listaProdutos, "banner"=>$banner]);
    
});

$app->get("/produto/{name}/{id}", function($req, $res, $args) {
    
    $url = "https://".$_SERVER["HTTP_HOST"]."/produto/".$args["name"]."/".$args["id"];

    $produtos = new Produtos();
    $listaProdutos = $produtos->listAll();
    $listaProdutosFinal = [];
    $produto = $produtos->listById($args["id"])[0];
    
    shuffle($listaProdutos);

    $produtoImg = explode(",", $produto["img"]);
    $produto["img"] = $produtoImg;

    foreach ($listaProdutos as $key => $value) {
        $img = explode(",", $value["img"]);
        $listaProdutos[$key]["img"] = $img;
    }
    
    foreach ($listaProdutos as $key => $value) {
        if($key <= 5) {
            array_push($listaProdutosFinal, $value);
        }
    }
    
    $page = new Page(["data"=>["produto"=>$produto]]);
    $page->setTpl("produto", ["produto"=>$produto, "produtos"=>$listaProdutosFinal, "url"=>$url]);
    
});

$app->get("/produtos[/{tipo}[/{marca}]]", function($req, $res, $args) {

    $categoria = Categoria::listAll();
    $marca = Marca::listAll();
    $produtos = new Produtos();
      if (isset($args["tipo"])) {
        if($args["tipo"] !== "marca") {
            $listaProdutos = $produtos->listByFilter($args["tipo"]);
        } else {
            $m = $args["marca"];
            $m = str_replace("-", " ", $m);
            $m = ucfirst($m);

            $listaProdutos = $produtos->listByMarca($m);
        }
    } else {
        $listaProdutos = $produtos->listAll();
    }

    foreach ($listaProdutos as $key => $value) {
        $img = explode(",", $value["img"]);
        $listaProdutos[$key]["img"] = $img;
    }
    
    $page = new Page();
    $page->setTpl("produtos", ["produtos"=>$listaProdutos, "categoria"=>$categoria, "marca"=>$marca]);
    
});

?>