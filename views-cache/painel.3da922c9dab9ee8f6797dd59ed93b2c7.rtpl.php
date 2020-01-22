<?php if(!class_exists('Rain\Tpl')){exit;}?>

<!-- End Navbar -->
<!-- Header -->
<div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
    <div class="container-fluid">
      <div class="header-body">
        <!-- Card stats -->
        <div class="row">
          
          <div class="col-xl-6 col-lg-6">
            <div class="card card-stats mb-4 mb-xl-0">
              <div class="card-body">
                <div class="row">
                  <div class="col">
                    <h5 class="card-title text-uppercase text-muted mb-0">Visitas</h5>
                    <span class="h2 font-weight-bold mb-0"><?php echo count($visitantes); ?></span>
                  </div>
                  <div class="col-auto">
                    <div class="icon icon-shape bg-danger text-white rounded-circle shadow">
                      <i class="fas fa-chart-bar"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
          <div class="col-xl-6 col-lg-6">
            <div class="card card-stats mb-4 mb-xl-0">
              <div class="card-body">
                <div class="row">
                  <div class="col">
                    <h5 class="card-title text-uppercase text-muted mb-0">Produtos</h5>
                    <span class="h2 font-weight-bold mb-0"><?php echo count($produtos); ?></span>
                  </div>
                  <div class="col-auto">
                    <div class="icon icon-shape bg-warning text-white rounded-circle shadow">
                      <i class="ni ni-archive-2"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
        </div>
      </div>
    </div>
  </div>
  
  <div class="container-fluid mt--7">
    
    <div class="row mt-3">
      <div class="col-xl-12 mb-5 mb-xl-0">
        <div class="card shadow">
          
          <div class="card-header border-0">
            <div class="row align-items-center">
              <div class="col">
                <h3 class="mb-0">Produtos</h3>
              </div>
              <div class="col text-right">
                <a href="/admin/produtos" class="btn btn-sm btn-primary">Ver todos</a>
              </div>
            </div>
          </div>
          
          <div class="table-responsive">
            <!-- Projects table -->
            <table class="table align-items-center table-flush">
                <thead class="thead-light">
                    <tr>
                        <th scope="col" style="text-align: center;">Foto</th>
                        <th scope="col" style="text-align: center;">Nome</th>
                        <th scope="col" style="text-align: center;">Preço</th>
                        <th scope="col" style="text-align: center;">Visitas</th>
                        <th scope="col" style="text-align: center;">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $counter1=-1;  if( isset($produtos) && ( is_array($produtos) || $produtos instanceof Traversable ) && sizeof($produtos) ) foreach( $produtos as $key1 => $value1 ){ $counter1++; ?>
                    <?php if( $key1<4 ){ ?>
                    <tr>
                        <td style="text-align: center;"><img src="/assets/produtos/<?php echo htmlspecialchars( $value1["img"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" width="40" alt="foto do produto <?php echo htmlspecialchars( $value1["nome"], ENT_COMPAT, 'UTF-8', FALSE ); ?>"></td>
                        <th scope="row" style="text-align: center;"><?php echo htmlspecialchars( $value1["nome"], ENT_COMPAT, 'UTF-8', FALSE ); ?></th>
                        <td style="text-align: center;"><?php echo htmlspecialchars( $value1["valor"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                        <td style="text-align: center;"><?php echo htmlspecialchars( $value1["visitas"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                        <td style="text-align: center;">
                            <a href="/admin/produto/editar/<?php echo htmlspecialchars( $value1["id"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" class="btn btn-icon btn-md btn-2 btn-primary">
                                <span class="btn-inner--icon"><i class="ni ni-settings-gear-65"></i></span>
                            </a>
                            <a onclick="delProduct(<?php echo htmlspecialchars( $value1["id"], ENT_COMPAT, 'UTF-8', FALSE ); ?>)" style="color: #f4f5f7;" class="btn btn-icon btn-2 btn-md btn-danger">
                                <span class="btn-inner--icon"><i class="fas fa-trash"></i></span>
                            </a>
                        </td>
                    </tr>
                    <?php } ?>
                    <?php } ?>
                </tbody>
            </table>
            
          </div>
          
        </div>
      </div>
    </div>
    <!--   Core   -->
    