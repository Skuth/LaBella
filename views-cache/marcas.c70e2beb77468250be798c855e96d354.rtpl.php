<?php if(!class_exists('Rain\Tpl')){exit;}?>

<!-- End Navbar -->
<!-- Header -->
<div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
        <div class="container-fluid">
            <div class="header-body">
                <!-- Card stats -->
                <div class="row">
                    <div class="col-xl-6">
                        <a href="/admin/marca/cadastrar" class="btn btn-icon btn-2 btn-success btn-lg">
                            Cadastrar <i></i> <span class="btn-inner--icon"><i class="fa fa-plus"></i></span>
                        </a>
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
                                <h3 class="mb-0">Marcas</h3>
                            </div>
                        </div>
                    </div>
                    
                    <div class="table-responsive">
                        <!-- Projects table -->
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col" style="text-align: center;">Nome</th>
                                    <th scope="col" style="text-align: center;">Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $counter1=-1;  if( isset($marcas) && ( is_array($marcas) || $marcas instanceof Traversable ) && sizeof($marcas) ) foreach( $marcas as $key1 => $value1 ){ $counter1++; ?>
                                <tr>
                                    <th scope="row" style="text-align: center;"><?php echo ucfirst($value1["marca"]); ?></th>
                                    <td style="text-align: center;">
                                        <a href="/admin/marca/editar/<?php echo htmlspecialchars( $value1["id"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" class="btn btn-icon btn-md btn-2 btn-primary">
                                            <span class="btn-inner--icon"><i class="ni ni-settings-gear-65"></i></span>
                                        </a>
                                        <a onclick="delMarca(<?php echo htmlspecialchars( $value1["id"], ENT_COMPAT, 'UTF-8', FALSE ); ?>)" style="color: #f4f5f7;" class="btn btn-icon btn-2 btn-md btn-danger">
                                            <span class="btn-inner--icon"><i class="fas fa-trash"></i></span>
                                        </a>
                                    </td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                        
                    </div>
                    
                </div>
            </div>
        </div>
        <!--   Core   -->
        