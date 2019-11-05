<?php if(!class_exists('Rain\Tpl')){exit;}?>

<!-- End Navbar -->
<!-- Header -->
<div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
    <div class="container-fluid">
        <div class="header-body">
            <!-- Card stats -->
            
        </div>
    </div>
</div>

<div class="container-fluid mt--7">
    
    <div class="row mt-3">
        <div class="col-xl-12">
            <div class="card shadow">
                
                <div class="card-header">
                    <div class="row">
                        <div class="col">
                            <h3 class="mb-0">Editar categoria de id <?php echo htmlspecialchars( $categoria["id"], ENT_COMPAT, 'UTF-8', FALSE ); ?></h3>
                        </div>
                    </div>
                </div>
                
                <div class="card-body">
                    <form method="POST" action="/admin/categoria/editcategoria">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" required class="form-control" value="<?php echo htmlspecialchars( $categoria["categoria"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" name="categoria">
                                    <input type="hidden" name="id" value="<?php echo htmlspecialchars( $categoria["id"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-default btn-md">
                                    Salvar <i></i> <span class="fa fa-save"></span>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                
            </div>
        </div>
    </div>
    <!--   Core   -->
    