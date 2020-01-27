<?php if(!class_exists('Rain\Tpl')){exit;}?><!DOCTYPE html>
<html lang="pt-br">
<head>
    <base href="http://<?php echo htmlspecialchars( $_SERVER['SERVER_NAME'], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Language" content="pt-br">
    
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="keywords" content="mode feminina, roupas, sapatos, la bella, sapato feminino, rasteirinha, sandálias, macacão, salto, salto doze, mule ">
    <meta name="robots" content="index, follow">
    <meta name="revisit-after" content="1 day">
    <meta name="language" content="Portuguese">
    <meta name="generator" content="N/A">

    <link rel="apple-touch-icon" sizes="57x57" href="assets/icon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="assets/icon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/icon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/icon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/icon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="assets/icon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="assets/icon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="assets/icon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/icon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="assets/icon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/icon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/icon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/icon/favicon-16x16.png">
    <link rel="manifest" href="assets/icon/manifest.json">
    <meta name="msapplication-TileColor" content="#FC5185">
    <meta name="msapplication-TileImage" content="assets/icon/ms-icon-144x144.png">

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-156753818-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        
        gtag('config', 'UA-156753818-1');
    </script>

    <meta name="theme-color" content="#FC5185">

    <link rel="stylesheet" href="assets/css/style.css">

    <?php if( isset($produto) ){ ?>
        <title>La Bella - <?php echo htmlspecialchars( $produto["nome"], ENT_COMPAT, 'UTF-8', FALSE ); ?></title>

        <meta name="description" content="La Bella - <?php echo htmlspecialchars( $produto["nome"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">

        <meta property="og:url" content="https://<?php echo htmlspecialchars( $_SERVER['SERVER_NAME'], ENT_COMPAT, 'UTF-8', FALSE ); ?><?php echo htmlspecialchars( $_SERVER['REQUEST_URI'], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
        <meta property="og:type" content="website">
        <meta property="og:title" content="La Bella - <?php echo htmlspecialchars( $produto["nome"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
        <meta property="og:description" content="<?php echo htmlspecialchars( $produto["nome"], ENT_COMPAT, 'UTF-8', FALSE ); ?> na La Bella, venha conferir">
        <meta property="og:image" content="https://<?php echo htmlspecialchars( $_SERVER['SERVER_NAME'], ENT_COMPAT, 'UTF-8', FALSE ); ?>/assets/produtos/<?php echo htmlspecialchars( $produto["img"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">

        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="La Bella - <?php echo htmlspecialchars( $produto["nome"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
        <meta name="twitter:description" content="<?php echo htmlspecialchars( $produto["nome"], ENT_COMPAT, 'UTF-8', FALSE ); ?> na La Bella, venha conferir">
        <meta name="twitter:image" content="https://<?php echo htmlspecialchars( $_SERVER['SERVER_NAME'], ENT_COMPAT, 'UTF-8', FALSE ); ?>/assets/produtos/<?php echo htmlspecialchars( $produto["img"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
    <?php }else{ ?>
        <title>La Bella - Moda feminina | Sandálias, Sapatilhas, Rasteirinhas e muito mais</title>

        <meta name="description" content="La Bella - Moda feminina. Sandálias, Saltos, Sapatos e muito mais ">
        
        <meta property="og:url" content="https://<?php echo htmlspecialchars( $_SERVER['SERVER_NAME'], ENT_COMPAT, 'UTF-8', FALSE ); ?><?php echo htmlspecialchars( $_SERVER['REQUEST_URI'], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
        <meta property="og:type" content="website">
        <meta property="og:title" content="La Bella - Moda feminina">
        <meta property="og:description" content="La Bella - Moda feminina. Sandálias, Saltos, Sapatos e muito mais">
        <meta property="og:image" content="https://<?php echo htmlspecialchars( $_SERVER['SERVER_NAME'], ENT_COMPAT, 'UTF-8', FALSE ); ?>/assets/img/labella-banner.jpg">

        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="La Bella - Moda feminina">
        <meta name="twitter:description" content="La Bella - Moda feminina. Sandálias, Saltos, Sapatos e muito mais">
        <meta name="twitter:image" content="https://<?php echo htmlspecialchars( $_SERVER['SERVER_NAME'], ENT_COMPAT, 'UTF-8', FALSE ); ?>/assets/img/labella-banner.jpg">
    <?php } ?>
</head>
<body>