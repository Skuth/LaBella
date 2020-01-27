<?php if(!class_exists('Rain\Tpl')){exit;}?><header class="header">
    <div class="imgBox" <?php if( $banner["link"] ){ ?>onclick="window.location.href='<?php echo htmlspecialchars( $banner["link"], ENT_COMPAT, 'UTF-8', FALSE ); ?>'" style="cursor: pointer;"<?php } ?>>
        <img src="/assets/banner/<?php echo htmlspecialchars( $banner["img"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" alt="Banner LaBella">
    </div>
</header>

<section class="offers">
    <div class="offerBox">
        <div class="offerText">
            <p>Moda Feminina</p>
            <a href="/produtos/feminino">Ver mais</a>
        </div>
        <div class="offerImg">
            <div class="imgBox" style="--main-bg-img: url('/assets/img/img1.png')"></div>
        </div>
    </div>
    
    <div class="offerBox">
        <div class="offerText">
            <p>Sapatos Femininos</p>
            <a href="/produtos/sapatos">Ver mais</a>
        </div>
        <div class="offerImg">
            <div class="imgBox" style="--main-bg-img: url('/assets/img/img2.png')"></div>
        </div>
    </div>
</section>

<section class="news">
    
    <div class="text">
        <h2>Novidades</h2>
    </div>
    
    <div class="products">

        <?php $counter1=-1;  if( isset($produtos) && ( is_array($produtos) || $produtos instanceof Traversable ) && sizeof($produtos) ) foreach( $produtos as $key1 => $value1 ){ $counter1++; ?>
        <div class="productBox">
            <a href="/produto/<?php echo name($value1["nome"]); ?>/<?php echo htmlspecialchars( $value1["id"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                <div class="boxImg">
                    <img src="/assets/produtos/<?php echo htmlspecialchars( $value1["img"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" alt="Imagem do produto - <?php echo htmlspecialchars( $value1["nome"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
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
    
    <div class="button">
        <a href="/produtos" class="pk">Ver mais</a>
    </div>
</section>

<!-- <section class="instagram">
    <div class="text">
        <h3>Instagram</h3>
        <p>@la.bella.cf</p>
    </div>
    
    <div class="pictureContainer">
        <a href="#" target="_blanked">
            <div class="box">
                <img src="https://bit.ly/2kyQ3y4" alt="">
            </div>
        </a>
        <a href="#" target="_blanked">
            <div class="box">
                <img src="https://bit.ly/2kyQ3y4" alt="">
            </div>
        </a>
        <a href="#" target="_blanked">
            <div class="box">
                <img src="https://bit.ly/2kyQ3y4" alt="">
            </div>
        </a>
        <a href="#" target="_blanked">
            <div class="box">
                <img src="https://bit.ly/2kyQ3y4" alt="">
            </div>
        </a>
    </div>
    
    <div class="button">
        <a href="https://www.instagram.com/la.bella.cf/" class="pk" target="_blanked">Ver mais</a>
    </div>
</section> -->