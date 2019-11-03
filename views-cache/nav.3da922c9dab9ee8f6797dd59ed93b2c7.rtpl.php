<?php if(!class_exists('Rain\Tpl')){exit;}?> <nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
    <div class="container-fluid">
        <!-- Toggler -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Brand -->
        <a class="navbar-brand pt-0" href="/admin/painel">
            <img src="/assets/admin/img/brand/blue.png" class="navbar-brand-img" alt="...">
        </a>
        <!-- User -->
        <ul class="nav align-items-center d-md-none">
            <li class="nav-item dropdown">
                <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="media align-items-center">
                        <span class="avatar avatar-sm rounded-circle">
                            <img alt="Image placeholder" src="/assets/admin/img/theme/user.png
                            ">
                        </span>
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
                    <a href="/admin/logout" class="dropdown-item"><i class="ni ni-user-run"></i><span>Logout</span></a>
                </div>
            </li>
        </ul>
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
            <!-- Collapse header -->
            <div class="navbar-collapse-header d-md-none">
                <div class="row">
                    <div class="col-6 collapse-brand">
                        <a href="./index.html">
                            <img src="/assets/admin/img/brand/blue.png">
                        </a>
                    </div>
                    <div class="col-6 collapse-close">
                        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                            <span></span>
                            <span></span>
                        </button>
                    </div>
                </div>
            </div>
            <!-- Navigation -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class=" nav-link" href="/admin/painel"> <i class="ni ni-tv-2 text-primary"></i> Painel</a>
                </li>
                <li class="nav-item">
                    <a class=" nav-link" href="/admin/produtos"> <i class="ni ni-archive-2 text-default"></i> Produtos</a>
                </li>
                <li class="nav-item">
                    <a class=" nav-link" href="/admin/marcas"> <i class="ni ni-books text-success"></i> Marcas</a>
                </li>
                <li class="nav-item">
                    <a class=" nav-link" href="/admin/categorias"> <i class="ni ni-book-bookmark text-danger"></i> Categorias</a>
                </li>
                <li class="nav-item">
                    <a class=" nav-link" href="/admin/banner"> <i class="ni ni-album-2 text-warning"></i> Banner</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="main-content">
    <!-- Navbar -->
    <nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
        <div class="container-fluid">
            <!-- Brand -->
            <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block" href="/admin/painel">Painel</a> 
            <!-- User -->
            <ul class="navbar-nav align-items-center d-none d-md-flex">
                <li class="nav-item dropdown">
                    <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="media align-items-center">
                            <span class="avatar avatar-sm rounded-circle">
                                <img alt="Image placeholder" src="/assets/admin/img/theme/user.png">
                            </span>
                            <div class="media-body ml-2 d-none d-lg-block">
                                <span class="mb-0 text-sm  font-weight-bold"><?php echo htmlspecialchars( $_SESSION["login"]["nome"], ENT_COMPAT, 'UTF-8', FALSE ); ?></span>
                            </div>
                        </div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
                        <a href="/admin/logout" class="dropdown-item"><i class="ni ni-user-run"></i><span>Logout</span></a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>