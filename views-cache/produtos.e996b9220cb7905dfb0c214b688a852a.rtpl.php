<?php if(!class_exists('Rain\Tpl')){exit;}?><section class="productsList">
    <div class="filters">
        <li>
            CATEGORIA
            <ul>
                <?php $counter1=-1;  if( isset($categoria) && ( is_array($categoria) || $categoria instanceof Traversable ) && sizeof($categoria) ) foreach( $categoria as $key1 => $value1 ){ $counter1++; ?>
                <li><a href="/produtos/<?php echo htmlspecialchars( $value1["categoria"], ENT_COMPAT, 'UTF-8', FALSE ); ?>"><?php echo ucfirst($value1["categoria"]); ?></a></li>
                <?php } ?>
            </ul>
        </li>
        <li>
            MARCA
            <ul>
                <?php $counter1=-1;  if( isset($marca) && ( is_array($marca) || $marca instanceof Traversable ) && sizeof($marca) ) foreach( $marca as $key1 => $value1 ){ $counter1++; ?>
                <li><a href="/produtos/marca/<?php echo name($value1["marca"]); ?>"><?php echo ucfirst($value1["marca"]); ?></a></li>
                <?php } ?>
            </ul>
        </li>
    </div>
    
    <div class="products" style="min-height: 50vh;">
        
        <?php if( $produtos!=NULL ){ ?>
            <?php $counter1=-1;  if( isset($produtos) && ( is_array($produtos) || $produtos instanceof Traversable ) && sizeof($produtos) ) foreach( $produtos as $key1 => $value1 ){ $counter1++; ?>
            <div class="productBox">
                <a href="/produto/<?php echo name($value1["nome"]); ?>/<?php echo htmlspecialchars( $value1["id"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                    <div class="boxImg">
                        <img src="/assets/produtos/<?php echo htmlspecialchars( $value1["img"]["0"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" alt="Imagem do produto - <?php echo htmlspecialchars( $value1["nome"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                    </div>
                    <div class="boxInfo">
                        <p class="tag"><?php echo htmlspecialchars( $value1["marca"], ENT_COMPAT, 'UTF-8', FALSE ); ?></p>
                        <p class="title"><?php echo htmlspecialchars( $value1["nome"], ENT_COMPAT, 'UTF-8', FALSE ); ?></p>
                        <p class="price">R$ <span><?php echo htmlspecialchars( $value1["valor"], ENT_COMPAT, 'UTF-8', FALSE ); ?></span></p>
                    </div>
                </a>
            </div>
            <?php } ?>
        <?php }else{ ?>
            <p style="text-align: center; display: block; width: 100%; font-size: 24px;">Nada encontrado</p>
        <?php } ?>
        
    </div>
</div>
<br><br>
</section>