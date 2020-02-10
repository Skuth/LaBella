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
                            <h3 class="mb-0">Editar produto de id <?php echo htmlspecialchars( $produto["id"], ENT_COMPAT, 'UTF-8', FALSE ); ?></h3>
                        </div>
                    </div>
                </div>
                
                <div class="card-body">
                    <form method="POST" action="/admin/produto/editproduto" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-10">
                                <div class="form-group">
                                    <input type="text" required class="form-control" value="<?php echo htmlspecialchars( $produto["nome"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" name="nome">
                                    <input type="hidden" name="id" value="<?php echo htmlspecialchars( $produto["id"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <input type="number" required class="form-control" value="<?php echo htmlspecialchars( $produto["valor"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" name="preco">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2">
                                <div class="form-group">
                                    <select required name="categoria">
                                        <option value="<?php echo htmlspecialchars( $produto["tipo"], ENT_COMPAT, 'UTF-8', FALSE ); ?>"><?php echo ucfirst($produto["tipo"]); ?></option>
                                        <?php $counter1=-1;  if( isset($categorias) && ( is_array($categorias) || $categorias instanceof Traversable ) && sizeof($categorias) ) foreach( $categorias as $key1 => $value1 ){ $counter1++; ?>
                                        <option value="<?php echo htmlspecialchars( $value1["categoria"], ENT_COMPAT, 'UTF-8', FALSE ); ?>"><?php echo ucfirst($value1["categoria"]); ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <select required name="marca">
                                        <option value="<?php echo htmlspecialchars( $produto["marca"], ENT_COMPAT, 'UTF-8', FALSE ); ?>"><?php echo ucfirst($produto["marca"]); ?></option>
                                        <?php $counter1=-1;  if( isset($marcas) && ( is_array($marcas) || $marcas instanceof Traversable ) && sizeof($marcas) ) foreach( $marcas as $key1 => $value1 ){ $counter1++; ?>
                                        <option value="<?php echo htmlspecialchars( $value1["marca"], ENT_COMPAT, 'UTF-8', FALSE ); ?>"><?php echo ucfirst($value1["marca"]); ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <input type="file" name="img[]" accept="image/png, image/jpeg" multiple>
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
    