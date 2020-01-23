<?php if(!class_exists('Rain\Tpl')){exit;}?><section class="productsList">
    <div class="productInfo">
        <div class="productPictures">
            
            <div class="productSlide">
                <img src="/assets/produtos/<?php echo htmlspecialchars( $produto["img"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
            </div>
            
            <div class="productImg">
                <img src="/assets/produtos/<?php echo htmlspecialchars( $produto["img"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
            </div>
            
        </div>
        
        <div class="productDesc">
            
            <h2 class="title"><?php echo htmlspecialchars( $produto["nome"], ENT_COMPAT, 'UTF-8', FALSE ); ?></h2>
            
            <h3 class="price">R$ <span><?php echo htmlspecialchars( $produto["valor"], ENT_COMPAT, 'UTF-8', FALSE ); ?></span></h3>
            
            <!-- <div class="productSizes">
                <?php $counter1=-1;  if( isset($produto["tamanhos"]) && ( is_array($produto["tamanhos"]) || $produto["tamanhos"] instanceof Traversable ) && sizeof($produto["tamanhos"]) ) foreach( $produto["tamanhos"] as $key1 => $value1 ){ $counter1++; ?>
                <p><?php echo htmlspecialchars( $value1, ENT_COMPAT, 'UTF-8', FALSE ); ?></p>
                <?php } ?>
            </div> -->
            
            <p style="padding: 30px; color: red;">No momento vendas apenas por Whatsapp</p>

            <div class="button">
                <a href="https://api.whatsapp.com/send?phone=5522996014887&text=Estava no site e me interessei pelo produto '<?php echo htmlspecialchars( $produto["nome"], ENT_COMPAT, 'UTF-8', FALSE ); ?>' - <?php echo htmlspecialchars( $url, ENT_COMPAT, 'UTF-8', FALSE ); ?>" target="_blank">Comprar</a>
            </div>
            
        </div>
    </div>
    
    <div class="productsTip">
        <div class="products">
            
            <?php $counter1=-1;  if( isset($produtos) && ( is_array($produtos) || $produtos instanceof Traversable ) && sizeof($produtos) ) foreach( $produtos as $key1 => $value1 ){ $counter1++; ?>
            <div class="productBox">
                <a href="/produto/<?php echo name($value1["nome"]); ?>/<?php echo htmlspecialchars( $value1["id"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                    <div class="boxImg">
                        <img src="/assets/produtos/<?php echo htmlspecialchars( $value1["img"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" alt="">
                    </div>
                    <div class="boxInfo">
                        <p class="tag"><?php echo htmlspecialchars( $value1["marca"], ENT_COMPAT, 'UTF-8', FALSE ); ?></p>
                        <p class="title"><?php echo htmlspecialchars( $value1["nome"], ENT_COMPAT, 'UTF-8', FALSE ); ?></p>
                        <p class="price">R$ <span><?php echo htmlspecialchars( $value1["valor"], ENT_COMPAT, 'UTF-8', FALSE ); ?></span></p>
                    </div>
                </a>
            </div>
            <?php } ?>
            
        </div>
    </div>
</div>

</section>