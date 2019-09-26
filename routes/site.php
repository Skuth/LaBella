<?php

use Skuth\Page;


function name($name) {
    $name = str_replace(" ", "-", $name);
    $name = strtolower($name);
    return $name;
}

$app->get("/", function($req, $res, $args) {
    
    $produtos = [];
    
    $produto = [
        "img"=>"https://bit.ly/2lRSfRe",
        "marca"=>"Moda pop",
        "tipo"=>"feminino",
        "nome"=>"Blusa Detalhe Tule Preto",
        "valor"=>"99,00"
    ];
    
    array_push($produtos, $produto);
    array_push($produtos, $produto);
    array_push($produtos, $produto);
    array_push($produtos, $produto);
    
    $page = new Page();
    
    $page->setTpl("home", ["produtos"=>$produtos]);
    
});

$app->get("/produto/{name}/{id}", function($req, $res, $args) {
    
    $produtos = [];
    
    $prod = [
        "img"=>"https://bit.ly/2lRSfRe",
        "marca"=>"Moda pop",
        "tipo"=>"feminino",
        "nome"=>"Blusa Detalhe Tule Preto",
        "valor"=>"99,00"
    ];
    
    array_push($produtos, $prod);
    array_push($produtos, $prod);
    array_push($produtos, $prod);
    array_push($produtos, $prod);
    
    $produto = [
        "img"=>"https://bit.ly/2lRSfRe",
        "marca"=>"Moda pop",
        "tipo"=>"feminino",
        "nome"=>"Blusa Detalhe Tule Preto",
        "valor"=>"99,00",
        "tamanhos"=>[]
    ];
    
    array_push($produto["tamanhos"], 34);
    array_push($produto["tamanhos"], 36);
    array_push($produto["tamanhos"], 38);
    array_push($produto["tamanhos"], 40);
    array_push($produto["tamanhos"], 42);
    
    $page = new Page(["data"=>["produto"=>$produto]]);
    
    $page->setTpl("produto", ["produto"=>$produto, "produtos"=>$produtos]);
    
});

$app->get("/produtos/{tipo}", function($req, $res, $args) {
    
    $page = new Page();
    
    $page->setTpl("produtos");
    
});

?>