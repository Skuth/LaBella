<?php if(!class_exists('Rain\Tpl')){exit;}?>


<!-- End Navbar -->
<!-- Header -->
<div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
  <div class="container-fluid">
    <div class="header-body">
      <!-- Card stats -->
      <div class="row">
        
       
        
      </div>
    </div>
  </div>
</div>

<div class="container-fluid mt--7">
  
  <div class="row mt-3">
    <div class="col-xl-4 center mb-5 mb-xl-0">
      <div class="card shadow">
        
        <div class="card-header border-0">
          <div class="row align-items-center">
            <div class="col">
              <h3 class="mb-0">Login</h3>
            </div>
          </div>
        </div>
        
        <div class="card-body">
          <form action="/admin/login/verificar" method="POST">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <input type="text" required class="form-control" placeholder="Login" name="login">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <input type="password" required class="form-control" placeholder="Senha" name="senha">
                    </div>
                </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <button type="submit" class="btn btn-md btn-default">
                    Entrar <i></i> <span class="fa fa-sign-in-alt"></span>
                  </button>
                </div>
              </div>
            </div>
          </form>

          <?php if( $erro ){ ?>

          <div class="alert alert-danger" role="alert">
            <strong>Erro!</strong> Login ou senha incorretos!
          </div>
          <?php } ?>

        </div>
        
      </div>
    </div>
  </div>
  <!--   Core   -->
