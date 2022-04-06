<?php if(!class_exists('Rain\Tpl')){exit;}?><div class="slider-area">
    <!-- Slider -->
    <div class="block-slider block-slider4">
        <ul class="" id="bxslider-home4">
            <li><img src="/res/site/img/h4-slide.png" alt="Slide"></li>
            <li><img src="/res/site/img/h4-slide2.png" alt="Slide"></li>
            <li><img src="/res/site/img/h4-slide3.png" alt="Slide"></li>
            <li><img src="/res/site/img/h4-slide4.png" alt="Slide"></li>
        </ul>
    </div>
    <!-- ./Slider -->
</div> <!-- End slider area -->

<div class="promo-area">
<div class="zigzag-bottom"></div>
<div class="container">
    <div class="row">
        <div class="col-md-4 col-sm-6">
            <div class="single-promo promo1">
                <i class="fa fa-group"></i>
                <p>Família</p> <br>
                <div class="laws">
                    <label>- Divórcio judicial e extrajudicial;</label><br>
                    <label>- Reconhecimento e dissolução de união estável;</label><br>
                    <label>- Consultoria e planejamento matrimonial;</label><br>
                    <label>- Ação de alimentos (fixação e revisão de pensão);</label><br>
                    <label>- Guarda e regulamentação de visitas.</label><br>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class="single-promo promo2">
                <i class="fa fa-shopping-cart"></i>
                <p>Consumidor</p>
                <div class="laws">
                    <label>- Planejamento Sucessório;</label><br>
                    <label>- Inventários;</label><br>
                    <label>- Doações;</label><br>
                    <label>- Testamento;</label><br>
                    <label>- Anulação de partilha;</label><br>
                    <label>- Anulação e revogação de testamento.</label><br>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class="single-promo promo3">
                <i class="fa fa-gavel"></i>
                <p>Sucessões</p>
                <div class="laws">
                    <label>- Planejamento Sucessório;</label><br>
                    <label>- Inventários;</label><br>
                    <label>- Doações;</label><br>
                    <label>- Testamento;</label><br>
                    <label>- Anulação de partilha;</label><br>
                    <label>- Anulação e revogação de testamento.</label><br>
                </div>
            </div>
        </div>
    </div>
</div>
</div> <!-- End promo area -->

<div class="maincontent-area">
<div class="zigzag-bottom"></div>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="latest-product">
                <h2 class="section-title">Produtos</h2>
                <div class="product-carousel">
                    <?php $counter1=-1;  if( isset($products) && ( is_array($products) || $products instanceof Traversable ) && sizeof($products) ) foreach( $products as $key1 => $value1 ){ $counter1++; ?>
                    <div class="single-product">
                        <div class="product-f-image">
                            <img src="<?php echo htmlspecialchars( $value1["desphoto"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" alt="">
                            <div class="product-hover">
                                <a href="/cart/<?php echo htmlspecialchars( $value1["idproduct"], ENT_COMPAT, 'UTF-8', FALSE ); ?>/add" class="add-to-cart-link" style="float: left; margin-top: -20px;"><i class="fa fa-shopping-cart"></i> Comprar</a>
                                <a href="/products/<?php echo htmlspecialchars( $value1["desurl"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" class="view-details-link"><i class="fa fa-link"></i> Ver Detalhes</a>
                            </div>
                        </div>
                        
                        <h2><a href="/products/<?php echo htmlspecialchars( $value1["desurl"], ENT_COMPAT, 'UTF-8', FALSE ); ?>"><?php echo htmlspecialchars( $value1["desproduct"], ENT_COMPAT, 'UTF-8', FALSE ); ?></a></h2>
                        
                        <div class="product-carousel-price">
                            <ins>R$<?php echo formatPrice($value1["vlprice"]); ?></ins>
                        </div> 
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>
</div> <!-- End main content area -->

<div class="brands-area">
<div class="zigzag-bottom"></div>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="brand-wrapper">
                <div class="brand-list">
                    <img src="/res/site/img/brand1.png" alt="">
                    <img src="/res/site/img/brand2.png" alt="">
                    <img src="/res/site/img/brand3.png" alt="">
                    <img src="/res/site/img/brand4.png" alt="">
                    <img src="/res/site/img/brand5.png" alt="">
                    <img src="/res/site/img/brand6.png" alt="">
                    <img src="/res/site/img/brand1.png" alt="">
                    <img src="/res/site/img/brand2.png" alt="">                            
                </div>
            </div>
        </div>
    </div>
</div>
</div> <!-- End brands area -->