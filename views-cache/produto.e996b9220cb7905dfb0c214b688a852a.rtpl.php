<?php if(!class_exists('Rain\Tpl')){exit;}?><div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v6.0"></script>

<section class="productsList">
    <div class="productInfo">
        <div class="productPictures">
            
            <div class="productSlide">
                <?php $counter1=-1;  if( isset($produto["img"]) && ( is_array($produto["img"]) || $produto["img"] instanceof Traversable ) && sizeof($produto["img"]) ) foreach( $produto["img"] as $key1 => $value1 ){ $counter1++; ?>
                <img src="/assets/produtos/<?php echo htmlspecialchars( $value1, ENT_COMPAT, 'UTF-8', FALSE ); ?>" onclick="setImg(this)" alt="Imagem do produto - <?php echo htmlspecialchars( $produto["nome"], ENT_COMPAT, 'UTF-8', FALSE ); ?> - foto <?php echo htmlspecialchars( $key1 + 1, ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                <?php } ?>
            </div>
            
            <div class="productImg">
                <img id="productImg" src="/assets/produtos/<?php echo htmlspecialchars( $produto["img"]["0"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" alt="Imagem do produto - <?php echo htmlspecialchars( $produto["nome"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
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
                <a onclick="buyProduct(<?php echo htmlspecialchars( $produto["id"], ENT_COMPAT, 'UTF-8', FALSE ); ?>)" href="https://api.whatsapp.com/send?phone=5522996014887&text=Estava no site e me interessei pelo produto '<?php echo htmlspecialchars( $produto["nome"], ENT_COMPAT, 'UTF-8', FALSE ); ?>' - <?php echo htmlspecialchars( $url, ENT_COMPAT, 'UTF-8', FALSE ); ?>" target="_blank">Comprar</a>
            </div>

            <div class="price">
                <div class="fb-share-button price" data-href="https://<?php echo htmlspecialchars( $_SERVER['SERVER_NAME'], ENT_COMPAT, 'UTF-8', FALSE ); ?><?php echo htmlspecialchars( $_SERVER['REQUEST_URI'], ENT_COMPAT, 'UTF-8', FALSE ); ?>" data-layout="button" data-size="large"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Finvalid.invalid%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore"></a></div>
            </div>
            
        </div>
    </div>
    
    <div class="productsTip">
        <div class="products">
            
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
            
        </div>
    </div>
</div>

</section>