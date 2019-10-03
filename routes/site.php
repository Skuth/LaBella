<?php

use Skuth\Page;
use Skuth\Model\Produtos;
use Skuth\Model\Banner;
use Skuth\Model\Categoria;
use Skuth\Model\Marca;


function name($name) {
    $name = str_replace(" ", "-", $name);
    $name = strtolower($name);
    return $name;
}

$app->get("/", function($req, $res, $args) {
 
    $produtos = new Produtos();
    $listaProdutos = $produtos->listAll();

    $banner = Banner::getActiveBanner()[0];
    
    $page = new Page();
    $page->setTpl("home", ["produtos"=>$listaProdutos, "banner"=>$banner]);
    
});

$app->get("/produto/{name}/{id}", function($req, $res, $args) {
    
    $produtos = new Produtos();
    $listaProdutos = $produtos->listAll();
    $produto = $produtos->listById($args["id"])[0];
    
    $page = new Page(["data"=>["produto"=>$produto]]);
    $page->setTpl("produto", ["produto"=>$produto, "produtos"=>$listaProdutos]);
    
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
    
    $page = new Page();
    $page->setTpl("produtos", ["produtos"=>$listaProdutos, "categoria"=>$categoria, "marca"=>$marca]);
    
});

?>